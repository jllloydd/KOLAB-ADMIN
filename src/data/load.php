<?php
include_once("../connect/session_check.php");
function jsonResponse($status, $message, $additionalData = []) {
    header('Content-Type: application/json');
    echo json_encode(array_merge([
        'status' => $status,
        'message' => $message
    ], $additionalData));
    exit;
}

function fetchAllBookings($conn, $page = 1, $criteria = 'fullname', $direction = 'asc', $limit = 11) {
    $offset = ($page - 1) * $limit;

    switch ($criteria) {
        case 'fullname':
            $orderByClause = "CONCAT(firstname, ' ', lastname) " . ($direction == 'asc' ? 'ASC' : 'DESC');
            break;
        case 'booking_date':
            $orderByClause = "booking_date " . ($direction == 'asc' ? 'ASC' : 'DESC');
            break;
        case 'status':
            $orderByClause = "status " . ($direction == 'asc' ? 'ASC' : 'DESC');
            break;
        default:
            $orderByClause = "bookingid DESC"; // Default ordering
            break;
    }

    $query = "SELECT 
                reference_number,
                CONCAT(firstname, ' ', lastname) AS fullname,
                email,
                term_rate,
                booking_date,
                status,
                payment_method,
                bookingid
              FROM bookings
              ORDER BY $orderByClause
              LIMIT $limit OFFSET $offset";
    
    $result = $conn->query($query);
    $bookings = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $bookings[] = $row;
        }
    }
    $totalRecords = $conn->query("SELECT COUNT(*) as total FROM bookings")->fetch_assoc()['total'];
    $totalPages = ceil($totalRecords / $limit);
    
    jsonResponse(true, "Bookings fetched successfully.", ['bookings' => $bookings, 'totalRecords' => $totalRecords, 'totalPages' => $totalPages]);
}

function searchBookings($conn, $keyword) {
    $keyword = "%" . $keyword . "%";
    $query = "SELECT 
                reference_number,
                CONCAT(firstname, ' ', lastname) AS fullname,
                email,
                term_rate,
                booking_date,
                status,
                payment_method,
                bookingid
              FROM bookings
              WHERE CONCAT(firstname, ' ', lastname) LIKE ? OR email LIKE ?
              ORDER BY booking_date DESC";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $keyword, $keyword);
    $stmt->execute();
    $result = $stmt->get_result();

    $bookings = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $bookings[] = $row;
        }
        jsonResponse(true, "Search results fetched successfully.", ['bookings' => $bookings]);
    } else {
        jsonResponse(false, "No bookings found for your search criteria.");
    }
}

function updateBookingDetails($conn, $bookingid, $booking_date, $status) {
    $stmt = $conn->prepare("UPDATE bookings SET booking_date = ?, status = ? WHERE bookingid = ?");
    $stmt->bind_param("ssi", $booking_date, $status, $bookingid);
    if ($stmt->execute()) {
        jsonResponse(true, "Booking updated successfully.");
    } else {
        jsonResponse(false, "Failed to update booking details.");
    }
}

// Handling POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($_POST['action']) {
        case 'fetchAllBookings':
            $page = $_POST['page'] ?? 1;
            $criteria = $_POST['criteria'] ?? 'fullname';
            $direction = $_POST['direction'] ?? 'asc';
            fetchAllBookings($conn, $page, $criteria, $direction);
            break;
        case 'searchBookings':
            $keyword = $_POST['query'] ?? '';
            searchBookings($conn, $keyword);
            break;
        case 'updateBookingDetails':
            $bookingid = $_POST['bookingid'] ?? null;
            $booking_date = $_POST['booking_date'] ?? null;
            $status = $_POST['status'] ?? null;
            if ($bookingid && $booking_date && $status) {
                updateBookingDetails($conn, $bookingid, $booking_date, $status);
            } else {
                jsonResponse(false, "Missing data for booking update.");
            }
            break;
        default:
            jsonResponse(false, "Invalid action.");
            break;
    }
}
?>

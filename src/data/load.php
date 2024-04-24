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

function fetchAllBookings($conn, $criteria = 'fullname', $direction = 'asc') {
    // Sorting logic based on criteria
    $orderByClause = "ORDER BY CONCAT(firstname, ' ', lastname) $direction";

    switch ($criteria) {
        case 'fullname':
            $orderByClause = "ORDER BY CONCAT(firstname, ' ', lastname) " . ($direction == 'asc' ? 'ASC' : 'DESC');
            break;
        case 'booking_date':
            $orderByClause = "ORDER BY booking_date " . ($direction == 'asc' ? 'ASC' : 'DESC');
            break;
        case 'status':
            $orderByClause = "ORDER BY status " . ($direction == 'asc' ? 'ASC' : 'DESC');
            break;
        // Additional sorting criteria can be added here
        default:
            break;
    }

    $query = "SELECT 
                bookingid,
                CONCAT(firstname, ' ', lastname) AS fullname,
                email,
                number,
                booking_date,
                status,
                reference_number,
                term_rate,
                dob,
                address,
                pax,
                start_time,
                end_time,
                payment_method,
                voucher,
                date_created
              FROM bookings
              $orderByClause";

    $result = $conn->query($query);
    $bookings = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $bookings[] = $row;
        }
        jsonResponse(true, "Bookings fetched successfully.", ['bookings' => $bookings]);
    } else {
        jsonResponse(false, "No bookings found.");
    }
}

function searchBookings($conn, $keyword) {
    $keyword = "%" . $keyword . "%";
    $query = "SELECT 
                bookingid,
                CONCAT(firstname, ' ', lastname) AS fullname,
                email,
                number,
                booking_date,
                status,
                reference_number,
                term_rate,
                dob,
                address,
                pax,
                start_time,
                end_time,
                payment_method,
                voucher,
                date_created
              FROM bookings
              WHERE firstname LIKE ? OR lastname LIKE ? OR email LIKE ? OR address LIKE ? OR number LIKE ?
              ORDER BY booking_date DESC, firstname ASC";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssss", $keyword, $keyword, $keyword, $keyword, $keyword);
    $stmt->execute();
    $result = $stmt->get_result();

    $bookings = [];
    while ($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }

    jsonResponse(true, "Search results fetched successfully.", ['bookings' => $bookings]);
}

function updateBookingDetails($conn, $bookingid, $booking_date, $status, $address, $number) {
    // Prepare an update statement to modify booking details
    $stmt = $conn->prepare("UPDATE bookings SET booking_date = ?, status = ?, address = ?, number = ? WHERE bookingid = ?");
    $stmt->bind_param("ssssi", $booking_date, $status, $address, $number, $bookingid);
    if ($stmt->execute()) {
        jsonResponse(true, "Booking updated successfully.");
    } else {
        jsonResponse(false, "Failed to update booking details.");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'fetchAllBookings':
                $criteria = $_POST['criteria'] ?? 'fullname';
                $direction = $_POST['direction'] ?? 'asc';
                fetchAllBookings($conn, $criteria, $direction);
                break;
            case 'searchBookings':
                $keyword = $_POST['query'] ?? '';
                searchBookings($conn, $keyword);
                break;
            case 'updateBookingDetails':
                $bookingid = $_POST['bookingid'] ?? null;
                $booking_date = $_POST['booking_date'] ?? null;
                $status = $_POST['status'] ?? null;
                $address = $_POST['address'] ?? null;
                $number = $_POST['number'] ?? null;
                if ($bookingid && $booking_date && $status && $address && $number) {
                    updateBookingDetails($conn, $bookingid, $booking_date, $status, $address, $number);
                } else {
                    jsonResponse(false, "Missing data for booking update.");
                }
                break;
            default:
                jsonResponse(false, "Invalid action.");
                break;
        }
    }
}
?>
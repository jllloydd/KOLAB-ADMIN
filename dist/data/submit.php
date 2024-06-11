<?php
include_once("../connect/session_check.php");
header('Content-Type: application/json');


function jsonResponse($status, $message, $additionalData = [])
{
    header('Content-Type: application/json');
    echo json_encode(array_merge([
        'status' => $status,
        'message' => $message
    ], $additionalData));
    exit;
}

function handleLogin($conn)
{
    if (!isset($_POST['usernameLogin'], $_POST['passwordLogin'])) {
        jsonResponse(false, "Username and password are required.");
        return;
    }

    $usernameLogin = $_POST['usernameLogin'];
    $passwordLogin = $_POST['passwordLogin'];

    $stmt = $conn->prepare("SELECT id, password FROM admin WHERE username = ?");
    $stmt->bind_param("s", $usernameLogin);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $admin = $result->fetch_assoc();
        // Directly compare plaintext passwords - for debugging purposes only
        if ($passwordLogin === $admin['password']) {
            $_SESSION['id'] = $admin['id'];
            session_regenerate_id();
            jsonResponse(true, "Login successful.", ['redirectUrl' => 'index.php']);
        } else {
            jsonResponse(false, "Invalid username or password.");
        }
    } else {
        jsonResponse(false, "Invalid username or password.");
    }
    $stmt->close();
}

function addEvent($conn)
{
    // Define base required fields
    $requiredFields = ['category', 'title', 'start_date', 'end_date', 'start_time', 'end_time', 'description'];

    // Check for the presence of all required fields
    foreach ($requiredFields as $field) {
        if (!isset($_POST[$field])) {
            jsonResponse(false, "All necessary fields are required.");
            return;
        }
    }

    // Sanitize and prepare the inputs
    $category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);
    $event_title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    $event_start_date = filter_var($_POST['start_date'], FILTER_SANITIZE_STRING);
    $event_end_date = filter_var($_POST['end_date'], FILTER_SANITIZE_STRING);
    $start_time = date('H:i:s', strtotime($_POST['start_time']));
    $end_time = date('H:i:s', strtotime($_POST['end_time']));
    $event_desc = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

    // Start transaction
    $conn->begin_transaction();
    try {
        // Insert event
        $eventStmt = $conn->prepare("INSERT INTO events (category, event_title, event_start_date, event_end_date, start_time, end_time, event_desc) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $eventStmt->bind_param("sssssss", $category, $event_title, $event_start_date, $event_end_date, $start_time, $end_time, $event_desc);
        $eventStmt->execute();
        $eventid = $conn->insert_id;

        // Commit the transaction
        $conn->commit();
        jsonResponse(true, "Event added successfully with ID: " . $eventid);
    } catch (Exception $e) {
        $conn->rollback();
        jsonResponse(false, "An error occurred: " . $e->getMessage());
        exit();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'admin_login':
                handleLogin($conn);
                break;
            case 'addEvent':
                addEvent($conn);
                break;
            default:
                jsonResponse(false, "Invalid action.");
                break;
        }
    }
}
?>
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

function handleLogin($conn) {
    if (!isset($_POST['usernameLogin'], $_POST['passwordLogin'])) {
        jsonResponse(false, "Username and password are required.");
        return;
    }

    $usernameLogin = $_POST['usernameLogin'];
    $passwordLogin = $_POST['passwordLogin'];

    $stmt = $conn->prepare("SELECT adminid, password FROM admin WHERE username = ?");
    $stmt->bind_param("s", $usernameLogin);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $admin = $result->fetch_assoc();
        // Directly compare plaintext passwords - for debugging purposes only
        if ($passwordLogin === $admin['password']) {
            $_SESSION['adminid'] = $admin['adminid'];
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'admin_login':
                handleLogin($conn);
                break;
            default:
                jsonResponse(false, "Invalid action.");
            break;
        }
    }
}
?>
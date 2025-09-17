<?php
session_start();

// Import database models
require_once __DIR__ . '/../model/Admin.php';
require_once __DIR__ . '/../model/Client.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ✅ Admin login
    if (isset($_POST['adminUsername'], $_POST['adminPassword'])) {
        $adminUsername = $_POST['adminUsername'];
        $adminPassword = $_POST['adminPassword'];

        $adminModel = new AdminLogin();
        $admin = $adminModel->getAdminByUsername($adminUsername);

        if ($admin && password_verify($adminPassword, $admin['admin_password'])) {
            $_SESSION['admin_username'] = $admin['admin_username'];
            echo json_encode(["status" => "success", "message" => "Admin login successful!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Invalid username or password"]);
        }
        exit; // stop here so client login doesn’t run
    }

    // ✅ Client login
    if (isset($_POST['clientEmail'], $_POST['clientPassword'])) {
        $clientEmail = $_POST['clientEmail'];
        $clientPassword = $_POST['clientPassword'];

        $clientModel = new ClientLogin();
        $client = $clientModel->getClientByEmail($clientEmail);

        if ($client && password_verify($clientPassword, $client['client_password'])) {
            $_SESSION['client_email'] = $client['client_email'];
            echo json_encode(["status" => "success", "message" => "Client login successful!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Invalid email or password"]);
        }
        exit;
    }

   // ✅ Client Register
// ✅ Client Register
if (isset($_POST['clientRegEmail'], $_POST['clientRegPassword'], $_POST['clientRegConPassword'], $_POST['clientRegUsername'])) {

    $clientUsername    = $_POST['clientRegUsername'];
    $clientEmail       = $_POST['clientRegEmail'];
    $clientPassword    = $_POST['clientRegPassword'];
    $clientConPassword = $_POST['clientRegConPassword'];

    $clientModel = new ClientLogin();

    // 🔑 Check if email already exists
    $existingClient = $clientModel->getClientByEmail($clientEmail);
    if ($existingClient) {
        echo json_encode(["status" => "error", "message" => "Email already registered"]);
        exit;
    }

    // 🔑 Check if passwords match
    if ($clientPassword !== $clientConPassword) {
        echo json_encode(["status" => "error", "message" => "Passwords do not match"]);
        exit;
    }

    // 🔑 Hash the password
    $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);

    // 🔑 Insert client
    $inserted = $clientModel->registerClient($clientUsername, $clientEmail, $hashedPassword);

    if ($inserted) {
        $_SESSION['client_email'] = $clientEmail;
        echo json_encode(["status" => "success", "message" => "Client registered successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Registration failed. Try again."]);
    }

    exit;
}




    // ✅ If neither set → invalid request
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}

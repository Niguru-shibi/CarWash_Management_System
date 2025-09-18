<?php
session_start();

// Import database models
require_once __DIR__ . '/../model/Admin.php';
require_once __DIR__ . '/../model/Client.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
    exit;
}

/**
 * ---------------- Admin Login ----------------
 */
if (isset($_POST['adminUsername'], $_POST['adminPassword'])) {
    $adminUsername = trim($_POST['adminUsername']);
    $adminPassword = trim($_POST['adminPassword']);

    $adminModel = new AdminLogin();
    $admin = $adminModel->getAdminByUsername($adminUsername);

    if ($admin && password_verify($adminPassword, $admin['admin_password'])) {
        $_SESSION['admin_username'] = $admin['admin_username'];
        echo json_encode(["status" => "success", "message" => "Admin login successful!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid username or password"]);
    }
    exit;
}

/**
 * ---------------- Client Login ----------------
 */
if (isset($_POST['clientEmail'], $_POST['clientPassword'])) {
    $clientEmail = trim($_POST['clientEmail']);
    $clientPassword = trim($_POST['clientPassword']);

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

/**
 * ---------------- Client Register ----------------
 */
if (
    isset(
        $_POST['clientRegUsername'],
        $_POST['clientRegEmail'],
        $_POST['clientRegPassword'],
        $_POST['clientRegConPassword']
    )
) {
    $clientUsername    = trim($_POST['clientRegUsername']);
    $clientEmail       = trim($_POST['clientRegEmail']);
    $clientPassword    = trim($_POST['clientRegPassword']);
    $clientConPassword = trim($_POST['clientRegConPassword']);

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

/**
 * ---------------- Fallback ----------------
 */
echo json_encode(["status" => "error", "message" => "Invalid request"]);
exit;

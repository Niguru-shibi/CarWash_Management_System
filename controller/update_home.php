<?php
header('Content-Type: application/json');
include '../config/db_connect.php'; // adjust path if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize inputs
    $id       = intval($_POST['crsl_id']);
    $header   = trim($_POST['crsl_header']);
    $desc     = trim($_POST['crsl_desc']);
    $location = trim($_POST['crsl_location']);
    $email    = trim($_POST['crsl_email']);
    $number   = trim($_POST['crsl_number']);

    if (empty($id) || empty($header) || empty($desc) || empty($location) || empty($email) || empty($number)) {
        echo json_encode([
            "status" => "error",
            "message" => "All fields are required."
        ]);
        exit;
    }

    // Prepare SQL
    $stmt = $conn->prepare("UPDATE home_crsl_tb 
        SET crsl_header = ?, crsl_desc = ?, crsl_location = ?, crsl_email = ?, crsl_number = ? 
        WHERE crsl_id = ?");
    $stmt->bind_param("sssssi", $header, $desc, $location, $email, $number, $id);

    if ($stmt->execute()) {
        echo json_encode([
            "status" => "success",
            "message" => "Home info updated successfully!"
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Database update failed: " . $stmt->error
        ]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid request method."
    ]);
}

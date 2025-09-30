<?php
header('Content-Type: application/json');
include '../config/connect_db.php'; // adjust path if needed

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // ✅ Fetch the latest home info
    $sql = "SELECT * FROM home_crsl_tb ORDER BY crsl_id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Store the row into $homeData
        $homeData = $result->fetch_assoc();

        echo json_encode([
            "status" => "success",
            "data"   => $homeData   // returning $homeData as JSON
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "No data found."
        ]);
    }

    $conn->close();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ✅ Get and sanitize inputs
    $id       = intval($_POST['crsl_id']);
    $header   = trim($_POST['crsl_header']);
    $desc     = trim($_POST['crsl_desc']);
    $location = trim($_POST['crsl_location']);
    $email    = trim($_POST['crsl_email']);
    $number   = trim($_POST['crsl_number']);

    // Validation
    if (empty($id) || empty($header) || empty($desc) || empty($location) || empty($email) || empty($number)) {
        echo json_encode([
            "status" => "error",
            "message" => "All fields are required."
        ]);
        exit;
    }

    // ✅ Update query
    $stmt = $conn->prepare("
        UPDATE home_crsl_tb 
        SET crsl_header = ?, crsl_desc = ?, crsl_location = ?, crsl_email = ?, crsl_number = ? 
        WHERE crsl_id = ?
    ");

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
    exit;
}

// ❌ Invalid request
echo json_encode([
    "status" => "error",
    "message" => "Invalid request method."
]);

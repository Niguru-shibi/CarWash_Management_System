<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Content-Type: application/json"); // ✅ force JSON response

require_once("../model/config/connect_db.php");

$response = ["status" => "error", "message" => "Unknown error"];

try {
    $db = new Connector();
    // ✅ Ensure getConnection() method exists in your Connector class
    $conn = $db->getConnection();

    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        $sql = "SELECT * FROM home_crsl_tb LIMIT 1"; 
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $response = ["status" => "success", "data" => $row];
        } else {
            $response = ["status" => "error", "message" => "No data found"];
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id       = $_POST["crsl_id"] ?? 1; // default row ID
        $header   = $_POST["crsl_header"] ?? "";
        $desc     = $_POST["crsl_desc"] ?? "";
        $location = $_POST["crsl_location"] ?? "";
        $email    = $_POST["crsl_email"] ?? "";
        $number   = $_POST["crsl_number"] ?? "";

        $stmt = $conn->prepare("UPDATE home_crsl_tb 
            SET crsl_header=?, crsl_desc=?, crsl_location=?, crsl_email=?, crsl_number=? 
            WHERE crsl_id=?");
        $stmt->bind_param("sssssi", $header, $desc, $location, $email, $number, $id);

        if ($stmt->execute()) {
            $response = ["status" => "success", "message" => "Updated successfully"];
        } else {
            $response = ["status" => "error", "message" => "DB update failed: " . $stmt->error];
        }
        $stmt->close();
    }
} catch (Exception $e) {
    $response = ["status" => "error", "message" => $e->getMessage()];
}

echo json_encode($response);
exit;

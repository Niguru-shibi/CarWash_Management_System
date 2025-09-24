<?php
session_start();
require_once __DIR__ . '/../model/Services.php'; // Ensure class name matches

header('Content-Type: application/json');

$serviceModel = new Service();

// ---------------- Add New Washing Plan ----------------
if (isset($_GET['action']) && $_GET['action'] === 'addService') {
    if (isset($_POST['serviceName'], $_POST['price'], $_POST['description'], $_POST['duration'])) {
        $inserted = $serviceModel->addService(
            $_POST['serviceName'],
            $_POST['price'],
            $_POST['description'],
            $_POST['duration']
        );

        echo json_encode($inserted
            ? ["status" => "success", "message" => "Washing plan added successfully!"]
            : ["status" => "error", "message" => "Failed to add washing plan."]
        );
    } else {
        echo json_encode(["status" => "error", "message" => "Missing required fields"]);
    }
    exit;
}

// ---------------- Get All Washing Plans ----------------
if (isset($_GET['action']) && $_GET['action'] === 'getServices') {
    $services = $serviceModel->getAllServices();
    echo json_encode($services ? $services : []);
    exit;
}

// ---------------- Update Washing Plan ----------------
if (isset($_GET['action']) && $_GET['action'] === 'updateService') {
    if (isset($_POST['serviceId'], $_POST['serviceName'], $_POST['price'], $_POST['description'], $_POST['duration'])) {
        $updated = $serviceModel->updateService(
            $_POST['serviceId'],
            $_POST['serviceName'],
            $_POST['price'],
            $_POST['description'],
            $_POST['duration']
        );

        echo json_encode($updated
            ? ["status" => "success", "message" => "Washing plan updated successfully!"]
            : ["status" => "error", "message" => "Failed to update washing plan."]
        );
    } else {
        echo json_encode(["status" => "error", "message" => "Missing required fields"]);
    }
    exit;
}

// ---------------- Delete Washing Plan ----------------
if (isset($_GET['action']) && $_GET['action'] === 'deleteService') {
    if (isset($_POST['serviceId'])) {
        $deleted = $serviceModel->deleteService($_POST['serviceId']);

        echo json_encode($deleted
            ? ["status" => "success", "message" => "Washing plan deleted successfully!"]
            : ["status" => "error", "message" => "Failed to delete washing plan."]
        );
    } else {
        echo json_encode(["status" => "error", "message" => "Missing service ID"]);
    }
    exit;
}

// ---------------- Invalid Request ----------------
echo json_encode(["status" => "error", "message" => "Invalid request"]);

<?php
session_start();
require_once __DIR__ . '/../model/Services.php'; // your Service model

header('Content-Type: application/json');

// ---------------- Add New Washing Plan ----------------
if (isset($_GET['action']) && $_GET['action'] === 'addService') {
    if (
        isset(
            $_POST['serviceName'],
            $_POST['price'],
            $_POST['description'],
            $_POST['duration']
        )
    ) {
        $serviceName = $_POST['serviceName'];
        $price       = $_POST['price'];
        $description = $_POST['description'];
        $duration    = $_POST['duration'];

        $serviceModel = new Service();

        $inserted = $serviceModel->addService(
            $serviceName,
            $price,
            $description,
            $duration
        );

        if ($inserted) {
            echo json_encode(["status" => "success", "message" => "Washing plan added successfully!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to add washing plan."]);
        }
        exit;
    } else {
        echo json_encode(["status" => "error", "message" => "Missing required fields"]);
        exit;
    }
}

// ---------------- Get All Washing Plans ----------------
if (isset($_GET['action']) && $_GET['action'] === 'getServices') {
    $serviceModel = new Service();
    $services = $serviceModel->getAllServices();

    echo json_encode($services);
    exit;
}

// ---------------- Update Washing Plan ----------------
if (isset($_GET['action']) && $_GET['action'] === 'updateService') {
    if (
        isset(
            $_POST['serviceId'],
            $_POST['serviceName'],
            $_POST['price'],
            $_POST['description'],
            $_POST['duration']
        )
    ) {
        $serviceId   = $_POST['serviceId'];
        $serviceName = $_POST['serviceName'];
        $price       = $_POST['price'];
        $description = $_POST['description'];
        $duration    = $_POST['duration'];

        $serviceModel = new Service();

        $updated = $serviceModel->updateService(
            $serviceId,
            $serviceName,
            $price,
            $description,
            $duration
        );

        if ($updated) {
            echo json_encode(["status" => "success", "message" => "Washing plan updated successfully!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to update washing plan."]);
        }
        exit;
    } else {
        echo json_encode(["status" => "error", "message" => "Missing required fields"]);
        exit;
    }
}

// ---------------- Delete Washing Plan ----------------
if (isset($_GET['action']) && $_GET['action'] === 'deleteService') {
    if (isset($_POST['serviceId'])) {
        $serviceId = $_POST['serviceId'];
        $serviceModel = new Service();

        $deleted = $serviceModel->deleteService($serviceId);

        if ($deleted) {
            echo json_encode(["status" => "success", "message" => "Washing plan deleted successfully!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to delete washing plan."]);
        }
        exit;
    } else {
        echo json_encode(["status" => "error", "message" => "Missing service ID"]);
        exit;
    }
}

echo json_encode(["status" => "error", "message" => "Invalid request"]);

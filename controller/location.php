<?php
session_start();
require_once __DIR__ . '/../model/Location.php';

header('Content-Type: application/json');

// ---------------- Add Branch Location ----------------
if (isset($_GET['action']) && $_GET['action'] === 'addLocation') {
    if (
        isset(
            $_POST['washPointName'],
            $_POST['washPointLocation'],
            $_POST['washPointEmail'],
            $_POST['washPointContact'],
            $_POST['washPointMapLink']
        )
    ) {
        $locBranchName  = $_POST['washPointName'];
        $locLocation    = $_POST['washPointLocation'];
        $locEmail       = $_POST['washPointEmail'];
        $locContact     = $_POST['washPointContact'];
        $locMapLink     = $_POST['washPointMapLink'];

        $locationModel = new Location();

        $inserted = $locationModel->addLocation(
            $locBranchName,
            $locLocation,
            $locEmail,
            $locContact,
            $locMapLink
        );

        if ($inserted) {
            echo json_encode(["status" => "success", "message" => "Branch Location added successfully!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to add Branch Location."]);
        }
        exit;
    } else {
        echo json_encode(["status" => "error", "message" => "Missing required fields"]);
        exit;
    }
}

// ---------------- Get All Branch Locations ----------------
if (isset($_GET['action']) && $_GET['action'] === 'getLocation') {
    $location_model = new Location();
    $locations = $location_model->getAllLocation();

    echo json_encode($locations);
    exit;
}

echo json_encode(["status" => "error", "message" => "Invalid request"]);

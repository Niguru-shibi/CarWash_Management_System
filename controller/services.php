<?php
header('Content-Type: application/json');
require_once "../model/Services.php";

$services = new Services();
$action = $_GET['action'] ?? $_POST['action'] ?? null;

if (!$action) {
    echo json_encode(['status' => 'error', 'message' => 'No action specified.']);
    exit;
}

switch ($action) {

    // GET ALL SERVICES
    case 'getServices':
        $allServices = $services->getAllServices();
        echo json_encode($allServices);
        break;

    // GET SINGLE SERVICE BY ID
    case 'getService':
        if (!isset($_GET['id'])) {
            echo json_encode(['status' => 'error', 'message' => 'Service ID required.']);
            break;
        }
        $service = $services->getServiceById((int)$_GET['id']);
        echo json_encode($service);
        break;

    // ADD OR UPDATE SERVICE
    case 'saveService':
        $data = [
            'services_id' => $_POST['services_id'] ?? null,
            'services_icon' => $_POST['services_icon'] ?? '',
            'services_title' => $_POST['services_title'] ?? '',
            'services_subtitle' => $_POST['services_subtitle'] ?? '',
            'services_description' => $_POST['services_description'] ?? '',
            'services_list_items' => $_POST['services_list_items'] ?? '',
            'services_status' => $_POST['services_status'] ?? 'active'
        ];
        $result = $services->saveService($data);
        echo json_encode($result);
        break;

    // DELETE SERVICE
    case 'deleteService':
        if (!isset($_POST['serviceId'])) {
            echo json_encode(['status' => 'error', 'message' => 'Service ID required.']);
            break;
        }
        $result = $services->deleteService((int)$_POST['serviceId']);
        echo json_encode($result);
        break;

    default:
        echo json_encode(['status' => 'error', 'message' => 'Invalid action.']);
        break;
}

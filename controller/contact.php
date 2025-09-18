<?php
session_start();
require_once __DIR__ . '/../model/Client.php';

header('Content-Type: application/json');

//-- Insert Contact Message  --//
if (
    isset(
        $_POST['contactName'],       
        $_POST['contactEmail'],
        $_POST['contactContact'],
        $_POST['contactAddress'],
        $_POST['contactMessage']
    )
) {
    $contactName    = $_POST['contactName'];
    $contactEmail   = $_POST['contactEmail'];
    $contactContact = $_POST['contactContact'];
    $contactAddress = $_POST['contactAddress'];
    $contactMessage = $_POST['contactMessage'];

    $clientModel = new ClientLogin();

    $inserted = $clientModel->sendcontact(
        $contactName,
        $contactEmail,
        $contactContact,
        $contactAddress,
        $contactMessage
    );

    if ($inserted) {
        echo json_encode(["status" => "success", "message" => "Message sent successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to send message. Please try again."]);
    }
    exit;
}




if (isset($_GET['action']) && $_GET['action'] === 'getcontact') {
    $contact_model = new ClientLogin();
    $data = $contact_model->getAllContacts();

    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}








 

echo json_encode(["status" => "error", "message" => "Invalid request"]);

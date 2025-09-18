<?php
// import database connection
require_once 'config/connect_db.php';

class ClientLogin extends Connector {
    public function __construct() {
        parent::__construct();
    }

    // ✅ Get a single client by email (for login)
    public function getClientByEmail($clientEmail) {
        $sql = "SELECT * FROM client_tb WHERE client_email = ?";
        $query = $this->conn->prepare($sql);

        if (!$query) {
            die("Query preparation failed: " . $this->conn->error);
        }

        $query->bind_param("s", $clientEmail);
        $query->execute();

        $result = $query->get_result();

        return $result->fetch_assoc();
    }

    // ✅ Create new client (registration)
    public function registerClient($username, $email, $password) {
        try {
            $sql = "INSERT INTO client_tb (client_username, client_email, client_password) 
                    VALUES (?, ?, ?)";
            $query = $this->conn->prepare($sql);

            $query->bind_param("sss", $username, $email, $password);

            return $query->execute();
        } catch (PDOException $e) {
            error_log("❌ Client creation failed: " . $e->getMessage());
            return false;
        }
    }

    //-- Send contact message --
    public function sendContact($contactName, $contactEmail, $contactContact, $contactAddress, $contactMessage) {
        $sql = "INSERT INTO contact_tb (contact_name, contact_email, contact_contact, contact_address, contact_message) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            die("Statement preparation failed: " . $this->conn->error);
        }

        $stmt->bind_param(
            "sssss",
            $contactName,
            $contactEmail,
            $contactContact,
            $contactAddress,
            $contactMessage
        );

        return $stmt->execute();
    }

    //-- Get all contact messages --
    public function getAllContacts() {
        $sql = "SELECT * FROM contact_tb ORDER BY contact_date DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

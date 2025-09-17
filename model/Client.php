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

        // ✅ return just one row (assoc) instead of all rows
        return $result->fetch_assoc();
    }


    // ✅ Create new client (registration)
    public function registerClient($username, $email, $password) {
        try {
            $sql = "INSERT INTO client_tb (client_username, client_email, client_password) 
                    VALUES (?, ?, ?)";
            $query = $this->conn->prepare($sql);

            $query->bind_param("sss", $username, $email, $password);

            return $query->execute(); // true if success
        } catch (PDOException $e) {
            error_log("❌ Client creation failed: " . $e->getMessage());
            return false;
        }
    }
}

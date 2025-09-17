<?php
// import database connection
require_once 'config/connect_db.php';

class Client extends Connector {
    public function __construct() {
        parent::__construct();
    }

    // ✅ Get client by email
    public function getClientByEmail($clientEmail) {
        $sql = "SELECT * FROM client_tb WHERE client_email = :client_email";
        $query = $this->conn->prepare($sql);

        $query->bindParam(':client_email', $clientEmail);
        $query->execute(); // run the query

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // ✅ Create new client (registration)
    public function createClient($username, $email, $password) {
        try {
            $sql = "INSERT INTO client_tb (client_username, client_email, client_password) 
                    VALUES (:username, :email, :password)";
            $query = $this->conn->prepare($sql);

            $query->bindParam(':username', $username);
            $query->bindParam(':email', $email);
            $query->bindParam(':password', $password);

            return $query->execute(); // true if success
        } catch (PDOException $e) {
            error_log("❌ Client creation failed: " . $e->getMessage());
            return false;
        }
    }
}

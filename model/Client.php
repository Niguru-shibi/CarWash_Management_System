<?php
// import database connection
require_once 'config/connect_db.php';

class ClientLogin extends Connector {
    public function __construct() {
        parent::__construct();
    }

    public function getClientByEmail($clientEmail) {
        $stmt = $this->conn->prepare("SELECT * FROM client_tb WHERE client_email = ? LIMIT 1");
        $stmt->bind_Param("s", $clientEmail);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    
}

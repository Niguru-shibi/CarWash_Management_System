<?php
// import database connection
require_once 'config/connect_db.php';

class Client extends Connector {
    public function __construct() {
        parent::__construct();
    }

    public function getClientByEmail($clientEmail) {
        $sql = "SELECT * FROM client_tb WHERE client_email = :client_email";
        $query = $this->conn->prepare($sql);

        $query->bindParam(':client_email', $clientEmail);
        $query->execute(); //run the query

        return $query->fetchall(PDO::FETCH_ASSOC);
    }
}
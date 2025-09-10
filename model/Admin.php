<?php
// import database connection
require_once 'config/connect_db.php';

class Admin extends Connector {
    public function __construct() {
        parent::__construct();
    }

    public function getAdminByUsername($adminUsername) {
        $sql = "SELECT * FROM admin_tb WHERE admin_username = :admin_username";
        $query = $this->conn->prepare($sql);

        $query->bindParam(':admin_username', $adminUsername);
        $query->execute(); //run the query

        return $query->fetchall(PDO::FETCH_ASSOC);
    }
}
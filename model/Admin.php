<?php
// import database connection
require_once 'config/connect_db.php';

class AdminLogin extends Connector {
    public function __construct() {
        parent::__construct();
    }

    public function getAdminByUsername($adminUsername) {
        $sql = "SELECT * FROM admin_tb WHERE admin_username = ?";
        $query = $this->conn->prepare($sql);

        $query->bind_param("s", $adminUsername);
        $query->execute(); //run the query

        $result = $query->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
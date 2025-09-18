<?php
// import database connection
require_once 'config/connect_db.php';

class AdminLogin extends Connector {
    public function __construct() {
        parent::__construct();
    }

    public function getAdminByUsername($adminUsername) {
        $sql = "SELECT * FROM admin_tb WHERE admin_username = ? LIMIT 1";
        $query = $this->conn->prepare($sql);

        $query->bind_param("s", $adminUsername);
        $query->execute();

        $result = $query->get_result();
        return $result->fetch_assoc(); // ✅ returns single row (assoc array) or null
    }
}

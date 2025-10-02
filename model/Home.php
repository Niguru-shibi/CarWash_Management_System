<?php
require_once __DIR__ . "/config/connect_db.php";

class Home extends Connector {

    // Get website info (latest row or single config)
    public function getInfo() {
        $sql = "SELECT * FROM home_info LIMIT 1"; 
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    // Update website info
    public function updateInfo($data) {
        $stmt = $this->conn->prepare("UPDATE home_info 
            SET crsl_header=?, crsl_desc=?, crsl_location=?, crsl_email=?, crsl_number=? 
            WHERE id=?");
        $stmt->bind_param(
            "sssssi", 
            $data['crsl_header'], 
            $data['crsl_desc'], 
            $data['crsl_location'], 
            $data['crsl_email'], 
            $data['crsl_number'], 
            $data['id']
        );
        return $stmt->execute();
    }
}

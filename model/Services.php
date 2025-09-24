<?php
require_once 'config/connect_db.php';

class Service extends Connector {
    public function __construct() {
        parent::__construct();
    }

    //-- Add a new washing plan --//
    public function addService($serviceName, $price, $description, $duration) {
        $sql = "INSERT INTO washplan_tb 
                (washplan_name, washplan_price, washplan_description, washplan_duration, washplan_date) 
                VALUES (?, ?, ?, ?, NOW())";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdss", $serviceName, $price, $description, $duration); 
        return $stmt->execute();
    }

    //-- Get all washing plans --//
    public function getAllServices() {
        $sql = "SELECT * FROM washplan_tb ORDER BY washplan_date DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    //-- Update a washing plan --//
    public function updateService($serviceId, $serviceName, $price, $description, $duration) {
        $sql = "UPDATE washplan_tb 
                SET washplan_name = ?, washplan_price = ?, washplan_description = ?, washplan_duration = ? 
                WHERE washplan_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdssi", $serviceName, $price, $description, $duration, $serviceId);
        return $stmt->execute();
    }

    //-- Delete a washing plan --//
    public function deleteService($serviceId) {
        $sql = "DELETE FROM washplan_tb WHERE washplan_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $serviceId);
        return $stmt->execute();
    }
}

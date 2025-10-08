<?php
require_once "config/connect_db.php";

class Services extends Connector
{
    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    // ✅ GET ALL SERVICES
    public function getAllServices()
    {
        $sql = "SELECT * FROM services_tb ORDER BY services_display_order ASC";
        $result = $this->conn->query($sql);
        $services = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $services[] = $row;
            }
        }
        return $services;
    }

    // ✅ GET SINGLE SERVICE BY ID
    public function getServiceById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM services_tb WHERE services_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // ✅ ADD OR UPDATE SERVICE
    public function saveService($data)
    {
        if (!empty($data['services_id'])) {
            // Update existing record
            $stmt = $this->conn->prepare("
                UPDATE services_tb 
                SET services_icon=?, services_title=?, services_subtitle=?, services_description=?, 
                    services_list_items=?, services_status=?, updated_at=NOW()
                WHERE services_id=?
            ");
            $stmt->bind_param(
                "ssssssi",
                $data['services_icon'],
                $data['services_title'],
                $data['services_subtitle'],
                $data['services_description'],
                $data['services_list_items'],
                $data['services_status'],
                $data['services_id']
            );

            if ($stmt->execute()) {
                return ['status' => 'success', 'message' => 'Service updated successfully.'];
            }
        } else {
            // Insert new record
            $stmt = $this->conn->prepare("
                INSERT INTO services_tb 
                (services_icon, services_title, services_subtitle, services_description, services_list_items, services_status)
                VALUES (?, ?, ?, ?, ?, ?)
            ");
            $stmt->bind_param(
                "ssssss",
                $data['services_icon'],
                $data['services_title'],
                $data['services_subtitle'],
                $data['services_description'],
                $data['services_list_items'],
                $data['services_status']
            );

            if ($stmt->execute()) {
                return ['status' => 'success', 'message' => 'Service added successfully.'];
            }
        }

        return ['status' => 'error', 'message' => 'Database operation failed.'];
    }

    // ✅ DELETE SERVICE
    public function deleteService($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM services_tb WHERE services_id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            return ['status' => 'success', 'message' => 'Service deleted successfully.'];
        }
        return ['status' => 'error', 'message' => 'Failed to delete service.'];
    }
}

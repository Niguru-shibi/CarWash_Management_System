<?php
class Home
{
    private $conn;
    private $table = "home_crsl_tb";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // ✅ Get latest home info
    public function getHomeInfo()
    {
        $sql = "SELECT * FROM {$this->table} ORDER BY crsl_id DESC LIMIT 1";
        $stmt = $this->conn->prepare($sql);

        if ($stmt && $stmt->execute()) {
            $result = $stmt->get_result();
            if ($result && $result->num_rows > 0) {
                return $result->fetch_assoc();
            }
        }
        return null;
    }

    // ✅ Update home info
    public function updateHomeInfo($id, $header, $desc, $location, $email, $number)
    {
        $stmt = $this->conn->prepare("
            UPDATE {$this->table} 
            SET crsl_header = ?, crsl_desc = ?, crsl_location = ?, crsl_email = ?, crsl_number = ?
            WHERE crsl_id = ?
        ");

        if (!$stmt) {
            return ["success" => false, "message" => "Prepare failed: " . $this->conn->error];
        }

        $stmt->bind_param("sssssi", $header, $desc, $location, $email, $number, $id);

        if ($stmt->execute()) {
            return ["success" => true, "message" => "Home info updated successfully"];
        } else {
            return ["success" => false, "message" => "Execution failed: " . $stmt->error];
        }
    }
}

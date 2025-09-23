<?php
// import database connection
require_once 'config/connect_db.php';

class Location extends Connector {
    public function __construct() {
        parent::__construct();
    }


    //--  Add Location / Branch  --//
    public function addLocation($locBranchName, $locLocation, $locEmail, $locContact, $locMapLink)
    {
        $sql = ("INSERT INTO washpoint_tb (washpoint_name, washpoint_location, washpoint_email, washpoint_num, washpoint_map) VALUES (?, ?, ?, ?, ?)");
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssss", $locBranchName, $locLocation, $locEmail, $locContact, $locMapLink);
        
        return $stmt->execute();
    }

    //--  Get the Branch Location  --//
    public function getAllLocation() {
        $sql = "SELECT * FROM washpoint_tb ORDER BY washpoint_date DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
    
        return $result->fetch_all(MYSQLI_ASSOC); 
    }
    
}

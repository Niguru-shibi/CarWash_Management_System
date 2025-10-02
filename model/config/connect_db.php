<?php

class Connector
{
    private $servername = "localhost";
    private $db_name = "car_wash_db";
    private $username = "root";
    private $password = "";

    protected $conn;

    function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Db connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

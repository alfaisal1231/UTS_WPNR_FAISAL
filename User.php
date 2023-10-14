<?php
include_once 'Database.php';

class Users
{
    // Connection
    private $conn;
    // Table
    private $db_table = "user";
    // Columns
    public $id;
    public $fullname;
    public $email;
    public $telpon;
    public $job;
    // <!-- PUNYA FAISAL EAKKKKKKKK -->
    // Db connection
    public function __construct($db){
        $this->conn = $db;
    }
    public function getUsers(){
        $sqlQuery = "SELECT * FROM " . $this->db_table . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function getUsersId($id){
        $sqlQuery = "SELECT * FROM " . $this->db_table . " WHERE id = ".$id;
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
}
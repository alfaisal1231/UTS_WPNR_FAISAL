<?php
include_once 'Database.php';

class School
{
    // Connection
    private $conn;
    // Table
    private $db_table = "school";
    // Columns
    public $id;
    public $n_school;
    public $user_id;
    public $tahun;
    public $jurusan;
    // <!-- PUNYA FAISAL EAKKKKKKKK -->
    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function getSchool(){
        $sqlQuery = "SELECT * FROM " . $this->db_table . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
    public function getSchoolId($user_id){
        $sqlQuery = "SELECT * FROM " . $this->db_table . " WHERE id = ".$user_id;
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
}
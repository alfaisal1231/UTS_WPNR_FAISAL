<?php
include_once 'Database.php';

class Lpk
{
    // Connection
    private $conn;
    // Table
    private $db_table = "lpk";
    // Columns
    public $user_id;
    public $lpk_id;
    public $sertifikasi;
    public $lpk;
    public $nilai;
    // <!-- PUNYA FAISAL EAKKKKKKKK -->
    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getLpk()
    {
        $sqlQuery = "SELECT * FROM " . $this->db_table . "";
        $stmtlpk1 = $this->conn->prepare($sqlQuery);
        $stmtlpk1->execute();
        return $stmtlpk1;
    }
    public function getLpkId($user_id)
    {
        $sqlQuery = "SELECT * FROM " . $this->db_table . " WHERE user_id =" . $user_id;
        $stmtlpk = $this->conn->prepare($sqlQuery);
        $stmtlpk->execute();
        return $stmtlpk;
    }
}
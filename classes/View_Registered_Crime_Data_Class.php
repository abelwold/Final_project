<?php
	include "singleton#1.php";

class RegisteredCrimeData
{
    public $table_name = "suspected_person_detailes";
    protected $db;

    public function __construct()
    {
          
        $this->db = DatabaseConnection::getInstance();
    }

    public function index()
    {
        $query = "SELECT * FROM $this->table_name";
        $result = mysqli_query($this->db, $query);
        if($result->num_rows > 0){
            return $result; 
        }else{
            return false;
        }
    }

    public function indexWithSpecificId($id,$table_name)
    {
        $query = "SELECT * FROM $table_name WHERE id = '$id'";
        $result = mysqli_query($this->db, $query);
        if($result->num_rows > 0){
            return $result; 
        }else{
            return false;
        }
    }
}
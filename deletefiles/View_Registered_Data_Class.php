<?php
	include_once "classes/singleton#1.php";

class IncidentReporter
{
    // public $table_name = "incident_reporter";
    protected $db;

    public function __construct()
    {
        $this->db = DatabaseConnection::getInstance();
    }

    public function index($table_name)
    {
        // $sql = DatabaseConnection::getInstance();
        // $query = "SELECT * FROM $table_name";
        // $result = mysqli_query($sql, $query);
        // if($result !== false &&  $result->num_rows > 0){
        //     return $result; 
        //     print_r(gettype($this->db));
        // }else{
        //     return false;
        // }
        $sth = $this->db->prepare("SELECT * FROM $table_name");
        $sth->execute();
        // $result = $sth->fetchAll();
        $result   = $sth->fetch(PDO::FETCH_ASSOC);
        foreach($result as $row){
            return $row;
        }
        // return $result;
    }

    public function indexWithSpecificId($document_no,$table_name)
    {
    
        $sth = $this->db->prepare("SELECT * FROM $table_name WHERE document_no = '$document_no'");
        $sth->execute();
        $result = $sth->fetchAll();
        return $result; 
      
    }

    public function indexWithSpecificIdUsers($identification_no ,$table_name)
    {
        $query = "SELECT * FROM $table_name WHERE identification_no  = '$identification_no '";
        $result = mysqli_query($this->db, $query);
        if($result !== false && $result->num_rows > 0){
            return $result; 
        }else{
            return false;
        }
    }

   
}

<?php
	include_once"singleton#1.php";

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
        // $query = "SELECT * FROM $table_name";
        // $result = mysqli_query($this->db, $query);
        // if($result !== false &&  $result->num_rows > 0){
        //     return $result; 
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
    }

    public function indexWithSpecificId($document_no,$table_name)
    {
        // $query = "SELECT * FROM $table_name WHERE police_id = '$document_no'";
        // $result = mysqli_query($this->db, $query);
        // if($result !== false && $result->num_rows > 0){
        //     return $result; 
        // }else{
        //     return false;
        // }
        $sth = $this->db->prepare("SELECT * FROM $table_name WHERE police_id = '$document_no'");
        $sth->execute();
        // $result = $sth->fetchAll();
        $result   = $sth->fetchAll();
        return $result;
    }
}
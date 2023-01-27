<?php 

include_once "singleton#1.php";
class Utilities{

protected $db;
public $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

public function __construct()
{
    // $this->db = db::getInstance();
    $this->db = DatabaseConnection::getInstance();
    // $this->connectionGet =$db->getConnection();
}

public function generateRandomPass(){
    $auto_password = substr( str_shuffle( $this->chars ), 0, 8 );
    return $auto_password;
}

public function countData($table){
    $stmt = $this->db->query("SELECT * FROM $table");
    $row_count = $stmt->rowCount();
    return $row_count;

}

public function FetchLatestAssUsers($table){

    $q = $this->db->query("SELECT * FROM $table ORDER BY id DESC LIMIT 3");
    $row = $q->fetchAll();
    return $row;

}
// public function FetchLatestRepCrimes($table){

//     $q = $this->db->query("SELECT * FROM $table ORDER BY id DESC LIMIT 3");
//     $row = $q->fetchAll();
//     return $row;

// }

}
?>
<?php   
include_once "singleton#1.php";
 class Databases{  
      public $db;  
      public $error;  
      public function __construct()  
      {  
        //    $this->con = mysqli_connect("localhost", "root", "", "testing");  
        //    if(!$this->con)  
        //    {  
        //         echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
        //    }  
        $this->db = DatabaseConnection::getInstance();
      } 
public function insert($table_name, $data)  
      {  
           $string = "INSERT INTO ".$table_name." (";            
           $string .= implode(",", array_keys($data)) . ') VALUES (';            
           $string .= "'" . implode("','", array_values($data)) . "')";  
           if(mysqli_query($this->db, $string))  
           {  
                return true;  
           }  
           else  
           {  
                echo mysqli_error($this->db);  
           }  
      }  
    }
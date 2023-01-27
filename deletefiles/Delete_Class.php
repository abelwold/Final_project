<?php 


include "classes/singleton#1.php";

class DeleteData{

    protected $db;

    public $error;
    // protected $table_name;

public function __construct()
    {
        $this->db = DatabaseConnection::getInstance();
    }
    public function deactivate_account($table_name, $value_name){
        {
			$sql = "DELETE from $table_name where $value_name=$value_name";
			$query = $this->db->query($sql);
			if ($query) {
                session_destroy();
                header("Location: Admin_Iogin.php");
			}else{
				return false;
			}
		}
    }

    public function DeleteDataWithElemenet($table_one, $table_two ,$value_name)
    {

  $query = "DELETE FROM $table_one, $table_two 
  USING $table_one, $table_two 
  WHERE $table_two.document_no = $table_one.document_no AND $table_one.document_no = $value_name";
  $result = $this->db->query($query);
  if($result==true){
    $query = "DELETE FROM $table_two WHERE $value_name =$value_name ";
    return $this->error = '<div class="alert alert-success alert-dismissible fade show">
    <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
  }else{
    return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
    <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
  }
 
} 


public function DeleteData_CrimeForm($table_one, $table_two , $table_three,$value_name)
    {

  $query = "DELETE FROM $table_one, $table_two 
  USING $table_one, $table_two 
  WHERE $table_two.document_no = $table_one.document_no AND $table_one.document_no = $value_name";
  $result = $this->db->query($query);
  if($result==true){
    $query = "DELETE FROM $table_two WHERE $value_name =$value_name ";
    $res = $this->db->query($query);
    if($res == true){
      $query = "DELETE FROM $table_three WHERE $value_name =$value_name ";
    }
    return $this->error = '<div class="alert alert-success alert-dismissible fade show">
    <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
  }else{
    return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
    <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
  }
 
} 

		}
    

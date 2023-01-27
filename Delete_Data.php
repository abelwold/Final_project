<?php 
include_once "classes/Delete_Class.php";
if(ISSET($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $auto_password = $_POST['auto_password'];
            $obj = new DeleteData;
            $obj->verifyFordeletion($email, $auto_password,"incident_reporter","registeree",$id );
            echo $obj->error;
            echo "<meta http-equiv='refresh' content='3;url=Manage_Registered_Data.php'>";
    }
}       
 ?>
 
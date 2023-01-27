<?php 
include_once "classes/Delete_Class.php";
if(ISSET($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $auto_password = $_POST['auto_password'];
            $obj = new DeleteData;
            $obj->verifyFordeletionPoliceOfficer($email, $auto_password,"register_police_officer",$id );
            echo $obj->error;
            echo "<meta http-equiv='refresh' content='2;url=Manage_Registerd_Police_Officers.php'>";
    }
}       
 ?>
 
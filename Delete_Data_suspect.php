<?php 
include_once "classes/Delete_Class.php";
if(ISSET($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $auto_password = $_POST['auto_password'];
            $obj = new DeleteData;
            $obj->verifyFordeletionCrime($email, $auto_password,"suspected_person_detailes","details_of_offence","investigating_officer_form",$id );
            echo $obj->error;
            echo "<meta http-equiv='refresh' content='2;url=Managed_registered_crime_data.php'>";
    }
}       
 ?>
 
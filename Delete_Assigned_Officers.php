<?php 
include_once "classes/Delete_Class.php";
if(ISSET($_REQUEST['id'])){
    $id=$_REQUEST['id'];
            $obj = new DeleteData;
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $auto_password = $_POST['auto_password'];
            $obj->verifyFordeletionAssignedUsers($email,$auto_password,"user_form",$id );
            echo $obj->error;
            echo "<meta http-equiv='refresh' content='2;url=Manage_Registered_Users.php'>";
            // header("location:Manage_Registered_Users.php");
            }
 }
 ?>
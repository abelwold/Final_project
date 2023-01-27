<?php 
include_once "classes/Delete_Class.php";
if(ISSET($_REQUEST['id'])){
    $id=$_REQUEST['id'];
            $obj = new DeleteData;
            $obj->DeleteData_CrimeForm("suspected_person_detailes","details_of_offence","investigating_officer_form",$id );
            header("location:Managed_registered_crime_data.php");
 }
 ?>
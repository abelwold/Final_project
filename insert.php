<?php
//insert.php
if(isset($_POST["incident_location"]))
{
 include("connect.php");
 $subject = mysqli_real_escape_string($connect, $_POST["incident_location"]);
 $comment = mysqli_real_escape_string($connect, $_POST["nature_incident"]);
 $query = "
 INSERT INTO registeree(incident_location, nature_incident)
 VALUES ('$subject', '$comment')
 ";
 mysqli_query($connect, $query);
}
?>
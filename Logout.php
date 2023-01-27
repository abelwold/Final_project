<?php
session_start();
include 'classes/singelton#1.php';
// session_unset();
unset($_SESSION['login_admin']);  
// session_destroy();
header("Location: Admin_Iogin.php");
?>
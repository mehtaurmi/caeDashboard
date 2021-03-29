<?php 
session_start(); 
$_SESSION['logon'] = ''; 
unset($_SESSION['logon']); 
session_destroy(); 
header('location:index.php'); 
?>

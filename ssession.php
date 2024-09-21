<?php
session_start();
if (!( isset( $_SESSION['validstudent'] ) ))
{
	header("location:login.php");
} 
?>
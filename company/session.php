<?php
session_start();
if (!( isset( $_SESSION['validcompany'] ) ))
{
	header("location:login.php");
} 
?>
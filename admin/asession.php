<?php
session_start();
if (!( isset( $_SESSION['validuser'] ) ))
{
	header("location:login.php");
} 
?>
<?php 


  require_once('db.php');


  mysqli_query($con, "update jobposting set status='Approved' where jobid ='".$_GET['id']."'");
  header("location:jobpost.php");
?>
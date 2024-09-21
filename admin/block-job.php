<?php 


  require_once('db.php');


  mysqli_query($con, "update jobposting set status='Blocked' where jobid ='".$_GET['id']."'");
  header("location:jobpost.php");
?>
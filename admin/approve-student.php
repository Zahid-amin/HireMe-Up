<?php 


  require_once('db.php');


  mysqli_query($con, "update student set status='Active' where id ='".$_GET['id']."'");
  header("location:studentlist.php");
?>
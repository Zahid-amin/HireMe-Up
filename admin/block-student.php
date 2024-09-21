<?php 


  require_once('db.php');


  mysqli_query($con, "update student set status='Blocked' where id ='".$_GET['id']."'");
  header("location:studentlist.php");
?>
<?php 


  require_once('db.php');


  mysqli_query($con, "update company set status='Approved' where id ='".$_GET['id']."'");
  header("location:companylist.php");
?>
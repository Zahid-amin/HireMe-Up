<?php 


  $con=mysqli_connect("localhost", "root","","project");


  mysqli_query($con, "update jobposting set status='Approved' where jobid ='".$_GET['id']."'");
  header("location:jobview.php");
?>
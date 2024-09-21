<?php 


  $con=mysqli_connect("localhost", "root","","project");


  mysqli_query($con, "update jobposting set status='Blocked' where jobid ='".$_GET['id']."'");
  header("location:jobview.php");
?>
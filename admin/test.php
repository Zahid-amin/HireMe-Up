<?php 
$con= mysqli_connect("localhost", "root","", "project");

$records=mysqli_query($con , "select * from history");

$r=mysqli_fetch_assoc($records);
echo $r['status'];

mysqli_query($con, "insert into history(status,sid,jid) values('zahid','1','1')");

?>
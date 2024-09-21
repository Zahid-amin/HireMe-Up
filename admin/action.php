<?php 


  
  require_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <div style="margin-top:120px"></div>
  <form method="post">
  <label>ACTION</label>
   <select name="status">
     <option value="inprogress">Inprogress</option>
     <option value="shortlisted">Shorlisted </option>
     <option value="interview">Interview</option>
     
   </select>
   <input type="hidden" name="sid" value="<?php echo $_GET['id'] ?>">
   <input type="hidden" name="jid" value="<?php echo $_GET['jobid'] ?>">

   <button type="submit" class="btn btn-primary btn-block mb-4" name="btn" style="width:150px">Done</button>
</form>


</body>
</html>
<?php
     $con=mysqli_connect("localhost","root", "","project");
   

     
if (isset ($_POST['btn']) ) {
  

 mysqli_query($con, "insert into history(status,sid,jid) values('".$_POST['status']."', '".$_POST['sid']."', '".$_POST['jid']."')");

}

?>
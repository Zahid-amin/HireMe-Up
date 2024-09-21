
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
     require_once('bheader.php');
    require_once('ssession.php');
    
     $con=mysqli_connect("localhost", "root","","project");


  ?>
  	 <h1 id="header" > Add Links</h1>
	<div id="container">
    <form method="post" >
        <div class="form-outline mb-4">

    <input  type="text" id="form2Example1" required class="form-control" name="fblink" style="margin-top:30px;" />
    <label class="form-label" for="form2Example1">Facebook</label>
  </div>

  
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" required class="form-control"  name="tlink" />
    <label class="form-label" for="form2Example2">Twitter</label>

  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" required class="form-control"  name="llink" />
    <label class="form-label" for="form2Example2">LinkedIn</label>
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" required class="form-control"  name="instalink" />
    <label class="form-label" for="form2Example2">Instagram</label>
    
  </div>
        <button type="submit" class="btn btn-primary btn-block mb-4" name="btn">Add Links</button>
    </form>
</div>

  
 

</body>
</html>
<?php
	if( isset ($_POST['btn']) )
   {   


                mysqli_query($con, "insert into socialmedia(fblink,instalink,llink,tlink,sid) values(
                    
                     '".$_POST['fblink']."',
                     '".$_POST['instalink']."',
                     '".$_POST['llink']."',
                     '".$_POST['tlink']."',
                     '".$_GET['id']."')");



   }
?>
<style type="text/css">
	  body
    {
     background-color: powderblue;
    }
   #header
    {
      margin-top: 120px;
      color: black;
      font-size: 25px;
      font-weight: 800px;
      text-align: center;
    }
     #container{
    margin-top: 70px;
    margin-right: 500px;
    margin-left: 500px;
    background-color:0AF09D;
    width: 400px;
    }
</style>
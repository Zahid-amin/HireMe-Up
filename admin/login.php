<?php 

ob_start();
require_once('validation.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	
	<title> LOGIN </title>
</head>
<body>
<form method="post">

	<h1><blockquote> ADMIN LOGIN</blockquote></h1>

	<div id="wrapper"><input type="name" name="email" placeholder="Username,Email or Phone no"  id="input1"></div>
	<div id="wrapper2"><input type="password" name="password" placeholder="Password" id="input2"></div>
    <button name="btn"> <i class="fa fa-user" aria-hidden="true"></i> login </button>
    
    
</form>
<?php 

  if(isset($_POST['btn']))
  {
  	   $con=mysqli_connect("localhost", "root","","project");
  	   $records=mysqli_query($con, "select * from admin where email ='".$_POST['email']."' && password ='".$_POST['password']."'");

  	   $t=mysqli_num_rows($records);
  	   if($t== 1)
        {
        	session_start();
        	$_SESSION['validuser']=$_POST['email'];
 
        	header("location:dadmin.php");
        }
        else
        {
        	 echo "invalid user";
        }


  }
?>	





</body>
</html>

<style type="text/css">
	body
	{
		/*background-color: black;*/
		background-image: url("../images/LOG.jpg");
		background-repeat: no-repeat;
		background-size: 100%;

	}
	footer{
		margin-top: 300px;
	}
	

	h1
	{
		margin-left: 500px;
		color:  white;
		margin-top: 100px;
	}

	
    
    
    input[type=submit]:hover
    {
    	background-color: tomato;
    }
    #wrapper
	{
		background-color: whitesmoke;
		padding: 10px;
		width: 300px;
		margin-left: 500px;
		margin-top: 30px;
		position: relative;

	}
	#wrapper:before
	{
		content: "\f2bb";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
          font-size: 30px;
		position: absolute;
		left: 12px;
		top: 15px;
		color: black;
	}
	#input1
	{
		width: 280px;
		height: 34px;
		text-indent:  40px;
	}

	#wrapper2
	{
		background-color: whitesmoke;
		padding: 10px;
		width: 300px;
		margin-left: 500px;
		margin-top: 30px;
		position: relative;
	
	}
	#wrapper2:before
	{
		content: "\f084";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
          font-size: 30px;
		position: absolute;
		left: 12px;
		top: 15px;
		color: black;
	}
	#input2
	{
		width: 280px;
		height: 34px;
		text-indent:  40px;

	}
	button
	{
		margin-left: 500px;
		width: 200px;
		padding: 10px;
		margin-top: 10px;

	}
    </style>
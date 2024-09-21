<?php 


require_once('../validation.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>


	<div class="header">

		<div class="both" style="width:20%" id="hireme"> 
			<a href="dadmin.php"> HireMe-Up/Admin </a>
		</div>

		<div class="both" style=" width: 70%;">
			<ul id="menu">
				<li><a href="dadmin.php">Dashboard</a> 
                   
				 </li>

				<li><a href="studentlist.php">Student </a> 
                   
				 </li>

				<li><a href="companylist.php">Company </a> 
					

				</li>
				<li><a href="jobpost.php">Jobs </a> 
					

				</li>
				<li><a href="logout.php">Logout</a></li>

			</ul>
		</div>
		
	</div>

</body>
</html>

<style type="text/css">
	*
	{
		margin: 0;
	}
	.header
	{
		background-color: powderblue;
		padding: 4px;
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
	}
	.both
	{
		display: inline-block;
/*		background-color: red;*/
		padding: 10px;
		margin: 5px;
	

	}
	#hireme
	{
		color: white;
		font-size: 30px;
	}
	#menu
	{

	}
	#menu>li{
		display: inline-block;
		color: white;
		padding: 10px;
	}
	
	a{
      color: black;
      text-decoration: none;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 
       require_once('header.php');
	?>

	<div class="restsection">
		<h1>Student List</h1>
			

		<?php 
					$con=mysqli_connect("localhost","root", "","project");

				 $records= mysqli_query($con ,"SELECT * from jobposting JOIN appliedjobs on jobposting.jobid = appliedjobs.jid WHERE appliedjobs.jid ='".$_GET['id']."'");

               $jobid=$_GET['id'];
				echo "<table class='table table-striped table-hover table-bordered'>";
				echo "<tr  class='text-capitalize' >";
				echo "<th >". "name"  ."</th>";
				echo "<th >". "email"  ."</th>";
				
				
				
				
				echo "<th >". "experience"  ."</th>";
				echo "<th >". "about"  ."</th>";
				echo "<th >". "Applied On"  ."</th>";
				echo "<th >". "cv"  ."</th>";
				echo "<th >". "Status"  ."</th>";
				echo "<th >". "Action"  ."</th>";
				echo "</tr>";
				 while($r=mysqli_fetch_assoc($records))
				 {
				 	$records2= mysqli_query($con ,"SELECT * from history where jid='".$_GET['id']."'  order by id desc");
				 	$r2=mysqli_fetch_assoc($records2);
				    echo "<tr>";
				    echo "<td >".$r['name']. "</td>";
				    echo "<td >". $r['email']. "</td>";
				   
				    echo "<td >" .$r['experience']."</td>";
				    echo "<td >" .$r['about']."</td>";
				    echo "<td >" .$r['time']."</td>";
				    
				    echo "<td ><a  href='$r[cv]'>" .'View'."</td>";
				   echo "<td >" .$r2['status']."</td>";
				     echo "<td>" ."<a href='action.php?id=$r[id]&jobid=$jobid' class='btn btn-danger'>action </a>"."</td>";


				    echo "<br>";
				    echo "</tr>";
				 }
				echo"</table>";

				?>		

					
		
	</div>
	

</body>
</html>

<style type="text/css">
	.restsection
	{
		margin-top: 80px;
         padding: 30px;
         background-color: whitesmoke;
	}
</style>
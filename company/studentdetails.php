<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 
       require_once('cheader.php');
       require_once('session.php');
	?>

	<div class="restsection">
		<h1>Student List</h1>
			

		<?php 
					$con=mysqli_connect("localhost","root", "","project");

				 $records= mysqli_query($con ,"SELECT * from jobposting JOIN appliedjobs on jobposting.email = appliedjobs.companyemail where jobid ='".$_GET['id']."'");
				 $jobid=$_GET['id'];


				echo "<table class='table table-striped table-hover table-bordered'>";
				echo "<tr  class='text-capitalize'>";
				echo "<th class='all-section'>". "Name"  ."</th>";
				echo "<th class='all-section'>". "Email"  ."</th>";
				
				
				echo "<th class='all-section'>". "Experience"  ."</th>";
				echo "<th class='all-section'>". "About"  ."</th>";
				echo "<th class='all-section'>". "CV"  ."</th>";
				echo "<th class='all-section'>". "Qualification"  ."</th>";
				echo "<th class='all-section'>". "Status"  ."</th>";
				echo "<th class='all-section'>". "interview schedule"  ."</th>";
				echo "</tr>";
				 while($r=mysqli_fetch_assoc($records))
				 {$records2= mysqli_query($con ,"select * from history order by id desc");
				 	  $r2=mysqli_fetch_assoc($records2);
				    echo "<tr>";
				    echo "<td class='all-data'>".$r['name']. "</td>";
				    echo "<td class='all-data'>". $r['email']. "</td>";
				    
				    echo "<td class='all-data'>" .$r['experience']."</td>";
				    echo "<td class='all-data'>" .$r['about']."</td>";
				    echo "<td class='all-data'><a  href='$r[cv]'>" .'View'."</td>";
				    echo "<td class='all-data'>" ."<a href='qualification.php?id=$r[sid]' class='btn btn-success'>View </a>"."</td>";
				    echo "<td class='all-data'>" .$r2['status']."</td>";
				    echo "<td class='all-data'>" ."<a href='interview.php?id=$r[sid]&jobid=$jobid' class='btn btn-info'>Action </a>"."</td>";
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
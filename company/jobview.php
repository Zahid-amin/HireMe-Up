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
		<h1>Job Posted</h1>
			

		<?php 
					$con=mysqli_connect("localhost","root", "","project");

				 $records= mysqli_query($con ,"SELECT * from company JOIN jobposting on company.email = jobposting.email WHERE company.email='".$_SESSION['validcompany']."'");
				echo "<table class='table table-striped table-hover table-bordered'>";
				echo "<tr  class='text-capitalize'>";
				echo "<th class='all-section'>". "Cname"  ."</th>";
				echo "<th class='all-section'>". "Jobtitle"  ."</th>";
				
				echo "<th class='all-section'>". "Experience"  ."</th>";
				echo "<th class='all-section'>". "Joblocation"  ."</th>";
				echo "<th class='all-section'>". "Qualification"  ."</th>";
				
				echo "<th class='all-section'>". "Skills"  ."</th>";
				echo "<th class='all-section'>". "Work"  ."</th>";
				echo "<th class='all-section'>". "Payscale"  ."</th>";
				echo "<th class='all-section'>". "Status"  ."</th>";
				echo "<th class='all-section'>". "Action"  ."</th>";
				echo "<th class='all-section'>". "Action"  ."</th>";
				echo "<th class='all-section'>". "Applications"  ."</th>";
				echo "</tr>";
				 while($r=mysqli_fetch_assoc($records))
				 {
				    echo "<tr>";
				    echo "<td class='all-data'>".$r['cname']. "</td>";
				    echo "<td class='all-data'>". $r['jobtitle']. "</td>";
				    echo "<td class='all-data'>" .$r['experience']."</td>";
				    echo "<td class='all-data'>" .$r['joblocation']."</td>";
				    echo "<td class='all-data'>" .$r['qualification']."</td>";
				    echo "<td class='all-data'>" .$r['skills']."</td>";
				    echo "<td class='all-data'>" .$r['work']."</td>";
				    echo "<td class='all-data'>" .$r['payscale']."</td>";
				    echo "<td class='all-data'>" .$r['status']."</td>";
				    echo "<td class='all-data'>" ."<a href='block-job.php?id=$r[jobid]' class='btn btn-danger'>Inactive </a>"."</td>";
				    echo "<td class='all-data'>" ."<a href='unblock.php?id=$r[jobid]' class='btn btn-success'>Active </a>"."</td>";
				    echo "<td class='all-data'>" ."<a href='studentdetails.php?id=$r[jobid]' class='btn btn-success'>View </a>"."</td>";
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
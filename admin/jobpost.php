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
       require_once('db.php');
	?>

	<div class="restsection">
		<h1>Job Posted</h1>
			

		<?php 
					
				 $records= mysqli_query($con ,"select * from jobposting");
				echo "<table class='table table-striped table-hover table-bordered'>";
				echo "<tr  class='text-capitalize'>";
				echo "<th >". "Cname"  ."</th>";
				echo "<th >". "Jobtitle"  ."</th>";
				
				echo "<th >". "Experience"  ."</th>";
				echo "<th >". "Joblocation"  ."</th>";
		
				
				echo "<th >". "Skills"  ."</th>";
				echo "<th >". "Work"  ."</th>";
				echo "<th >". "Payscale"  ."</th>";
				echo "<th >". "Posted On"  ."</th>";
				echo "<th >". "Status"  ."</th>";
				echo "<th >". "Action"  ."</th>";
				echo "<th >". "Action"  ."</th>";
				echo "<th >". "Applications"  ."</th>";
				echo "<th >". "No. of applicants"  ."</th>";
				echo "</tr>";
				 while($r=mysqli_fetch_assoc($records))
				 {
				 	$records2= mysqli_query($con ,"select * from appliedjobs where companyemail='".$r['email']."'");
				 	  $c=mysqli_num_rows($records2);
				    echo "<tr>";
				    echo "<td class='all-data'>".$r['cname']. "</td>";
				    echo "<td class='all-data'>". $r['jobtitle']. "</td>";
				    echo "<td class='all-data'>" .$r['experience']."</td>";
				    echo "<td class='all-data'>" .$r['joblocation']."</td>";
				    
				   
				    echo "<td class='all-data'>" .$r['skills']."</td>";
				    echo "<td class='all-data'>" .$r['work']."</td>";
				    echo "<td class='all-data'>" .$r['payscale']."</td>";
				    echo "<td class='all-data'>" .$r['time']."</td>";
				    echo "<td class='all-data'>" .$r['status']."</td>";
				    echo "<td class='all-data'>" ."<a href='approve-job.php?id=$r[jobid]' class='btn btn-success'>Approve </a>"."</td>";
				    echo "<td class='all-data'>" ."<a href='block-job.php?id=$r[jobid]' class='btn btn-danger'>Block </a>"."</td>";
				    echo "<td class='all-data'>" ."<a href='studentapplied.php?id=$r[jobid]' class='btn btn-success'>View </a>"."</td>";
				    echo "<td class='all-data'>" .$c."</td>";
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
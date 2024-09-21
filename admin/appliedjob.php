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
		<h1>Job Applied</h1>
			

		<?php 
					
				 $records= mysqli_query($con ,"SELECT * from jobposting JOIN appliedjobs on jobposting.jobid = appliedjobs.jid WHERE appliedjobs.sid ='".$_GET['id']."'");
				echo "<table class='table table-striped table-hover table-bordered'>";
				echo "<tr  class='text-capitalize'>";
				echo "<th >". "Company name"  ."</th>";
				echo "<th >". "Jobtitle"  ."</th>";
				
				echo "<th >". "Experience"  ."</th>";
				echo "<th >". "Joblocation"  ."</th>";
		
				
				echo "<th >". "Skills"  ."</th>";
				echo "<th >". "Work"  ."</th>";
				echo "<th >". "Payscale"  ."</th>";
				echo "<th >". "Applied On"  ."</th>";
				
				echo "</tr>";
				 while($r=mysqli_fetch_assoc($records))
				 {
				 	
				    echo "<tr>";
				    echo "<td class='all-data'>".$r['cname']. "</td>";
				    echo "<td class='all-data'>". $r['jobtitle']. "</td>";
				    echo "<td class='all-data'>" .$r['experience']."</td>";
				    echo "<td class='all-data'>" .$r['joblocation']."</td>";
				    
				   
				    echo "<td class='all-data'>" .$r['skills']."</td>";
				    echo "<td class='all-data'>" .$r['work']."</td>";
				    echo "<td class='all-data'>" .$r['payscale']."</td>";
				    echo "<td class='all-data'>" .$r['time']."</td>";
				    
				    
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
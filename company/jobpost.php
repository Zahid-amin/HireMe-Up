
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
	?>

	<div class="restsection">
		<h1>Company List</h1>
			

		<?php 
					$con=mysqli_connect("localhost","root", "","project");

			 	 $records= mysqli_query($con ,"select * from jobposting");
				echo "<table class='table table-striped table-hover table-bordered'>";
				echo "<tr  class='text-capitalize'>";
				echo "<th class='all-section'>". "cname"  ."</th>";
				echo "<th class='all-section'>". "jobtitle"  ."</th>";
				
				echo "<th class='all-section'>". "experience"  ."</th>";
				echo "<th class='all-section'>". "joblocation"  ."</th>";
				echo "<th class='all-section'>". "qualification"  ."</th>";
				echo "<th class='all-section'>". "description"  ."</th>";
				echo "<th class='all-section'>". "skills"  ."</th>";
				echo "<th class='all-section'>". "work"  ."</th>";
				echo "<th class='all-section'>". "payscale"  ."</th>";
				echo "</tr>";
				 while($r=mysqli_fetch_assoc($records))
				 {
				    echo "<tr>";
				    echo "<td class='all-data'>".$r['cname']. "</td>";
				    echo "<td class='all-data'>". $r['jobtitle']. "</td>";
				    echo "<td class='all-data'>" .$r['experience']."</td>";
				    echo "<td class='all-data'>" .$r['joblocation']."</td>";
				    echo "<td class='all-data'>" .$r['qualification']."</td>";
				    echo "<td class='all-data'>" .$r['description']."</td>";
				    echo "<td class='all-data'>" .$r['skills']."</td>";
				    echo "<td class='all-data'>" .$r['work']."</td>";
				    echo "<td class='all-data'>" .$r['payscale']."</td>";
				    echo "<br>";
				    echo "</tr>";
				 }
				echo"</table>";

				?>		

					
		
	</div>
		<?php
require_once('footer.php') 
?>

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
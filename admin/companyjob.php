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
		<h1>Job Posted</h1>
			

		<?php 
					$con=mysqli_connect("localhost","root", "","project");

				 $records= mysqli_query($con ,"SELECT * from company JOIN jobposting on company.email = jobposting.email WHERE id='".$_GET['id']."'");
				echo "<table class='table table-striped table-hover table-bordered'>";
				echo "<tr  class='text-capitalize' >";
				echo "<th >". "Cname"  ."</th>";
				echo "<th >". "Jobtitle"  ."</th>";
				
				echo "<th >". "Experience"  ."</th>";
				echo "<th >". "Joblocation"  ."</th>";
				echo "<th >". "Qualification"  ."</th>";
				echo "<th >". "Description"  ."</th>";
				echo "<th >". "Skills"  ."</th>";
				echo "<th >". "Work"  ."</th>";
				echo "<th >". "Payscale"  ."</th>";
				echo "<th >". "Posted On"  ."</th>";
				echo "<th >". "Status"  ."</th>";
				echo "<th >". "Applications"  ."</th>";
				;
				echo "</tr>";
				 while($r=mysqli_fetch_assoc($records))
				 {

				    echo "<tr>";
				    echo "<td >".$r['cname']. "</td>";
				    echo "<td >". $r['jobtitle']. "</td>";
				    echo "<td >" .$r['experience']."</td>";
				    echo "<td >" .$r['joblocation']."</td>";
				    echo "<td >" .$r['qualification']."</td>";
				    echo "<td >" .$r['description']."</td>";
				    echo "<td >" .$r['skills']."</td>";
				    echo "<td >" .$r['work']."</td>";
				    echo "<td >" .$r['payscale']."</td>";
				    echo "<td >" .$r['time']."</td>";
				    echo "<td >" .$r['status']."</td>";
				    echo "<td >" ."<a href='studentapplied.php?id=$r[jobid]' class='btn btn-info'>View </a>"."</td>";
				    
				    
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
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
		<h2 class="text-center">Company List</h2>
		

		<?php 
					$con=mysqli_connect("localhost","root", "","project");

				 $records= mysqli_query($con ,"select * from company");
				echo "<table class='table table-striped table-hover table-bordered'>";
				echo "<tr  class='text-capitalize'>";
				echo "<th class=''>". "id"  ."</th>";
				echo "<th class=''>". "name"  ."</th>";
				
				echo "<th class=''>". "contact"  ."</th>";
				echo "<th class=''>". "email"  ."</th>";
				echo "<th class=''>". "url"  ."</th>";
				echo "<th class=''>". "address"  ."</th>";
				echo "<th class=''>". "about"  ."</th>";
				echo "<th class=''>". "Joined on"  ."</th>";
				echo "<th class=''>". "status"  ."</th>";
				echo "<th class=''>". "Action"  ."</th>";
				echo "<th class=''>". "Job posted"  ."</th>";
			
				echo "</tr>";
				 while($r=mysqli_fetch_assoc($records))
				 {
				    echo "<tr>";
				    echo "<td class=''>".$r['id']. "</td>";
				    echo "<td class=''>". $r['name']. "</td>";
				    echo "<td class=''>" .$r['contact']."</td>";
				    echo "<td class=''>" .$r['email']."</td>";
				    echo "<td class=''>" .$r['url']."</td>";
				    echo "<td class=''>" .$r['address']."</td>";
				    echo "<td class=''>" .$r['about']."</td>";
				     echo "<td class=''>" .$r['time']."</td>";
				    echo "<td class=''>" .$r['status']."</td>";

				     echo "<td class=''>" ."<a href='approve-company.php?id=$r[id]' class='btn btn-info'>Approve </a>"."</td>";
				      echo "<td class=''>" ."<a href='companyjob.php?id=$r[id]' class='btn btn-success'>View</a>"."</td>";

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
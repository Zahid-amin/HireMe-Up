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
		<h1>Company List</h1>
		

		<?php 
					$con=mysqli_connect("localhost","root", "","project");

				 $records= mysqli_query($con ,"select * from company");
				echo "<table class='table table-stripped'>";
				echo "<tr  class='text-capitalize' >";
				echo "<th class='all-section'>". "id"  ."</th>";
				echo "<th class='all-section'>". "name"  ."</th>";
				
				echo "<th class='all-section'>". "contact"  ."</th>";
				echo "<th class='all-section'>". "email"  ."</th>";
				echo "<th class='all-section'>". "url"  ."</th>";
				echo "<th class='all-section'>". "address"  ."</th>";
				echo "</tr>";
				 while($r=mysqli_fetch_assoc($records))
				 {
				    echo "<tr>";
				    echo "<td class='all-data'>".$r['id']. "</td>";
				    echo "<td class='all-data'>". $r['name']. "</td>";
				    echo "<td class='all-data'>" .$r['contact']."</td>";
				    echo "<td class='all-data'>" .$r['email']."</td>";
				    echo "<td class='all-data'>" .$r['url']."</td>";
				    echo "<td class='all-data'>" .$r['address']."</td>";
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
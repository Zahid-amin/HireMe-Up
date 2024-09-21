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

				 $records= mysqli_query($con ,"select * from student");
				echo "<table class='table table-striped table-hover table-bordered'>";
				echo "<tr  class='text-capitalize'>";
				echo "<th >". "profile"  ."</th>";
				
				echo "<th >". "name"  ."</th>";
				
				echo "<th >". "email"  ."</th>";
				echo "<th >". "gender"  ."</th>";
				echo "<th >". "mobile"  ."</th>";
				
				echo "<th >". "profession"  ."</th>";
				
				echo "<th >". "address"  ."</th>";
				echo "<th >". "Joined On"  ."</th>";
				
				echo "<th >". "status"  ."</th>";
				echo "<th >". "action"  ."</th>";
				echo "<th >". "action"  ."</th>";
				echo "<th >". "Qualification"  ."</th>";
				echo "<th >". "No.Of Jobs Applied"  ."</th>";
				echo "<th >". "Jobs Applied"  ."</th>";
				echo "</tr>";
				 while($r=mysqli_fetch_assoc($records))
				 {
				 	  $records2= mysqli_query($con ,"select * from appliedjobs where email= '".$r['email']."'");
				 	  $c=mysqli_num_rows($records2);

				    echo "<tr>";

				     echo "<td>"."<img src=$r[profile] >". "</td>";
				    
				    
				    echo "<td>". $r['name']. "</td>";
				    echo "<td>" .$r['email']."</td>";
				    echo "<td>" .$r['gender']."</td>";
				    echo "<td>" .$r['mobile']."</td>";
				    
				    echo "<td>" .$r['profession']."</td>";
				   
				    echo "<td>" .$r['address']."</td>";
				    echo "<td>" .$r['time']."</td>";
				    
				    echo "<td>" .$r['status']."</td>";
				    echo "<td>" ."<a href='block-student.php?id=$r[id]' class='btn btn-danger'>Block </a>"."</td>";
				    echo "<td>" ."<a href='approve-student.php?id=$r[id]' class='btn btn-success'>Unblock </a>"."</td>";
				     echo "<td>" ."<a href='qualification.php?id=$r[id]' class='btn btn-info'>View </a>"."</td>";

				  echo "<td>" .$c."</td>";
				   echo "<td>" ."<a href='appliedjob.php?id=$r[id]' class='btn btn-success'>View </a>"."</td>";
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
	img
	{
		width: 60px;
		height: 60px;
	}
</style>
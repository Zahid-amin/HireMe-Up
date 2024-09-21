,<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <div style="margin-top:40px">
	<?php 
     require_once('bheader.php');
     
     
		$con=mysqli_connect("localhost","root", "","project");
	$records=mysqli_query($con, "SELECT * from jobposting JOIN appliedjobs on jobposting.jobid = appliedjobs.jid WHERE appliedjobs.email ='".$_SESSION['validstudent']."'"
);
   
    echo "<table class='table table-striped table-hover table-bordered'>";
                echo "<tr  class='text-capitalize'>";
                echo "<th class='all-section'>". "company"  ."</th>";
                echo "<th class='all-section'>". "jobtitle"  ."</th>";
                
                echo "<th class='all-section'>". "experience"  ."</th>";
                echo "<th class='all-section'>". "joblocation"  ."</th>";
                
                echo "<th class='all-section'>". "description"  ."</th>";
                
                echo "<th class='all-section'>". "work"  ."</th>";
                echo "<th class='all-section'>". "payscale"  ."</th>";
                echo "<th class='all-section'>". "status"  ."</th>";
                echo "</tr>";
                 while($r=mysqli_fetch_assoc($records))
                 {$records2= mysqli_query($con ,"select * from history where sid=$r[sid]&& jid=$r[jid] order by id desc");
                      $r2=mysqli_fetch_assoc($records2);
                    echo "<tr>";
                    echo "<td class='all-data'>".$r['cname']. "</td>";
                    echo "<td class='all-data'>". $r['jobtitle']. "</td>";
                    echo "<td class='all-data'>" .$r['experience']."</td>";
                    echo "<td class='all-data'>" .$r['joblocation']."</td>";
                    
                    echo "<td class='all-data'>" .$r['description']."</td>";
                   
                    echo "<td class='all-data'>" .$r['work']."</td>";
                    echo "<td class='all-data'>" .$r['payscale']."</td>";
                    echo "<td class='all-data'>" .$r2['status']."</td>";
                    echo "<br>";
                    echo "</tr>";
                 }
                echo"</table>";

                
?>
</div>
			
<?php 
require_once('footer.php');
?>
</body>
</html>
<style type="text/css">
	body{margin-top:20px;}

</style>





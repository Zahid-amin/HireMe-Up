<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
     require_once('bheader.php');
     require_once('ssession.php');
	?>
	<?php
$con=mysqli_connect("localhost", "root","","project");
  	   $records=mysqli_query($con, "SELECT * FROM student where email ='".$_SESSION['validstudent']."'");

$r=mysqli_fetch_assoc($records);
?>
	<section style="background-color: #eee;">
  
    <div class="row" style="margin-top:150px">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="images/<?php echo $r['profile']; ?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $r['name']; ?></h5>
            
            <p class="text-muted mb-4"><?php echo $r['profession']; ?></p>

            
            
          </div>
        </div>

        <a href= "socialmedia.php?id=<?php echo $r['id']?>">Add SocialMedia</a> 
        <?php
         $records2=mysqli_query($con, "SELECT * FROM socialmedia where sid='".$r['id']."'");
         $r2=mysqli_fetch_assoc($records2);

         
     ?>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
                 
                <p class="mb-0"><a href=""><?php echo $r2['llink']; ?></a></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-github fa-lg"aria-hidden="true" style="color: #333333;"></i>
                <p class="mb-0"><a href=""><?php echo $r2['tlink']; ?></a></p>
              </li>
             
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-instagram fa-lg"aria-hidden="true" style="color: #ac2bac;"></i>
                        <p class="mb-0"><a href=""><?php echo $r2['instalink']; ?></a></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-facebook-f fa-lg "aria-hidden="true" style="color: #3b5998;"></i>
                <p class="mb-0"><a href=""><?php echo $r2['fblink']; ?></a></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $r['name']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $r['email']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $r['mobile']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Contact</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $r['mobile']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $r['address']; ?></p>
              </div>
            </div>
          </div>
        </div>
      
  

        <p>Qualification</p><br>
        <a href="qualification.php">Add Qualification</a>
      
        <?php
        
          $records=mysqli_query($con, "SELECT * FROM studentqualification where sid ='".$r['id']."'");
        echo "<table class='table table-striped table-hover table-bordered'>";
        echo "<tr >";
        echo "<th class='all-section'>". "Sno"  ."</th>";
        echo "<th class='all-section'>". "Degree"  ."</th>";
        echo "<th class='all-section'>". "University/College"  ."</th>";
        
        
        echo "<th class='all-section'>". "Address"  ."</th>";
        echo "<th class='all-section'>". "Year Of Qualification"  ."</th>";
        echo "<th class='all-section'>". "CGPA"  ."</th>";
        echo "</tr>";
         while($r=mysqli_fetch_assoc($records))
         {
            echo "<tr>";
            echo "<td class='all-data'>".$r['id']. "</td>";
            echo "<td class='all-data'>".$r['degree']. "</td>";
            echo "<td class='all-data'>". $r['university']. "</td>";
            
            echo "<td class='all-data'>" .$r['address']."</td>";
            echo "<td class='all-data'>" .$r['year']."</td>";
            echo "<td class='all-data'>" .$r['cgpa']."</td>";
            echo "<br>";
            echo "</tr>";
         }
        echo"</table>";

        ?> 
        </div>
      </div>
    </div>





        
       
</section>
<?php 

require_once('footer.php');
?>

</body>
</html>

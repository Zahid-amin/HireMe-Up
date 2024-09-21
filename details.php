<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
       require_once('bheader.php');
      
  $con=mysqli_connect("localhost","root", "","project");

$sid=$_SESSION['validid'];
   $records=mysqli_query($con, "SELECT * from company JOIN jobposting on company.name = jobposting.cname WHERE jobid ='".$_GET['id']."'");
   $r=mysqli_fetch_assoc($records)

  
	?>

	<div id="container" style="margin-top: 100px;">
       <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="company/<?php echo $r['logo']; ?>" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3"><?php echo $r['jobtitle']; ?></h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $r['joblocation']; ?></span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php echo $r['work']; ?></span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i><?php echo $r['payscale']; ?></span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p><?php echo $r['description']; ?></p>
                            <h4 class="mb-3">Skills</h4>
                            <p><?php echo $r['skills']; ?>r</p>
                            <h4 class="mb-3">Qualifications</h4>
                            <p><?php echo $r['qualification']; ?></p>
                            
                        </div>
        
                    </div>
        
                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Job Summery</h4>
                           
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature:<?php echo $r['work']; ?>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: <?php echo $r['payscale']; ?></p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location: <?php echo $r['joblocation']; ?></p>
                            
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <h4 class="mb-4"><?php echo $r['cname']; ?></h4>
                            <p class="m-0"><?php echo $r['about']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

             <?php 
                 if(isset(  $_SESSION['validstudent']))
                 {?>
                    <div class="mt-3" style="text-align:center; ;">
                   <?php echo "<a href='apply.php?id=$r[jobid]'>".  "Apply For Job </a>"; ?>
            </div>
                <?php }
                else 
                {
                    echo "<div class='alert alert-danger'> Please login to apply for job <a href='login.php'> Login </a> </div>";

                }
             ?>
           
        </div>

	</div>
    <?php 
require_once('footer.php');
?>
</body>
</html>
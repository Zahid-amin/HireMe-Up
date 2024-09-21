<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

  <?php 
  
  require_once('bheader.php');

  ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="margin-top: 100px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/dash1.jpg" alt="First slide" style="height: 600px; width: 100px;">
    </div>
    <div class="carousel-item" >
      <img class="d-block w-100" src="images/dash2.jpg" alt="Second slide" style="height: 600px; width: 100px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/dash3.jpg" alt="Third slide" style="height: 600px; width: 100px;">
    </div>
  </div>
</div>

<h2 id="header" style="text-align: center;
  margin-top: 20px;
  margin-bottom: 20px;
  color: deepskyblue;">OUR COMPANIES</h2>
<?php
$con=mysqli_connect("localhost","root", "","project");
   $records= mysqli_query($con ,"SELECT * from company limit 3 ");
    $c=mysqli_num_rows($records);
while($r=mysqli_fetch_assoc($records))
  
{  ?>
<div class="container"  style=" width:360px; display: inline-block; margin-left: 80px;">
  
      
     <div class="card testimonial-card mt-2 mb-3" >
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="company/<?php echo $r['logo']; ?>" style="height: 70px; width: 70px;">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold"><?php echo $r['name']; ?></h4>
        <hr>
        <p><i class="fa fa-quote-left "aria-hidden="true"></i> <?php echo $r['about']; ?>
          </p>
           <button type="button" class="btn btn-outline-dark btn-rounded btn-sm"
                    data-mdb-ripple-color="dark">

                    <?php echo "<a href='view.php?id=$r[id]'>See profile</a>" ?></button>
      </div>
    </div>
  </div>
  
    <?php
  }
    ?>

    <?php
    $records= mysqli_query($con ,"select * from jobposting limit 4 ");
    ?>
  

<h1 id="h1"> Our Jobs</h1>


      <?php
       while($r=mysqli_fetch_assoc($records))
         {?>
    


<div class="row" style="display: inline-block; ; width: 300px; margin-left: 50px; margin-top: 30px; ">

    <div class="card b4rder-0 bg-light rounded shadow">
        <div class="card-body p-4">
            <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0"><?php echo $r['work']; ?></span>
            <h5><?php echo $r['jobtitle']; ?></h5>
            <div class="mt-3">
                <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a href="#" target="_blank" class="text-muted"><?php echo $r['joblocation']; ?></a></span>
                <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $r['work']; ?></span>
            </div>
            
            <div class="mt-3">
        <?php echo "<a href='details.php?id=$r[jobid]'>".  "Details </a>"; ?>
            </div>
        
  </div>
</div>
</div>
</div>
<?php }?>
</div><!--end col-->

  

  
      
    
<?php 

require_once('footer.php');
?>
</body>
</html>
<style type="text/css">

.shadow {
    box-shadow: 0 0 3px rgb(53 64 78 / 20%) !important;
}
.rounded {
    border-radius: 5px !important;
}
.bg-light {
    background-color: #f7f8fa !important;
}

.badge {
    padding: 5px;
    border-radius: 3px;
    letter-spacing: 0.5px;
    font-size: 12px;
}


.bg-primary, .btn-primary, .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.focus, .btn-outline-primary:not(:disabled):not(.disabled):active, .badge-primary, .nav-pills .nav-link.active, .pagination .active a, .custom-control-input:checked ~ .custom-control-label:before, #preloader #status .spinner > div, .social-icon li a:hover, .back-to-top:hover, .back-to-home a, ::selection, #topnav .navbar-toggle.open span:hover, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots.clickable .owl-dot:hover span, .watch-video a .play-icon-circle, .sidebar .widget .tagcloud > a:hover, .flatpickr-day.selected, .flatpickr-day.selected:hover, .tns-nav button.tns-nav-active, .form-check-input.form-check-input:checked {
    background-color: #6dc77a !important;
}
.btn {
    padding: 8px 20px;
    outline: none;
    text-decoration: none;
    font-size: 16px;
    letter-spacing: 0.5px;
    transition: all 0.3s;
    font-weight: 600;
    border-radius: 5px;
}
.btn-primary {
    background-color: #6dc77a !important;
    border: 1px solid #6dc77a !important;
    color: #fff !important;
    box-shadow: 0 3px 7px rgb(109 199 122 / 50%);
}
.row{
/*  display: inline-block;*/
}

a {
text-decoration:none;    
}
#h1{
    margin-top: 100px;
    text-align: center;
    color: powderblue;
}

  .testimonial-card .card-up {
  height: 120px;
  overflow: hidden;
  border-top-left-radius: .25rem;
  border-top-right-radius: .25rem;
}

.aqua-gradient {
  background: linear-gradient(40deg, #2096ff, #05ffa3) !important;
}

  
  
}
#header{
  text-align: center;
  margin-top: 20px;
  margin-bottom: 20px;
  color: deepskyblue;

}


</style>
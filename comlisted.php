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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
       require_once('bheader.php');
      
  $con=mysqli_connect("localhost","root", "","project");
   $records= mysqli_query($con ,"select * from company");

  
	?>
	<?php
while($r=mysqli_fetch_assoc($records))
{ ?>
<div class="container"  style=" width:360px; display: inline-block; margin-left: 80px; margin-top:80px">
  
      
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
                    data-mdb-ripple-color="dark"><?php echo "<a href='view.php?id=$r[id]'>See profile</a>" ?></button>
      </div>
    </div>
  </div>
    <?php
  }
    ?>
<?php 
require_once('footer.php');
?>

</body>
</html>
<style type="text/css">
	
  .testimonial-card .card-up {
  height: 120px;
  overflow: hidden;
  border-top-left-radius: .25rem;
  border-top-right-radius: .25rem;
}

.aqua-gradient {
  background: linear-gradient(40deg, #2096ff, #05ffa3) !important;
}
</style>
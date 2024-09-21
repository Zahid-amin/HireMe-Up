<?php 
       require_once('cheader.php');

       require_once('session.php');
       $con=mysqli_connect("localhost","root", "","project");

                 $records= mysqli_query($con ,"select * from company where email='".$_SESSION['validcompany']."'");
                 $r=mysqli_fetch_assoc($records);
                   $c=mysqli_num_rows($records);



	?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
 <section class="vh-100" style="background-color: #f4f5f7; margin-top:40px ; "   >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0"  style="margin-right: 600px;">
  <div class="container py-3 h-100" style="width: 1200px;">
        <div class="card mb-3" style="border-radius: .5rem;" >
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="<?php echo $r['logo']; ?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5><?php echo $r['name']; ?></h5>
              <p><?php echo $r['url']; ?></p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6> Email</h6>
                    <p class="text-muted"><?php echo $r['email']; ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Contact</h6>
                    <p class="text-muted"><?php echo $r['contact']; ?></p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>About</h6>
                    <p class="text-muted"><?php echo $r['about']; ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Address</h6>
                    <p class="text-muted"><?php echo $r['address']; ?></p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2>Jobs Posted</h2>
      <?php
      $records2= mysqli_query($con ,"select * from jobposting where email='".$_SESSION['validcompany']."'");
        echo "<table class='table table-striped table-hover table-bordered'>";
        echo "<tr  class='text-capitalize'>";
        echo "<th class='all-section'>". "cname"  ."</th>";
        echo "<th class='all-section'>". "jobtitle"  ."</th>";
        
        echo "<th class='all-section'>". "experience"  ."</th>";
        echo "<th class='all-section'>". "joblocation"  ."</th>";
        echo "<th class='all-section'>". "qualification"  ."</th>";
        
        echo "<th class='all-section'>". "skills"  ."</th>";
        echo "<th class='all-section'>". "work"  ."</th>";
        echo "<th class='all-section'>". "payscale"  ."</th>";
        echo "<th class='all-section'>". "posted on"  ."</th>";
        echo "</tr>";
         while($r2=mysqli_fetch_assoc($records2))
         {
            echo "<tr>";
            echo "<td class='all-data'>".$r2['cname']. "</td>";
            echo "<td class='all-data'>". $r2['jobtitle']. "</td>";
            echo "<td class='all-data'>" .$r2['experience']."</td>";
            echo "<td class='all-data'>" .$r2['joblocation']."</td>";
            echo "<td class='all-data'>" .$r2['qualification']."</td>";
            
            echo "<td class='all-data'>" .$r2['skills']."</td>";
            echo "<td class='all-data'>" .$r2['work']."</td>";
            echo "<td class='all-data'>" .$r2['payscale']."</td>";
             echo "<td class='all-data'>" .$r2['time']."</td>";
            echo "<br>";
            echo "</tr>";
         }
        echo"</table>";

        ?>    


      

    </div>
  </div>
  
</section>


</body>
</html>
<style type="text/css">
    body{
    background: #f4f5f7;
  }
  .gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>
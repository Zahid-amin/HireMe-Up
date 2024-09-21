<?php 
    require_once('session.php');

    ?>
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
 

<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd"; >
        <a class="navbar-brand" href="dcompany.php">
    <img src="../images/hmlogo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Hireme-Up
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link" href="dcompany.php">Home <span class="sr-only">(current)</span></a>
              </li>
              
              <li class="nav-item">
                 <a class="nav-link" href="jobprofile.php">Job posting</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link " href="jobview.php">Job viewing</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link " href="profile.php">Profile</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link " href="logout.php" >Logout</a>
              </li>
              
           
            </ul>
      </div>

      
</nav>



</body>
</html>

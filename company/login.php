<?php 
ob_start();


require_once('validation.php');
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
  <div id="container">
    <h1 id="h1" > Company Login</h1>
  <form method="post">
  <!-- Email input -->
  <div class="form-outline mb-4">

    <input  type="email" id="input[type=email]" class="form-control" name="email" style="margin-top:30px;" / placeholder="Email address">
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password"  class="form-control"  name="password" / placeholder="Password">
    
  </div>

  <!-- 2 column grid layout for inline styling -->
  

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="btn">Sign in</button>
  </form>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="companysignup.php">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>


</div>



</body>
</html>

<?php 

  if(isset($_POST['btn']))
  {
  	   $con=mysqli_connect("localhost", "root","","project");
  	   $records=mysqli_query($con, "select * from company where email ='".$_POST['email']."' && password ='".$_POST['password']."' && status ='Approved'");

  	   $t=mysqli_num_rows($records);
  	   if($t== 1)
        {
          $r=mysqli_fetch_assoc($records);
        	session_start();
        	$_SESSION['validcompany']=$_POST['email'];
          $_SESSION['cid']=$r['id'];

 
        	header("location:dcompany.php");
        }
        else
        {
        	 echo "invalid user";
        }


  }
?>	






<style type="text/css">
	body{
		background-color: powderblue;
	}
	#container{
		margin-top: 70px;
  margin-right: 500px;
	margin-left: 500px;
  background-color:0AF09D;
  width: 400px;
}
#h1{
  margin-top: 50px;
 
  margin-left: 20px;

}
</style>

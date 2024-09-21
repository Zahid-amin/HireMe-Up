<?php 

ob_start();
require_once('validation.php');

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.1/css/all.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>






<body>
    <?php 
     require_once('bheader.php');
     
    ?>
    <h1 id="header" > Student SignUp</h1>
    <div id="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4">

    <input  type="text" id="inputTextBox" required class="form-control" name="name" style="margin-top:30px;"  placeholder="Full Name">
    
  </div>

  
  <div class="form-outline mb-4">
    <input type="email" id="input[type=email]" required class="form-control"  name="email"  placeholder="Email">
    
  </div>
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" required class="form-control"  name="password"  placeholder="Password"><br>
    

  <div class="form-outline mb-4">
    <input type="text" id="Number" required class="form-control"  name="mobile"  placeholder="Contact Number">

    
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example2">Gender</label><br>
   <label>Male</label> <input type="radio" required  value="male" placeholder="male"  name="gender">
    <label>Female</label><input type="radio" required  value="female" placeholder="female"  name="gender"></br>

    
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="inputTextBox3" required class="form-control"  name="profession"  placeholder="Profession">
    
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" required class="form-control"  name="address"  placeholder="Address">
    
    
  </div>
  <div class="form-outline mb-4">
     <label class="form-label" for="form2Example2">Profile Pic</label>
    <input type="file" id="form2Example2" required class="form-control"  name="file" >
   
    
   </div>
  
       <button type="submit" class="btn btn-primary btn-block mb-4" name="btn">Register</button>

        </form>
        <div id="abc">Already Have An account ? <a href="login.php">LOGIN </div>
            </div>
        </a>
    </div>
</div>
   
</body>
</html>
<?php 
 if( isset ($_POST['btn']) )
   {
    $con=mysqli_connect("localhost","root", "","project");
    $n= $_FILES['file']['name'];
           
           $source=$_FILES['file']['tmp_name'];

                   $destination='../images/'.$n;
                   

                     move_uploaded_file($source, $destination);
                   mysqli_query($con, "insert into student(name,email,mobile,gender,password,profession,address,profile) values(
                    '".$_POST['name']."', 
                    '".$_POST['email']."',
                     '".$_POST['mobile']."',
                     '".$_POST['gender']."',
                     '".$_POST['password']."',
                     '".$_POST['profession']."',
                     '".$_POST['address']."',
                     '$destination')");

echo "Registered Successfully";
  }
   
  ?>
   <style type="text/css">
        body
    {
     background-color: powderblue;
    }
   #header
    {
      margin-top: 120px;
      color: black;
      font-size: 25px;
      font-weight: 800px;
      text-align: center;
    }
     #container{
    margin-top: 70px;
    margin-right: 500px;
    margin-left: 500px;
    background-color:0AF09D;
    width: 400px;
    }

</style>

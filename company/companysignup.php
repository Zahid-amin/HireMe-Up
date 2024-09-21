<?php 

ob_start();
require_once('validation.php');
?>
<!DOCTYPE html>
<html>
<head>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>







<body>
     <?php require_once('cheader.php') 
    ?>
    <h1 id="header" > Company SignUp</h1>
 <div id="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4">


    <input  type="text" id="inputTextBox" required class="form-control" name="name" style="margin-top:30px;" />
    <label class="form-label" for="form2Example1">Name of company</label>
    
  </div>

  
  <div class="form-outline mb-4">
    <input type="email" id="input[type=email]" required class="form-control"  name="email" />
    <label class="form-label" for="form2Example2">Company Email</label>

  </div>
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" required class="form-control"  name="password" />
    <label class="form-label" for="form2Example2">Password</label>
    
  </div>
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" required class="form-control"  name="" />
    <label class="form-label" for="form2Example2">Repeat Password</label>
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="Number" required class="form-control"  name="contact" />
    <label class="form-label" for="form2Example2">Contact Number</label>
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="text" required class="form-control"  name="url" />
    <label class="form-label" for="form2Example2">Enter Url</label>
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="inputTextBox2" required class="form-control"  name="address" />
    <label class="form-label" for="form2Example2">Address</label>
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" required class="form-control"  name="about" />
    <label class="form-label" for="form2Example2">About</label>
    
  </div>
  <div class="form-outline mb-4">
    <input type="file" id="form2Example2" required class="form-control"  name="file" />
    <label class="form-label" for="form2Example2">Logo Of Company</label>
    
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
    
        
             $n= $_FILES['file']['name'];
           
           $source=$_FILES['file']['tmp_name'];

                   $destination='../images/'.$n;
                   

                     move_uploaded_file($source, $destination);
        
      $con=mysqli_connect("localhost","root", "","project");

      
                mysqli_query($con, "insert into company(name,contact,email,password,url,address,about,logo) values(
                    '".$_POST['name']."', 
                    '".$_POST['contact']."',
                     '".$_POST['email']."',
                     '".$_POST['password']."',
                     '".$_POST['url']."',
                     '".$_POST['address']."',
                     '".$_POST['about']."',
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
      margin-top: 70px;
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
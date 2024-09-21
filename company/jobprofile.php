<?php 


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


<h1 id="header"> JOB POSTING</h1>

<body>
    <?php require_once('cheader.php') ;
    require_once('session.php');

    ?>
    <div id="container">
    <form method="post">
      <div class="form-outline mb-4">

    <input  type="text" id="inputTextBox" required class="form-control" name="cname" style="margin-top:30px;" / placeholder="Company name">
  </div>

  
  <div class="form-outline mb-4">
    <input type="email" id="input[type=email]" required class="form-control"  name="email" / placeholder="Company Email">
    

  </div>
  <div class="form-outline mb-4">
    <input type="text" id="inputTextBox3" required class="form-control"  name="jobtitle" /placeholder="Job Title" >
    
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" required class="form-control"  name="experience" / placeholder="Experience" >
    
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="inputTextBox2" required class="form-control"  name="qualification" / placeholder="Qualification">
    
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" required class="form-control"  name="description" / style="height: 300px;" placeholder="Description">
 
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" required class="form-control"  name="skills" / style="height: 300px;" placeholder="Skills">
   
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="inputTextBox" required class="form-control"  name="work" / placeholder="Job Type">
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" required class="form-control"  name="level" / placeholder="Level Of Job">
    
    
  </div>
  
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" required class="form-control"  name="joblocation" / placeholder="Job Location">
    
    
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="Number" required class="form-control"  name="payscale" / placeholder="Pay Scale">
    
  </div>
    

        

        
        
        
        
          <button type="submit" class="btn btn-primary btn-block mb-4" name="btn">Add Job</button>


       	</form>
        </div>
       	


</body>
</html>
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
<?php 

  if( isset ($_POST['btn']) )
   {
       $con=mysqli_connect("localhost","root", "","project");
// name    email   mobile  gender  password    

      
                mysqli_query($con, "insert into jobposting(cname,email,jobtitle,experience,qualification,joblocation,description,skills,work,payscale,cid ) values(
                    '".$_POST['cname']."',
                    '".$_POST['email']."', 
                    '".$_POST['jobtitle']."',
                     '".$_POST['experience']."',
                     '".$_POST['joblocation']."',
                     '".$_POST['qualification']."',
                     '".$_POST['description']."',
                     '".$_POST['skills']."',
                     '".$_POST['work']."',
                     '".$_POST['payscale']."',
                     '". $_SESSION['cid']."')");


  echo "Job Posted";

   }

   ?>
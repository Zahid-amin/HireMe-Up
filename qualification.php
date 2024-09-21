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
<body>
    <?php 
     require_once('bheader.php');
     require_once('ssession.php');
     
        $con=mysqli_connect("localhost","root", "","project");
        ?>
       <div id="myself">
        <h1 style="color: powderblue; text-align:center;">Education Qualification</h1>
       	
        <form method="post">
       	
       	<div>WHAT IS YOUR DEGREE OR OTHER QUALIFICATION AND MAJOR?</div>
       	<input type="text" class="both" placeholder="Bachelor of Science" required name="degree" id="inputTextBox"><br><br>
        
        <div>WHERE DID YOU EARN YOUR DEGREE/QUALIFICATION?</div>
       	<input type="text" class="both" placeholder="University of Kashmir" required name="university" id="inputTextBox3"><br><br>
       	
        <div>WHERE IS THE INSTITUTE LOCATED?</div>
        <input type="text" class="both" placeholder="Delina Baramulla" required name="address" id="inputTextBox2"><br><br>
       	
        <div>WHEN DID YOU EARN YOUR DEGREE/QUALIFICATION?</div>
       	<input type="text" class="both" placeholder="2023" required name="year" id="Number"><br><br>
        
        <div>DID YOU MINOR IN ANYTHING?</div>
        <input type="text" class="both" placeholder="8TH SEM" required name="minor" ><br><br>
        
        <div>GPA(IF APPLICABLE)</div>
        <input type="text" class="both" placeholder="6.5 GPA" required name="cgpa" id="Number15"><br><br>
       	
        <div>OPEN FIELD FOR ADDITIONAL INFORMATION</div>
       	<input type="text" class="both" placeholder="Awarded Full Scholarship for 4 years due to grades" required name="additional"><br><br>
        
        <button id="bttn" name="btn"><i class="fa fa-user-plus" aria-hidden="true"></i>Add Qualification</button>
        </form>
       	
       	


</body>
</html>
<style type="text/css">
	body
	{
        background-image: url(1901.jpg);

	}
	#header
	{
      color: black;
      font-size: 25px;
      font-weight: 800px;
      text-align: center;
    }
    #myself
    {
        background-color: whitesmoke;
        padding: 20px;
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 110px;

    }
    .both
    {
       width: 100%;
       height: 30px;
       
       outline: none;
       cursor: progress;
       background-color: whitesmoke;
     }
     #bttn
     {

     	background-color: black;
     	width: 100%;
     	height: 34px;
     	margin-top: 30px;
     	cursor: pointer;
     	color: whitesmoke;
     	font-size: 19px;


     }
     #bttn:hover
     {
     	background-color:green;
     }
     #abc
     {
     	margin-top: 25px;
     }

     
      }
</style>
<?php 
if( isset ($_POST['btn']) )
   {
      mysqli_query($con, "insert into studentqualification(degree,university,address,year,minor,cgpa,additional,sid) values(
                    '".$_POST['degree']."',
                    '".$_POST['university']."',
                    '".$_POST['address']."', 
                     '".$_POST['year']."',
                     '".$_POST['minor']."',
                     '".$_POST['cgpa']."',
                      
                     '".$_POST['additional']."',
                    '".$_SESSION['validid']."')");
         echo "Added Successfully";
            } 
?>
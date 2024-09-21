<?php 


require_once('validation.php');
 require_once('ssession.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
     require_once('bheader.php');

     
     
		$con=mysqli_connect("localhost","root", "","project");


		?>
			

<div class="container" style="margin-top:80px">
  <div class="row mx-0 justify-content-center">
    <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0">
      <form method="post" 
        class="w-100 rounded p-4 border bg-white"
        
        enctype="multipart/form-data"
      >
      <label class="d-block mb-4">
          <span class="d-block mb-2">Company name</span>
          <input
            required
            name="companyname"
            type="text"
            class="form-control"
            placeholder="amazon,flipkart"
            id="inputTextBox3"
          />
          <label class="d-block mb-4">
          <span class="d-block mb-2">Company email</span>
          <input
            required
            id="input[type=email]"
            name="companyemail"
            type="text"
            class="form-control"
            placeholder="Company@gmail.com"
          />
        <label class="d-block mb-4">
          <span class="d-block mb-2">Your name</span>
          <input
            required
            name="name"
            type="text"
            class="form-control"
            placeholder="Joe Bloggs"
            id="inputTextBox"
          />
        </label>

        <label class="d-block mb-4">
          <span class="d-block mb-2">Email address</span>
          <input
            required
            name="email"
            type="email"
            class="form-control"
            placeholder="joe.bloggs@example.com"
            id="input[type=email]"
          />
        </label>

        <label class="d-block mb-4">
          <span class="d-block mb-2">Years of experience</span>
          <select name="experience" class="custom-select">
            <option>Less than a year</option>
            <option>1 - 2 years</option>
            <option>2 - 4 years</option>
            <option>4 - 7 years</option>
            <option>7 - 10 years</option>
            <option>10+ years</option>
          </select>
        </label>

        <label class="d-block mb-4">
          <span class="d-block mb-2">Tell us more about yourself</span>
          <textarea
            name="about"
            class="form-control"
            rows="3"
            placeholder="What motivates you?"
          ></textarea>
        </label>

        <div class="mb-4">
          <label class="d-block mb-2">Your CV</label>
          <div class="form-control h-auto">
            <input required
             type="file" class="form-control-file" name="file" />
          </div>
        </div>

        <div class="mb-4">
          <div>
            <label class="custom-control custom-radio">
              <input
                name="workplace"
                value="remote"
                type="radio"
                class="custom-control-input"
                required
              />
              <span class="d-inline-block mt-1 custom-control-label"
                >You'd like to work remotely</span
              >
            </label>
          </div>

          <div>
            <label class="custom-control custom-radio">
              <input
              required
                name="workplace"
                value="onsite"
                type="radio"
                class="custom-control-input"
              />
              <span class="d-inline-block mt-1 custom-control-label"
                >You'd prefer to work onsite</span
              >
            </label>
          </div>
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary px-3" name="btn">Apply</button>
        </div>

        
      </form>
    </div>
  </div>
</div>
<?php 
require_once('footer.php');
?>
</body>
</html>
<style type="text/css">
	body { padding: 2rem 0; }
</style>
<?php
 if( isset ($_POST['btn']) )
   {
    
        
             $n= $_FILES['file']['name'];
           
           $source=$_FILES['file']['tmp_name'];

                   $destination='../cv/'.$n;
                   

                     move_uploaded_file($source, $destination);
        
       
   

      
                mysqli_query($con, "insert into appliedjobs(companyname,companyemail,name,email,experience,about,cv,workplace,sid,jid) values(
                    '".$_POST['companyname']."',
                    '".$_POST['companyemail']."',
                    '".$_POST['name']."', 
                     '".$_POST['email']."',
                     '".$_POST['experience']."',
                     '".$_POST['about']."',
                     '$destination',
                      '".$_POST['workplace']."',
                     '".$_SESSION['validid']."',
                     '".$_GET['id']."')");
                    

                   // echo "insert into appliedjobs(companyname,companyemail,name,email,experience,about,,cv,workplace,sid,jid) values(
                   //  '".$_POST['companyname']."',
                   //  '".$_POST['companyemail']."',
                   //  '".$_POST['name']."', 
                   //   '".$_POST['email']."',
                   //   '".$_POST['experience']."',
                   //   '".$_POST['about']."',
                   //   '$destination',
                   //    '".$_POST['workplace']."',
                   //   '".$_SESSION['validid']."',
                   //   '".$_GET['id']."')";
                     
                mysqli_query($con, "insert into history(sid,jid) values(
                    '".$_SESSION['validid']."',
                    '".$_GET['id']."'
                       )");
                echo"Successfully Applied";
            }
           


 ?>
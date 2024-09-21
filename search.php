<<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
     require_once('bheader.php');
    
     
		$con=mysqli_connect("localhost","root", "","project");

	 $records= mysqli_query($con ,"select * from jobposting where jobtitle like '%$_GET[query]%'");

     echo "select * from jobposting where jobtitle like '% $_GET[query]%'";
    ?>
	

<h1 id="h1"> Search Result</h1>


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
                <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $r['work']; ?></span>
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
	body{margin-top:20px;}
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
/*	display: inline-block;*/
}

a {
text-decoration:none;    
}
#h1{
    margin-top: 100px;
    text-align: center;
    color: powderblue;
}
</style>

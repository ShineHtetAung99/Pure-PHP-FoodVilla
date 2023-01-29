<?php
session_start();
error_reporting(1);
include("connection.php");
if(isset($_POST['log']))
{ if($_POST['id']=="" || $_POST['pwd']=="")
{ $err="fill your id and password first"; }
else 
{$d=mysql_query("select * from admin where name='{$_POST['id']}' ");
$row=mysql_fetch_object($d);
$fid=$row->name;
$fpass=$row->pass; 
if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
{$_SESSION['sid']=$_POST['id'];
header('location:home.php'); }
else { $er=" your password is not"; }}
}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Food Villa Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	
	<h1 id="adminh" align="center">Food Villa Restaurant</h1>
	
<!-- Start login -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div id="contact_form" class="col_2">
                <h1>Admin Log In</h1>
                <form method="post" name="contact" action="#">
                      <div class="col_4 no_margin_right">
                        <label for="phone">User Name:</label>
                        <input type="text" id="id" name="id" class="required input_field" />
                    </div>
                    <div class="col_4 no_margin_right">
                        <label for="email">Password:</label>
                        <input type="password" id="pwd" name="pwd" class="validate-email required input_field" />
                    </div>
              
                     
                    <div class="clear"></div>
                    
                     <input type="submit" name="log"  id="log" value="Log in" class="submit_button" />
                </form>
            </div> 
			</div>
		</div>
	</div>
	<!-- End login -->

	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01-382607
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							foodvilla@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							223,Sule Pagoda Road,Sule Shangri-La, Yangon
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>One of the most favorite restaurant in the city Yangon for tourist as well as locals. You can have best sea food here with a lovely test. Environment is very romantic and staffs are really cool. They have bakery items are also there in the ground floor. Out side sitting is very trendy where you can pass your time with friends and family.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9Am - 9PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9Am - 9PM</p>
					<p><span class="text-color">Sat-Sun :</span> 8AM - 10PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">223,Sule Pagoda Road,Sule Shangri-La, Yangon</p>
					<p class="lead"><a href="#">+01-382607</a></p>
					<p><a href="#"> foodvilla@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved @ 2020 <a href="#">Food Villa Restaurant</a> Developed By : 
					<a href="#">SHA</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
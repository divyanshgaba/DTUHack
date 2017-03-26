<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      LOGIN
    </title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/plain/plain-fonts.css">
    
     
    <link rel="stylesheet" type="text/css" href="assets/fonts/lovelo/lovelo.css">


	<link rel="stylesheet" type="text/css" href="assets/css/colors/orange.css" title="orange" media="screen" />
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>

  	<header id="header-wrap">
		<section id="header">
			<div class="logo-menu">
				<nav class="navbar navbar-default navbar-plain" role="navigation" data-spy="affix" data-offset-top="50">
					<div class="container">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
							</button>
							<a class="navbar-brand" href="index.php">
							  <h2>DIGITALISATION</h2>
							</a>
						</div>
					
						<div class="collapse navbar-collapse" id="navbar">
							<ul class="nav navbar-nav animated-nav navbar-right">
								<li><a href="hospital_panel.php">APPOINTMENTS</a></li>                                    
								<li><a href="hospital_profile.php">PROFILE</a></li>
								<li><a href="patient_details.php">PATIENT DETAILS</a></li>
								<li><a href="Sign_out.php">LOGOUT</a></li> 
								<li><a href="contactus.php">CONTACT US</a></li>
							</ul>       
						</div>
					
					</div>

					<ul class="wpb-mobile-menu">
						<li><a href="hospital_panel.php">APPOINTMENTS</a></li>                                    
						<li><a href="hospital_profile.php">PROFILE</a></li>
						<li><a href="patient_details.php">PATIENT DETAILS</a></li>
						<li><a href="Sign_out.php">LOGOUT</a></li> 
						<li><a href="contactus.php">CONTACT US</a></li>
					</ul>
				</nav>
			</div>
		</section>    
    </header>
 
    <div class="page-header">
		<div class="page-header-inner">
			<div class="container">
				<h1 class="section-title page-title">
					PROFILE 
				</h1>
			</div>
		</div>
    </div>
<?php
	session_start();
	$hid=$_SESSION['hospitalid'];;
	include "conn.php";
	$sql="select * from hospital where id = '$hid'";
	$res=mysql_query($sql);
	if(!$res){
		echo mysql_error();
	}
	$row=mysql_fetch_assoc($res);
?>
	<div class="col-md-6 col-md-offset-3">
		<div class="respond">
			<h3>Edit Details</h3>
			<form class="form-horizontal" role="form" method="POST" action="hospitaldetails.php"  enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-md-5">
						<?php
						echo '<input class="form-control" name="name" id="author" value="'.$row["name"].'" type="text" placeholder="'.$row["name"].'"  required  />';
						?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-5">
						<?php
						echo '<input class="form-control" name="email" id="author" value="'.$row["hospitalprimaryemailid"].'" type="email" placeholder="'.$row["hospitalprimaryemailid"].'" required />';
						?>						
					</div>
				</div>
								
				<div class="form-group">
					<div class="col-md-5">
						<?php
						echo '<input class="form-control" name="totalnumofbeds" id="author" value="5" type="text" placeholder="5"  required />';
						?>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-7">
						<?php
						echo '<input class="form-control" name="address" id="author" value="'.$row['address_First_Line'].'" type="text" placeholder="'.$row['address_First_Line'].'" required />';
						?>
					</div>
					<div class="col-md-5">
						<?php
						echo '<input class="form-control" name="district" id="author" value="'.$row["district"].'" type="text" placeholder="'.$row["district"].'" required />';
						?>
					</div>	
				</div>
				
				<div class="form-group">
					<div class="col-md-7">
						<select name="state" class="form-control">
							<?php 
								echo '<option value="'.$row["state"].'">'.$row["state"].'</option>';
							?>
							<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
							<option value="Andhra Pradesh">Andhra Pradesh</option>
							<option value="Arunachal Pradesh">Arunachal Pradesh</option>
							<option value="Assam">Assam</option>
							<option value="Bihar">Bihar</option>
							<option value="Chandigarh">Chandigarh</option>
							<option value="Chhattisgarh">Chhattisgarh</option>
							<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
							<option value="Daman and Diu">Daman and Diu</option>
							<option value="Delhi">Delhi</option>
							<option value="Goa">Goa</option>
							<option value="Gujarat">Gujarat</option>
							<option value="Haryana">Haryana</option>
							<option value="Himachal Pradesh">Himachal Pradesh</option>
							<option value="Jammu and Kashmir">Jammu and Kashmir</option>
							<option value="Jharkhand">Jharkhand</option>
							<option value="Karnataka">Karnataka</option>
							<option value="Kerala">Kerala</option>
							<option value="Lakshadweep">Lakshadweep</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Manipur">Manipur</option>
							<option value="Meghalaya">Meghalaya</option>
							<option value="Mizoram">Mizoram</option>
							<option value="Nagaland">Nagaland</option>
							<option value="Orissa">Orissa</option>
							<option value="Pondicherry">Pondicherry</option>
							<option value="Punjab">Punjab</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Sikkim">Sikkim</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<option value="Tripura">Tripura</option>
							<option value="Uttaranchal">Uttaranchal</option>
							<option value="Uttar Pradesh">Uttar Pradesh</option>
							<option value="West Bengal">West Bengal</option>
						</select>
					</div>
					<div class="col-md-5">
						<?php
						echo '<input class="form-control" name="pincode" id="author" value="'.$row['pincode'].'" type="text" placeholder="'.$row['pincode'].'" required />';
						?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-3">
						<select name="category" class="form-control">
							<?php
								echo '<option value = "'.$row['hospitalcategory'].'">'.$row['hospitalcategory'].'</option>';
							?>
							<option value = "Public">Public</option>
							<option value = "Private">Private</option>
						</select> 
					</div>
					<div class="col-md-5">
						<?php
						echo '<input class="form-control" name="website" id="author" value="'.$row['pincode'].'" type="text" placeholder="'.$row['pincode'].'" required />';
						?>
					</div>
					<div class="col-md-4">
						<?php
						echo '<input class="form-control" name="telephone" id="author" value="'.$row['telephone'].'" type="text" placeholder="'.$row['telephone'].'" required />';
						?>
					</div>	
				</div>
				
			    <div class="form-group">
					<div class="col-md-12">
						<?php
						echo '<textarea class="form-control input-lg" name="facilities" value="'.$row['facilities'].'" rows="4" placeholder="'.$row['facilities'].'" ></textarea>';
						?>
					</div>	
				</div>
				
              <button type="submit" class="btn btn-danger btn-sm" name="submit">Save Details</button>
			</form>
		</div>
	</div>
	
	<footer style="backgroound-color:#333; padding:30px 110px; position:absolute; bottom:-250px; width:100%;">
		<p>DOCTOR VECTOR</p>
		<a href="contactus.php">CONTACT US</a>
	</footer>	
    <script src="assets/js/jquery-min.js">
    </script>
    
	<script src="assets/js/bootstrap.min.js">
    </script>
    
	<script src="assets/js/jquery.mixitup.js">
    </script>
    
	<script src="assets/js/wow.js">
    </script>
    
	<script src="assets/js/owl.carousel.js">
    </script>
    
	<script src="assets/js/placeholdem.min.js">
    </script>
    
	<script src="assets/js/jquery.vide.js">
    </script>
    
    <script src="assets/js/smooth-scroll.js">
    </script>
    
	<script src="assets/js/waypoints.min.js">
    </script>
    
	<script src="assets/js/jquery.counterup.min.js">
    </script>
    
	<script src="assets/js/scroll-top.js">
    </script>
    
	<script src="assets/js/jquery.appear.js">
    </script>
    
	<script src="assets/js/jquery.slicknav.js">
    </script>
	
    <script src="assets/js/main.js">
    </script>
    
  </body>
</html>
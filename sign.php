<!DOCTYPE html>
<html lang="en">
<?php
include 'assets/php/conn.php';
include "assets/php/functions.php";


?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
     HOSPITAL
    </title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/plain/plain-fonts.css">
    
     
    <link rel="stylesheet" type="text/css" href="assets/fonts/lovelo/lovelo.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/slicknav.css">


	<link rel="stylesheet" type="text/css" href="assets/css/colors/orange.css" title="orange" media="screen" />
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
		function val(){
		if(isNaN(frm.phone.value))
		{
			alert("Invalid phone number");
			frm.phone.focus(); 
			return false;
		}
		if(!((frm.phone.value).length == 10))
		{
			alert("Phone number should be of 10 digits");
			frm.phone.focus(); 
			return false;
		}
		if(frm.confirmpassword.value!=frm.password.value)
		{
			alert("Password does not match with Confirm password");
			frm.confirmpassword.focus();
			return false;
		}
		return true;
		}
	</script>

  </head>
 <body >

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
					  <li><a href="index.php">HOME</a></li>                                    
					  <li><a href="search.php?">HOSPITALS</a></li>
					  <li><a href="appointment.php">MAKE AN APPOINTMENT</a></li>
					  <li><a href="emergency.php" >EMERGENCY</a></li>
					  <li><a href="faq.php" >FAQ</a></li>
					  <?php
						if(empty($_SESSION['register']))
						{?>
					  <li><a href="sign.php" >LOGIN</a></li>
					  <?php
						}
						else
						{
						?>
						<li><a href="Sign_out.php">LOGOUT</a></li> 
						<?php
						}
						?>							
					  <li><a href="contactus.php">CONTACT US</a></li>
                           <li class="search">
                    <a href="#" class="open-search">
                      <i class="fa fa-search">
                      </i>
                    </a>
                  </li>
                  <!-- Search Ends -->
                  
                </ul>
                
                <!-- Form for navbar search area -->
                <form class="full-search" action="search.php" action="get">
                  <div class="container">
                    <input type="text" placeholder="Type to Search Hospital" name="search">
                    <a href="#" class="close-search">
                      <span class="fa fa-times fa-2x">
                      </span>
                    </a>
                  </div>
                </form>
                <!-- Search form ends -->					  
					</ul>       
				  </div>
				</div>

				<ul class="wpb-mobile-menu">
					<li><a href="index.php">HOME</a></li>                                    
					<li><a href="search.php?">HOSPITALS</a></li>
					<li><a href="appointment.php">MAKE AN APPOINTMENT</a></li>
					<li><a href="emergency.php" >EMERGENCY</a></li>
					<li><a href="faq.php" >FAQ</a></li>
					<?php
						if(empty($_SESSION['register']))
					{?>
					  <li><a href="sign.php" >LOGIN</a></li>
					<?php
						}
						else
						{
					?>
						<li><a href="Sign_out.php">LOGOUT</a></li> 
					<?php
						}
					?>
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
            SIGN IN / SIGN UP
          </h1>
        </div>
      </div>
    </div>
  
	<div class="container" >
<div class="row" >

<?php
	if(isset($_GET['loginfailed'])?(int)$_GET['loginfailed']:0){
		echo "<b><p style='color:red'>INVALID EMAIL OR PASSWORD</p></b>";
	}
?>
<div class="col-sm-6">   

 	<form method="POST" action="login.php">
			<h2>Please Sign IN Here</h2>
			<hr class="colorgraph">
			
				<div class="col-sm-3">
					<div class="form-group">
                    <p style="font-size:100%">USERNAME</p>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="form-group">
						<input  type="email" name="email" class="form-control input-md" placeholder="EMAIL" tabindex="2" required>
					</div>
				</div>
			
			<div class="col-sm-3">
					<div class="form-group">
			<p style="font-size:100%">PASSWORD</p>
					</div>
				</div>
			<div class="col-sm-8">
					<div class="form-group">
						<input type="password" name="password" class="form-control input-md" placeholder="PASSWORD" tabindex="2"  required>
					</div>
				</div>	
			<div class="col-sm-12">
			<div class="col-sm-3">
					<div class="form-group">
			<p style="font-size:100%">TYPE</p>
					</div>
				</div>
			<div class="col-sm-8">
			<div class="form-group">
			<p style="font-size:100%">Patient<input type="radio" name="user" style="border: 0px;width: 10%;height: 1em;" value="patient" checked>
			HOSPITAL<input type="radio" name="user" value="hospital" style="border: 0px;width: 10%;height: 1em;">
			</div>
			</div>
			<div class="col-sm-8">
			<div class="form-group">
			<input type="submit" style="background-color:#F60;" value="Log In" class="btn btn-primary btn-block btn-lg">
			</div>
			</div>
			</div>
			</div>
			</form>
			
<div class="col-sm-6">   
	
 	<form name="frm" method="post" action="insert.php">
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			
<?php
	if(isset($_GET['emailinvalid'])?(int)$_GET['emailinvalid']:0){
		echo "<b><p style='color:red'>Email ID already registered</p></b>";
	}
	if(isset($_GET['phoneinvalid'])?(int)$_GET['phoneinvalid']:0){
		echo "<b><p style='color:red'>Phone number already registered</p></b>";
	}
	if(isset($_GET['acninvalid'])?(int)$_GET['acninvalid']:0){
		echo "<b><p style='color:red'>Adhar Card Number(ACN) already registered</p></b>";
	}
	if(isset($_GET['dlninvalid'])?(int)$_GET['dlninvalid']:0){
		echo "<b><p style='color:red'>Driving Licence Number(DLN) already registered</p></b>";
	}
?>
				<div class="col-sm-6">
					<div class="form-group">
                        <input type="text" name="name" class="form-control input-md" placeholder="NAME" tabindex="1"  required>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<input type="email" name="email" class="form-control input-md" placeholder="EMAIL" tabindex="2"  required>
					</div>
				</div>
			
			<div class="col-sm-6">
					<div class="form-group">
			<input type="text" name="phone" class="form-control input-md" placeholder="PHONE-NUMBER" tabindex="2"  required>
					</div>
				</div>
			<div class="col-sm-6">
					<div class="form-group">
						<input type="date" name="dob" class="form-control input-md" placeholder="date of birth" tabindex="2"  required>
					</div>
				</div>	
			<div class="col-sm-12">
			<div class="form-group">
			<p style="font-size:100%">
				MALE<input type="radio" name="gender" value="male" style="border: 0px;width: 10%;height: 1em;" checked>
				FEMALE<input type="radio" name="gender" value="female" style="border: 0px;width: 10%;height: 1em;">
				OTHER<input type="radio" name="gender" value="other" style="border: 0px;width: 10%;height: 1em;">
			</p>  
			</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<b style="font-size:100%"> Select one of the following to give the proof that you are the citizen of <strong>INDIA</strong></b>
				</div>
				
				</div>
			<div class="col-sm-12">
			<div class="col-sm-6">
					<div class="form-group">
					
						<select name="identitytype" class="form-control">
						<option value="Adhar Card Number(ACN)">Adhar Card Number(ACN)</option>
						<option value="Driving Licence Number(DLN)">Driving Licence Number(DLN)</option>
						</select>
					</div>
					</div>
					<div class="form-group">
					<div class="col-sm-6">
						<input class="form-control" type="text" name="identityvalue" placeholder="ACN/DLN"  required>
					</div>
					</div>
				</div>
			<div class="col-sm-12">
				<div class="col-sm-6">
					<div class="form-group">
						<input type="password" name="password" class="form-control input-md" placeholder="PASSWORD" tabindex="3"  required>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<input type="password" name="confirmpassword" class="form-control input-md" placeholder="CONFIRM PASSWORD" tabindex="3"  required>
					</div>
				</div>
			</div>	
			
			<div class="col-sm-12">
		   <div class="form-group">
					 By clicking <strong class="label label-primary" style="background-color:#F60;">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div >
				<div class=""><input type="submit" value="Register" onclick="return val();" class="btn btn-primary btn-block btn-lg" style="background-color:#F60;" tabindex="7"></div>
				
		</form>
    
	</div>
	</div>
	</div>
	</div>

	<footer>
    
	  <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-sm-6">
              <p class="copyright-text">
                DOCTOR VECTOR <br>
				<a href="contactus.php">
				Contact Us.
				</a>
              </p>
            </div>
            </div>
        </div>
      </div>
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
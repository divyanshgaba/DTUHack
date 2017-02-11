<!DOCTYPE html>
<html lang="en">
<?php
	include 'assets/php/conn.php';
	include "assets/php/functions.php";

	session_start();
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
    
  </head>
  <body>

     	<header id="header-wrap">
		<section id="header">
          <div class="logo-menu">
			<nav class="navbar navbar-default navbar-plain" role="navigation" data-spy="affix" data-offset-top="50">
				<?php
					if(!empty($_SESSION['register']))
					{
						if($_SESSION['register']=="hospital")
						{?>
				<div class="container">	
					<div class="collapse navbar-collapse" id="navbar">
						<ul class="nav navbar-nav animated-nav navbar-right">
							<li><a href="hospital_panel.php">APPOINTMENTS</a></li>                                    
							<li><a href="hospital_profile.php">PROFILE</a></li>
							<li><a href="patient_details.php">PATIENT DETAILS</a></li>
							<li><a href="Sign_out.php">LOGOUT</a></li> 
							<li><a href="contactus.php">CONTACT US</a></li>
							<li class="search">
                    <a href="#" class="open-search">
                      <i class="fa fa-search">
                      </i>
                    </a>
                  </li>
                  <!-- Search Ends -->
                  
                
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
					<li><a href="hospital_panel.php">APPOINTMENTS</a></li>                                    
					<li><a href="hospital_profile.php">PROFILE</a></li>
					<li><a href="patient_details.php">PATIENT DETAILS</a></li>
					<li><a href="Sign_out.php">LOGOUT</a></li> 
					<li><a href="contactus.php">CONTACT US</a></li>
				<li class="search">
                    <a href="#" class="open-search">
                      <i class="fa fa-search">
                      </i>
                    </a>
                  </li>
                  <!-- Search Ends -->
                  
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
			
				<?php
				}
				}
					else
				{?>	
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
					<li class="search">
                    <a href="#" class="open-search">
                      <i class="fa fa-search">
                      </i>
                    </a>
                  </li>
                  <!-- Search Ends -->
                  
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
				<?php
				}
				?>				
			</nav>
			  
        </div>
      
      </section>    
    </header>

  <div class="page-header">
      <div class="page-header-inner">
        <div class="container">
          <h1 class="section-title page-title">
           CONTACT US
          </h1>

        </div>
      </div>
    </div>
	<center style="margin:60px 0 -40px 0;"><b><h4>PROJECT : DIGITAL HOSPITAL <br/> GROUP : C12 <br/> AMITY SCHOOL OF ENGINEERING AND TECHNOLOGY, BIJWASANA</h4></b></center>
	<div class="row">
		<div class="col-sm-4">
			<center>
			<img src="assets\img\profile\1.jpg" alt="AMIT PHOTO" />
			<p><b>AMIT KUMAR MISHRA </b><br/>Enrollment no. : 00910402714 <br/> Branch : CSE <br/> Year : 3rd <br/> Mobile : +919643627896</p>
			</center>
		</div>
		<div class="col-sm-4">
			<center>
			<img src="assets\img\profile\1.jpg" alt="SHIVAM PHOTO" />
			<p><b>SHIVAM SHARMA </b><br/>Enrollment no. : 02010402714 <br/> Branch : CSE <br/> Year : 3rd <br/> Mobile : +918750297770</p>
			</center>
		</div>
		<div class="col-sm-4">
			<center>
			<img src="assets\img\profile\1.jpg" alt="RIDHAM PHOTO" />
			<p><b>RIDHAM KUMAR </b><br/>Enrollment no. : 05210402714 <br/> Branch : CSE <br/> Year : 3rd <br/> Mobile : +918802856863</p>
			</center>
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
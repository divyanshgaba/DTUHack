<?php
	include 'assets/php/conn.php';
	include "assets/php/functions.php";

	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		DOCTOR VECTOR
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
		
		<div id="carousel-area">
          <div id="carousel-slider" class="carousel slide" data-interval="3000">
            <ol class="carousel-indicators">
              <li data-target="#carousel-slider" data-slide-to="0" class="active">
              </li>
              <li data-target="#carousel-slider" data-slide-to="1">
              </li>
              <li data-target="#carousel-slider" data-slide-to="2">
              </li>
            </ol>
            <div class="carousel-inner">
              <!-- Carousel Items Strarts-->
              <div class="item " style="background-image: url(assets/img/slider/bg-2.jpg);">
                <div class="carousel-caption">
            <!--       <h2 style="color:#9BB5AC;">
						We Cure We love :) 
                  </h2>
                  <h3 style="color:#9BB5AC;">
						<b>It is certainly nice to know that great and reliable care is so close to home.</b>
                  </h3>
                  -->
                </div>
              </div>
              <div class="item" style="background-image: url(assets/img/slider/bg-1.jpg);">
                
              </div>
              <div class="item active" style="background-image: url(assets/img/slider/bg-3.jpg);">
                <div class="carousel-caption">
                  <h2  style="color:#F60;">
                   We Cure We love :)
                  </h2>
                  <h3 style="color:#f60;">
                  <b>It is certainly nice to know that great and reliable care is so close to home.</b>
                  </h3>
                </div>
              </div>
            </div>
			
            <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
              <i class="fa fa-chevron-left">
              </i>
            </a>
            <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
              <i class="fa fa-chevron-right">
              </i>
            </a>
          </div>
        </div>
    
      </section>    
    </header>

   <section id="portfolio">

      <div class="container">
        <h1 class="section-title wow fadeInUpQuick">
          Centres of Excellence
        </h1>
      </div>
	  
	  <div id="portfolio-items" class="portfolio-items text-center">

        <div class="mix marketing planning">
          <figure class="effect-layla" margin="5px">
                <img src="assets/img/centerofexcellence/images 3.jpg" height="315"></img>
            <figcaption margin="5px">
              <h3>
			    Heart
              </h3>
			  <div class="portfolio-category">
			    
				 Artery Bypass Surgery <br>
				 Coronary Artery Stenting<br>
				 Laser Angioplasty <br>
				  Heart Transplant Programme
			 </div>
            </figcaption>
          </figure>
        </div>
		
        <div class="mix branding planning">
          <figure class="effect-layla">
                <img src="assets\img\centerofexcellence/img5.jpg" height="315"></img>
            <figcaption>
              <h3>
                Orthopaedics
              </h3>
              <div class="portfolio-category">
                <span>
					Arthroscopic and Reconstructive techniques<br>
					Orthopedic Oncology<br>
					 Articular cartilage Implantation (ACI)<br>
				</span>   
              </div>
            </figcaption>
          </figure>
        </div>
		
        <div class="mix branding research">
          <figure class="effect-layla">
                <img src="assets/img/centerofexcellence/images 6.jpg" height="315"></img>
            <figcaption>
              <h3>
                Neuroscience
              </h3>
              <div class="portfolio-category">
                <span>
				 Neuro-Radiology services<br>
				 Neuro-imaging technology<br>
				  Treatment neurological diseases such as congenital
				  malformations like atlanto-axial dislocation, spinal dysraphism etc
				</span>   
              </div>
            </figcaption>
          </figure>
        </div>
		
        <div class="mix marketing research">
          <figure class="effect-layla">
                <img src="assets/img/centerofexcellence/images7.jpg" height="315"></img>
            <figcaption>
              <h3>
				Cancer
              </h3>
              <div class="portfolio-category">
                <span>
					Surgical Oncology<br>
					Radiation Therapy<br>
					Transplant<br>
					Diagnostics
				</span>   
              </div>
            </figcaption>
          </figure>
        </div>
		
        <div class="mix marketing planning">
          <figure class="effect-layla">
            <img src="assets/img/centerofexcellence/images8.jpg" style="height:320px">
            <figcaption>
              <h3>
                Gastroenterology
              </h3>
              <div class="portfolio-category">
                <span>
					 Liver Transplant Programme<br>
					 Endosonography and Capsule Endoscopy<br>
					 Treatment of Gastrointestinal bleed, Gastrointestinal
					 cancers etc 
				</span>   
              </div>
            </figcaption>
          </figure>
        </div>
		
        <div class="mix planning research">
          <figure class="effect-layla">
            <img src="assets/img/centerofexcellence/img6.jpg">
            <figcaption>
              <h3>
                DIABETES
              </h3>
              <div class="portfolio-category">
                <span>Proper Treatment<br>
					  Diabetes Clinic
				</span>   
              </div>
            </figcaption>
          </figure>
        </div>
        
      </div>
    </section>   
  

    
    <section id="other-services">
      <div class="container">
        <h1 class="section-title wow fadeInUp">
          Our Services
        </h1>
        <div class="row">

          <div class="col-sm-6 col-md-6">
            <article class="other-service-item wow fadeInUp" data-wow-delay=".5s">
              <div class="icon">
                <img src="assets/img/centerofexcellence/image.jpg" width="130"></img>
              </div>              
              <div class="service-content">
                <h3>CUTTING EDGE MEDICAL TECHNOLOGY</h3>
				<p>
					NovalisTx
					High Dose Rate(HDR) Brachytherapy
					64-slice Scan
					3.0 Tesla MRI
					Spect-CT & Pet-CT
				</p>
              </div>
            </article>
            <article class="other-service-item wow fadeInUp" data-wow-delay=".8s">
              <div class="icon">
                <img src="assets/img/centerofexcellence/images 9.png" width="130"></img>
			  </div>
              <div class="service-content">
                <h3>INTERNATIONAL PATIENT SERVICES</h3>
                <p>
                World class healthcare delivered with experience, expertise and empathy
				</p>
              </div>
            </article>
            <article class="other-service-item no-gap-bottom  wow fadeInUp" data-wow-delay="1.2s">
              <div class="icon">
                <img src="assets/img/centerofexcellence/images 1.jpg" width="130"></img>
              </div>
              <div class="service-content">
                <h3>OUR COMMUNITY</h3>
                <p>
				We understand our duty to the society and have a committed team for our Doctor Vector Community Outreach Program (DVCOP).
				</p>
              </div>
            </article>
          </div>
		  
          <div class="col-sm-6 com-md-6 wow fadeInRightQuick" data-wow-delay=".2s">
            <img src="assets/img/centerofexcellence/images1.jpg" width="600" height="600" class="img-responsive" alt="">
          </div>
		  
        </div>
      </div>
    </section>
	
	<footer>
    
	  <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-sm-6">
              <p class="copyright-text">
                DIGITAL HOSPITAL <br>
				<a href="contactus.php">CONTACT US</a>
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
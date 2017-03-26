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
      Doctor Portal
    </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!--Fonts-->
    <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/plain/plain-fonts.css">
    
     
    <link rel="stylesheet" type="text/css" href="assets/fonts/lovelo/lovelo.css">
    <!-- Extras -->
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
      
      </section>    
    </header>
  
    <!-- Blog-page Section -->
    <section id="blog-page">
      <div class="container">
        <div class="row">
          <!-- Sidebar Start -->
         
          
          <div class="col-md-12">
            <div id="comments" class="havecomments">
              <h3>
               Select your Hospital
              </h3>

              <ol class="commentlist">
			  
			  <?php 
		$pid= $_SESSION["logined"] ;
	//	$sql1="select * from patient where pid='$pid'";
      //  $res1=mysql_query($sql1);
	//	while($row1=mysql_fetch_assoc($res1))
		//{$padd=$row1["address"];}
	
        $sql="select * from hospital where state='delhi' order by id asc limit 10";
        $res=mysql_query($sql);

	   
        while($row=mysql_fetch_assoc($res))
        {
			 
			  ?>
				 <div class="col-md-8">
                <li class="comment">
                  <article class="clearfix comment-container">
                    
					<form method="post" action="finalemergency.php">
					
                    <div class="comment-content">
                      <div class="fn"><a href="#"><h4><?php echo $row["name"];?></h4></a></div>
                      
                      <section class="comment_content clearfix">
                        <p> <b>Address:</b><?php echo $row["address_First_Line"].",".$row["district"];?></p>
					    <p> <b>Hospital Category:</b><?php echo $row["hospitalcategory"];?></p>
						<p> <b>Medicine type:</b><?php echo $row["medi"];?></p>
					    <p> <b>Specialties:</b><?php echo $row["specialties"];?></p>
					<?php
					$origin=selectuserinfo($pid)["address"];
                    $destination=$row["name"].",".$row["address_First_Line"].",".$row["district"];
?>

					     <p> <b>distance and time:</b><?php distancematrix($origin,$destination);?></p>
                      </section>
					  
                      <input type="hidden" name="hospital" value="<?php echo $row["id"];?>"/>
                      
                      <button type="submit" class="comment-reply-link btn btn-danger btn-sm">Select</button>
					 
                    </div>
                    <!-- END comment-content -->
                 
				  <br>
                
                </form>
				 </article>
				 </li>
				 </div>
				 <div class="col-md-4">
            <div id="comments" class="havecomments">
			
			<ol class="commentlist">
			<li class="comment">
			<iframe
  width="100%";
  height="250px"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyAbd318t5kTkd5tBcqCxISXCeWRSdcL-sI&origin=<?php echo selectuserinfo($pid)["address"];?>&destination=<?php echo $row["name"].",".$row["pincode"];?>,&avoid=tolls|highways">
</iframe>
			</li>
			</ol>
			</div>
			</div>	
				 
       <?php 

		}

	   ?>         
              </ol>
            </div>

          </div>
					
          
        </div>
      </div>
    </section>
    <!-- Blog-page Section End -->
    
   	<footer>
    
	  <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-sm-6">
              <p class="copyright-text">
                DOCTOR VECTOR <br>
				DOCTOR VECTOR BUILDING, GREATER KAILASH, NEW-DELHI
              </p>
            </div>
            </div>
        </div>
      </div>
    </footer>

    <!-- ScrollTop Starts-->
    <div class="scroll-top" data-spy="affix" data-offset-top="500">
      <a onclick="smoothScr.anim('roof')">
        <i class="fa fa-angle-up fa-2x">
        </i>
      </a>      
    </div><!-- ScrollTop Starts-->

    <!-- Start Loader -->
  
    
    <!-- JavaScript & jQuery Plugins -->
    <!-- jQuery Load -->
    <script src="assets/js/jquery-min.js">
    </script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js">
    </script>
    <!--Text Rotator-->
    <script src="assets/js/jquery.mixitup.js">
    </script>
    <!--WOW Scroll Spy-->
    <script src="assets/js/wow.js">
    </script>
    <!-- OWL Carousel -->
    <script src="assets/js/owl.carousel.js">
    </script>
    <!-- Placeholder -->
    <script src="assets/js/placeholdem.min.js">
    </script>
    <!-- Vide -->
    <script src="assets/js/jquery.vide.js">
    </script>
    <!-- Skrollr -->
    
    <!-- Smooth Scroll -->
    <script src="assets/js/smooth-scroll.js">
    </script>
    <!-- WayPoint -->
    <script src="assets/js/waypoints.min.js">
    </script>
    <!-- CounterUp -->
    <script src="assets/js/jquery.counterup.min.js">
    </script>
    <!-- ScrollTop -->
    <script src="assets/js/scroll-top.js">
    </script>
    <!-- Appear -->
    <script src="assets/js/jquery.appear.js">
    </script>
    <!-- Slicknav -->
    <script src="assets/js/jquery.slicknav.js">
    </script>
    <!-- All JS plugin Triggers -->
    <script src="assets/js/main.js">
    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbd318t5kTkd5tBcqCxISXCeWRSdcL-sI&signed_in=true&libraries=places&callback=initAutocomplete" async defer></script>
  
  </body>
</html>
  
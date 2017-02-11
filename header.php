<?php
	//include 'assets/php/conn.php';
	//include "assets/php/functions.php";

	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
     FAQs
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
					  <h2>DIGIHOPE</h2>
					</a>
				  </div>
				          <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav animated-nav navbar-right">            
            <li><a href="index.php">Home</a></li>                                    
            <li><a href="search.php?">Hospitals</a></li>
            <li><a href="appointment.php">Appointments</a></li>
            <?php
            if(empty($_SESSION['register']))
            {?>
            <li><a href="sign.php" >Sign In</a></li>
            <?php
            }
            else
            {
            ?>
            <li><a href="Sign_out.php">Sign Out</a></li> 
            <?php
            }
            ?>              
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
          <li><a href="index.php">Home</a></li>                                    
          <li><a href="search.php?">Hospitals</a></li>
          <li><a href="appointment.php">Appointments</a></li>
          <?php
            if(empty($_SESSION['register']))
          {?>
            <li><a href="sign.php" >Sign In</a></li>
          <?php
            }
            else
            {
          ?>
            <li><a href="Sign_out.php">Sign Out</a></li> 
          <?php
            }
          ?>
          <li class="search">
                    <a href="#" class="open-search">
                      <i class="fa fa-search">
                      Search
                      </i>
                    </a>
                  </li>
        </ul>
        
      </nav>
        
        </div>
      
      </section>    
    </header>
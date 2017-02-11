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
            FAQs
          </h1>
        </div>
      </div>
    </div>
    
    <section id="faqs">
      <div class="container">
        <h1 class="section-title">
          Frequently asked questions
        </h1>
        <div class="row">

		<div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <i class="fa fa-leaf">
                    </i>
                    How are the services?
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                  <p>
There is a large network of public hospitals and nursing posts spread across the State to provide accessible health care to all communities. There are also hospital support services and palliative care facilities.

HOSPITALS

Hospitals provide a broad range of in-patient and out-patient health care services to match the needs of the community.

In-Patient Services
In-patient services include medical, surgical, paediatric, obstetric and rehabilitation services. Many hospitals also provide mental health services and services for older people

Out-Patient Services
Most hospitals provide out-patient services including emergency services, day procedures, diagnostic and assessment services, and therapy services. Hospitals also support various community based programs to prevent or reduce the need for hospitalisation.                  </p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <i class="fa fa-leaf">
                    </i>
                    how to book an appointment?
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
You can book your appointment online or you can call The Appointments Line on 0345 6088888. You’ll need your reference number and password, which can all be found on your appointment request letter. If you do not have these you will need to contact your GP practice who will be able to reprint these for you. Speak to your GP about your choices and read about choosing a hospital for more advice.
The Patient Advice and Liaison Service (PALS) may also be able to help. You can get details of PALS from your GP surgery                  </p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    <i class="fa fa-leaf">
                    </i>
                    Support available?
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
                   Social workers assist with any social problem(s) that will impact upon the ongoing care or discharge planning of a client.

This could involve information, support, assistance and coordination around emotional and practical issues, legal issues, family and relationship issues, social circumstances, family violence issues, and discharge planning.

Please ask the ward staff to contact a social worker if you need this type of advice or support. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                  </p>
                </div>
              </div>
            </div>
			<div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                    <i class="fa fa-leaf">
                    </i>
                    How do I schedule medical appointments with a specialist at Apollo?
                  </a>
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
You or your attendant can contact the International Patients Service Centre of the location of your choice, via telephone, fax, email or letter. Details are available at the Contact us section of this website. Alternatively, you can fill in the form available in the website in the Ask Us section.
          </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                    <i class="fa fa-leaf">
                    </i>
                    When making a medical appointment what information must I provide?
                  </a>
                </h4>
              </div>
              <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
You must provide all relevant information on your medical condition, including scans, medical history, and current medication etc.If you have been referred to Apollo by a doctor in your home country, please carry the contact details of the doctor.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                    <i class="fa fa-leaf">
                    </i>
                    Without a referral from my local doctor, can I seek an appointment with a specialist at Apollo?
                  </a>
                </h4>
              </div>
              <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
Yes. You can contact the Apollo International Patients centre of our various Apollo locations directly, with details of your medical history and treatment sought. Our International Patient Service Co-ordinators will recommend and also schedule an appointment, with an appropriate specialist.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                    <i class="fa fa-leaf">
                    </i>
                    Will someone guide me on the duration and cost of treatments?
                  </a>
                </h4>
              </div>
              <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
Definitely. Once you have consulted the appropriate specialist, our Relationship Manager will give you a complete plan on the approximate length of stay at the hospitals and the total cost of the treatment, along with the necessary pre/post treatment care.
              </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                    <i class="fa fa-leaf">
                    </i>
                    In my Visa, I can see 'FRRO required within 14 days of arrival'. What does this mean and how should I go about it?
                  </a>
                </h4>
              </div>
              <div id="collapseEight" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
FRRO stands for Foreigners Regional Registration Office and this is required if you are travelling for medical requirement and have a Visa type 'M' which means 'Medical'. This Visa gives you multiple entries and provides you a longer stay at India. Our Patient Services Co-ordinators will do the processing for your registration and you will just need to follow their instruction on the same. You are required to register at the Foreigners Regional Registration Office within 14 days of your arrival. The prescribed format for the same is also available at the International Patients Service Desk.

Patients from Pakistan and Bangladesh are required to register their arrival within 24 hours with the nearest Police Station/Commissioner's Office. Please refer to our Visa/Transit document for instructions.

Will I be received at the airport ?

Yes indeed. Please contact the International patients services department at the location you have chosen [ please refer to the Contact us section on this website for details ], and let them know your travel plans and request for pick up.                </div>
              </div>
            </div>
            
          </div>
          <!-- accordion End -->
        </div>
      </div>
    </section>
    
   <footer>
    
	  <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-sm-6">
              <p class="copyright-text">
                DOCTOR VECTOR <br>
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
   
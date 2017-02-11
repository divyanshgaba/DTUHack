<!DOCTYPE html>
<html lang="en">
<?php
include 'conn.php';
session_start();
/*if(strcmp($_SESSION['user'],"hospital"))
{
	header('location:index.php');
}*/
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
		         <div class="col-md-12">
            <div id="comments" class="havecomments">
              <h3>
               Patient Details
              </h3>

              <ol class="commentlist">
			  
			  
	<?php
		$hid=$_SESSION['hospitalid'];
		$sql1="select * from appointment where status='approve' and hid='$hid'";
		$res1=mysql_query($sql1);
		if (! $res1){
			die(mysql_error());
		}
		while($row1=mysql_fetch_assoc($res1)){
			$pid=$row1['pid'];
			$sql2="select * from patient where pid = '$pid'";
			$res2=mysql_query($sql2);
			$row2=mysql_fetch_assoc($res2); 
			  ?>
				 <div class="col-md-12">
                <li class="comment">
                  <article class="clearfix comment-container">
                    
					<form method="post" action="finalemergency.php">
					
                    <div class="comment-content">
                      <div class="fn"><a href="#"><h4><?php echo $row2["name"];?></h4></a></div>
                      
                      <section class="comment_content clearfix">
                        <p> <b>Email : </b><?php echo $row2["email"];?></p>
					    <p> <b>Mobile : </b><?php echo $row2["phone"];?></p>
						<p> <b><?php echo $row2["identitytype"]." : ";?></b><?php echo $row2["identityvalue"];?></p>
					    <p> <b>Gender</b><?php echo $row2['gender'];?></p>
                      </section>
					  
                	 
                    </div>
                    <!-- END comment-content -->
                 
				  <br>
                
                </form>
				 </article>
				 </li>
				 </div>
				 
       <?php 

		}

	   ?>         
              </ol>
            </div>

          </div>

	<?php
		
	?>
</body>
</html>
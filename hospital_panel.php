<!DOCTYPE html>
<html lang="en">
<?php
include 'conn.php';
session_start();
//echo "<h1>hi".$_SESSION['hospitalid']."</h1>";
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
<?php 
		$id=$_SESSION['hospitalid'];
		$sql="select * from hospital where id='$id'";
		$res=mysql_query($sql);
		$row=mysql_fetch_assoc($res);
	 ?>
	   <section id="blog-page">
      <div class="container">
        <div class="row">

		<div class="col-md-4">
            <div class="sidebar">
              <div class="popular-post widget">
                <h4 class="widget-title"><?php echo $row['name']; ?></h4>
                
				  <div align="center">
				  <?php
					echo "<img src='hos/aims.jpg' width='100px' height='100px' />";
				  ?>
				  </div>
				  <br>
                  <?php
					echo "<b>Address : </b>".$row["address_First_Line"].",",$row["district"].",".$row["state"]." - ".$row["pincode"].
					"<br/><b>Hospital Type</b> : ".$row["hospitalcategory"]."<br/>
					<b>Website : </b><a href=".$row["website"]." target=_blank >".$row["website"]."</a>".
					"<br/><b>Telephone : </b>".$row["telephone"]."<br/>
					<b>Email ID : </b>".$row["hospitalprimaryemailid"];
					if($row["totalnumofbeds"]=="NA")
						echo "<br/><b>Beds Avalaible : </b>5";
					else
						echo "<br/><b>Beds Avalaible : </b>".$row["totalnumofbeds"];
				?> 

                </ul>
              </div>
            </div>
        </div>
		<div class="col-sm-8" style="margin-top: -80px">
		   <div class="row">
          <div class="main">
            
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a data-toggle="tab" role="tab" href="#rr"> RECENT REQUEST </a>
              </li>
              <li>
                <a data-toggle="tab" role="tab" href="#ar"> APPROVED REQUEST</a>
              </li>
              <li>
                <a data-toggle="tab" role="tab" href="#cr"> CANCELLED REQUEST</a>
              </li>
            </ul>
            
            <!-- Tab content -->
            <div class="tab-content">
              <div id="rr" class="tab-pane fade in active " role="tabpanel">
               <ol class="commentlist">
                <li class="comment">
					<?php
						$hid=$_SESSION['hospitalid'];
						$sql1="select * from appointment where status='pending' and hid='$hid'";
						$res1=mysql_query($sql1);
						$row1=mysql_fetch_array($res1);
						$num=mysql_num_rows($res1);
						$i=1;
						while($i<=$num){
							$i++;
							$pid1=$row1['pid'];
							$sql2="select name from patient where pid = '$pid1'";
							$res2=mysql_query($sql2);
							$row2=mysql_fetch_assoc($res2);
					?>

					<article class="clearfix comment-container">
                    <div class="comment-content" style="padding-top:20px;">
						<cite class="fn"><?php echo $row2['name']; ?></cite>
						<time><?php echo $row1['applicationtime']." , ".$row1['applicationdate']; ?></time>
						<section class="comment_content clearfix">
							<p><?php echo $row1['issue']."<br/>".$row1['discription']; ?></p>.
						</section>
						
						<form action="patient_submit.php" method="POST">
							<?php echo '<input name="pid" value='.$row1['pid'].' hidden />';?>
							<input type="date" name="date" >Date</input> 
							<input type="time" name="time" >time</input> 
							<input  class="btn btn-danger btn-sm"  type="submit" name="submit" value="APPROVE" />
							<input  class="btn btn-danger btn-sm"  type="submit" name="submit" value="REJECT" />
						</form>
						<hr/>
					</div>
					</article>
					<br>
					<?php } ?>
                </li>
               </ol>
             </div>
              <div id="ar" class="tab-pane fade">
               <ol class="commentlist">
                <li class="comment">
                  <?php
					$hid=$_SESSION['hospitalid'];
					$sql1="select * from appointment where status='approve' and hid='$hid'";
					$res1=mysql_query($sql1);
					if (! $res1){
						die(mysql_error());
					}
					while($row1=mysql_fetch_assoc($res1)){
						$pid=$row1['pid'];
						$sql2="select name from patient where pid ='$pid'";
						$res2=mysql_query($sql2);
						$row2=mysql_fetch_assoc($res2);
				?>
                  <article class="clearfix comment-container">
                    <div class="comment-content" style="padding-top:20px;">
                      <cite class="fn" style="margin-right:10px;"><b><?php echo strtoupper($row2['name']); ?></b></cite>
                      <time><?php echo $row1['applicationtime']." , ".$row1['applicationdate']; ?></time>
                      <section class="comment_content clearfix">
                        <p><?php echo "<b>PROBLEM : </b>".$row1['issue']."<br/><b>DESCRIPTION : </b>".$row1['discription']; ?></p>.
                      </section>
                    </div>
					</article>
					<hr/>
				  <br>
					<?php } ?>
                </li>
               </ol>
             </div>
              <div id="cr" class="tab-pane fade">
                <ol class="commentlist">
                <li class="comment">
                   <?php
						$hid=$_SESSION['hospitalid'];
						$sql1="select * from appointment where status='reject' and hid='$hid'";
						$res1=mysql_query($sql1);
						while($row1=mysql_fetch_assoc($res1)){
						$pid1=$row1['pid'];
						$sql2="select name from patient where pid = '$pid1'";
						$res2=mysql_query($sql2);
						$row2=mysql_fetch_assoc($res2);
				?>
                  <article class="clearfix comment-container">
                    <div class="comment-content" style="padding-top:20px;">
                      <cite class="fn" style="margin-right:10px;"><b><?php echo strtoupper($row2['name']); ?></b></cite>
                      <time><?php echo $row1['applicationtime']." , ".$row1['applicationdate']; ?></time>
                      <section class="comment_content clearfix">
                        <p><?php echo "<b>PROBLEM : </b>".$row1['issue']."<br/><b>DESCRIPTION : </b>".$row1['discription']; ?></p>.
                      </section>
                    </div>
					</article>
					<hr/>
				  <br>
					<?php } ?>
                </li>
               </ol>
             </div>
            </div>
            <!-- Tabs end -->            
                 
          </div>
        </div>
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
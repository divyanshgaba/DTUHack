<?php
	session_start();
	if($_SESSION['register']=="patient")
	{
	include 'assets/php/conn.php';
	include "assets/php/functions.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		APPOINTMENT
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
  
   <script type="text/javascript">
		function val(){
		
		if(!((frm.phone.value).length == 10))
		{
			alert("Phone number should be of 10 digits");
			frm.phone.focus(); 
			return false;
		}
		if(!((frm.identitytype.value) == "Adhar Card Number(ACN)"))
		{
			if(!((frm.identityvalue.value).length == 6))
			{
				alert("Invalid Adhar Card Number(ACN)");
				frm.phone.focus(); 
				return false;
			}
		}		
		if(!((frm.identitytype.value) == "Driving Licence Number(DLN)"))
		{
			if(!((frm.identityvalue.value).length == 6))
			{
				alert("Invalid Driving Licence Number(DLN)");
				frm.phone.focus(); 
				return false;
			}
		}
		return true;
		}
	</script>
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
            APPOINTMENT 
          </h1>
        </div>
      </div>
    </div>
	<?php
		$id=$_SESSION['id'];
		$sql="select * from patient where id= '$id'";
		$res=mysql_query($sql);
		$row=mysql_fetch_assoc($res);
	?>
	<div class="col-md-6 col-md-offset-3">
		<div class="respond">
			<h3>APPOINTMENT FORM</h3>
			<form action="emersubmit.php?type=appointment" method="post" name="frm" class="form-horizontal">
				<div class="form-group">
					<div class="col-md-5">
						<?php echo "<input class='form-control' name='Name' id='author' value='".$row['name']."' type='text' placeholder='".$row['name']."'  required />"; ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-5">
						<?php echo "<input class='form-control' name='Email' id='author' value='".$row['email']."' type='email' placeholder='".$row['email']."' required />"; ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-5">
						<?php echo "<input class='form-control' name='dob' id='author' value='".$row['dob']."' type='date' placeholder='".$row['dob']."' required />"; ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-5">
						<?php echo "<input class='form-control' name='phone' id='author' value='".$row['phone']."' type='text' placeholder='".$row['phone']."' required />"; ?>
					</div>
				</div>
				<div class="form-group">
					<div class="form inline">
						<div class="col-sm-3">
							<?php 
								if($row['gender']=="male")
									echo "<input name='gender' value='male' type='radio' checked />Male"; 
								else
									echo "<input name='gender' value='male' type='radio' />Male";
							?>
						</div>
						<div class="col-sm-3">
							<?php 
								if($row['gender']=="female")
									echo "<input name='gender' value='female' type='radio' checked />Female"; 
								else
									echo "<input name='gender' value='female' type='radio' />Female";
							?>
						</div>
						<div class="col-sm-3">
							<?php 
								if($row['gender']=="other")
									echo "<input name='gender' value='other' type='radio' checked />Other"; 
								else
									echo "<input name='gender' value='other' type='radio' />Other";
							?>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12" >
						<b> Select one of the following to give the proof that you are the citizen of <strong>INDIA</strong></b>
					</div>
					<div class="col-xs-6 col-sm-5">
						<select name="identitytype" class="form-control">
							<?php echo "<option value='".$row['identitytype']."'>".$row['identitytype']."</option>"; ?>
							<option value="Adhar Card Number(ACN)">Adhar Card Number(ACN)</option>
							<option value="Driving Licence Number(DLN)">Driving Licence Number(DLN)</option>
						</select>
					</div>
					<div class="col-xs-6 col-sm-3">
						<?php echo "<input class='form-control' name='identityvalue' value='".$row['identityvalue']."' type='text' placeholder='".$row['identityvalue']."' required />"; ?>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-xs-6 col-sm-3" >
					<b> Select your Symptoms</b>
					</div>
					<div class="col-xs-6 col-sm-5">
						<select name="symptoms" class="form-control">
							<option value = "fever">fever</option>
							<option value = "chest pain">chest pain</option>
							<option value = "headache">headache</option>
							<option value = "chillstoothache">chillstoothache</option>
							<option value = "dizziness">dizziness</option>
							<option value = "nauseated">nauseated</option>
							<option value = "sea sickness">sea sickness</option>
							<option value = "cold">cold</option>
							<option value = "short of breath">short of breath</option>
							<option value = "weakness">weakness</option>
							<option value = "blindness">blindness</option>
							<option value = "blurred vision">blurred vision</option>
							<option value = "double vision">double vision</option>
							<option value = "cachexia">cachexia</option>
							<option value = "fatigue">fatigue</option>
							<option value = "jaundice">jaundice</option>
							<option value = "pyrexia">pyrexia</option>
							<option value = "nausea">nausea</option>
							<option value = "abdominal pain">abdominal pain</option>
							<option value = "bruising">bruising</option>
							<option value = "tremor">tremor</option>
							<option value = "muscle cramps">muscle cramps</option>
							<option value = "hypothermia">hypothermia</option>
							<option value = "hyperthermia">hyperthermia</option>
							<option value = "noise bleeding">noise bleeding</option>
							<option value = "vomiting">vomiting</option>
							<option value = "diarrhea">diarrhea</option>
							<option value = "anorexia">anorexia</option>
							<option value = "constipation">constipation</option>
							<option value = "anxiety">aniety</option>
							<option value = "anomia">anomia</option>
							<option value = "paralysis">paralysis</option>
							<option value = "faint">faint</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12">
						<textarea class="form-control input-lg" name="comment" rows="4" placeholder="Decription/Additional Allergies" fixed></textarea>
					</div>
				</div>
				
				<p onclick="getLocation()" >Click here to access your location.
					<input type="text" id="locateradio"  value="" required >
				</p>
				<p class="demo"></p>
				<input type="hidden" name="lat" value="" id="lat">
				<input type="hidden" name="long" value="" id="long">
				

				<script type="text/javascript">
				var x = document.getElementById("demo");

				function getLocation() {
					if (navigator.geolocation) {
						navigator.geolocation.getCurrentPosition(showPosition);
					} else { 
						x.innerHTML = "Geolocation is not supported by this browser.";
					}
				}

				function showPosition(position) {
					
				  document.getElementById("lat").value = position.coords.latitude;
				  document.getElementById("long").value = position.coords.longitude;
				  document.getElementById("locateradio").value = "Location Enabled ";
				}

				</script>
				
				<div class="form-group">
					<div class="col-md-12">
						<button class="btn btn-common" onclick="return val();" type="submit">Submit</button><br /><br/><br/>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<footer style="backgroound-color:#333; padding:30px 110px; position:absolute; bottom:-400px; width:100%;">
		<p>DOCTOR VECTOR</p>
		<a href="contactus.php">CONTACT US</a>
	</footer>
    
  </body>
</html>
<?php
	}
	else{
		header('location:sign.php');
	}
?>
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
  
  
	<div class="container" style="margin:0 0 0 25%;width:1000px">
	
	<?php
	 if (!isset($_GET["state"])or empty($_GET["state"])) 
	  {
		  $state="";
	  }
	 else {
          $state=$_GET["state"];
	 }
	 
	  if (!isset($_GET["page"])or empty($_GET["page"])) 
	  {
		  $page=0;
		  
		 $pagenav=0;
		  $count=1 ; 
	  }
	 else {
          $page=$_GET["page"]-1;
		  
		  $pagenav=($page*10);
		   $count=$pagenav +1 ; 
	 }
	  
	  if (!isset($_GET["search"])or empty($_GET["search"])) 
	  {
		  $search="" ; 
	  }
	 else {
          $search=$_GET["search"]; 
	 }
$search = mysql_real_escape_string($search);
$state = mysql_real_escape_string($state);
		if(empty($search))
		{
        $sqlt="select * from hospital where state like '%$state%' limit ".$pagenav.",10";// limit from,length 
		$sqlc="select * from hospital where state like '%$state%' ";
		
		}
		else if(!empty($search))
		{
			 $sqlt="select * from hospital where state like '%$state%' and (name like '%$search%' or 
			 specialties like  '%$search%' or hospitalcategory like'%$search%' or medi like'%$search%') limit ".$pagenav.",10";
			 
		     $sqlc="select * from hospital where state like '%$state%' and (name like '%$search%' or 
			 specialties like  '%$search%' or hospitalcategory like'%$search%' or medi like'%$search%') ";
			
		}
		
		$rest=mysql_query($sqlt) ;
        $resc=mysql_query($sqlc) ;

		$totalcount=mysql_num_rows($resc) ;
        
		$url=$_SERVER['REQUEST_URI'];
	   if(!empty($search)){
echo '<p style="font-size:230%" >Search Result for  <mark>'.$search.'/ </mark> <a href="search.php?state='.$state.'"> &nbsp&nbsp&nbsp&nbsp<button class="btn btn-warning .btn-md">  clear search</button></a> </p>';}
	
	?>
	
	
	
	
	<div >
	<ul class="pagination  pagination-lg" >
  <?php
          
  if ($totalcount>10)
	  
  {
	 if($page>0)
	 {	
	 echo'<li class="active"><a href="'.$url.'&page=1">Start</a></li>';
	 echo'<li><a href="'.$url.'&page='.($page).'">Previous</a></li>';
	 }
	 else if ($page==0){echo'<li><a href="#">Previous</a></li>';}
	  $ab=intval($totalcount/10);
	 if($ab<10 and ($ab%10==0))
	 {$len=$ab;}
	if($ab<10 and ($ab%10!=0))
	 {$len=$ab+1;}
	else{$len=9;}
	// echo $ab;
	 //echo $page;
	 
if($page<$ab-10 )

{
	$start=$page;
}
else if($page>=$ab-13 and ($ab-13>0))
{
	$start=$ab-13;
}
else if($ab<10){$start=1;}
if($start==0){$start=1;}
  for($i=$start,$l=1;$i<=$ab,$l<=$len;$i++,$l++)
  {
	  
	   if($page+1==$i){$class='class="active"';}
		
	  else{$class='class=""';}
	  
	  echo '<li '.$class.'><a href="'.$url.'&page='.($i).'">'.($i).'</a></li>';
  }

  
  
 if($ab>10){  
  for(  $i=$ab-1,$l=1;$i<=$ab+1,$l<=3;$i++,$l++)
  {
	  if($page+1==$i){$class='class="active"';}
	  else{$class='class=""';}
	  
	  echo '<li '.$class.'><a href="'.$url.'&page='.($i).'">'.$i.'</a></li>';
 }}
  
	 if($page<$ab and $ab>10)
	 {		 
	 echo'<li class="active"><a  href="'.$url.'&page='.($page+2).'">Next</a></li>';
	 }
	 else{echo'<li><a href="#">Next</a></li>';}
  
  
  }?>
  
</ul>
</div>
</div>


<div class="container">
	<div class="row" >
	<div class ="col-md-4">
		    <div class="sidebar" style="position:relative ;margin-top:-10%;margin-bottom:10%">
              
              <div class="popular-post widget">
			 
                <h3 class="widget-title">LOCATION TAGS</h3>
                <ul >
				<?php 	
						$sql2="select distinct state from hospital  ";
						$res2=mysql_query($sql2);
							
							echo '<li ><h5><a href="search.php?state=&search='.$search.'">All over India(1047)</a></h5></li>';
							
						while($row2=mysql_fetch_assoc($res2))
							{                
							echo '<li ><h5><a href="search.php?state='.$row2["state"].'&search='.$search.'">'.$row2["state"].'('.totalhopital($row2["state"]).')</a></h5></li>';
				?>

                 
				<?php }?>
                </ul>
              </div>
              
             
              
              
            </div>
		</div>
		<div class="col-md-8 " >
		
	  <?php

	 if( mysql_num_rows($rest)>0)
			{
	   while($row=mysql_fetch_assoc($rest))
        {
			
	?>
        
		
		
            <div class="post" style="margin-left:1%">
            <div class="heading">
              <h3 class="small-title">
               <?php
			 
					echo '('.$count.')'. $row["name"];
			   ?>
              </h3>
            
			
			 
               <?php
			   
					echo "<b>Address : </b>".$row["address_First_Line"].",",$row["district"].",".$row["state"]." - ".$row["pincode"]."";
					echo "<br/><strong>Hospital Type : </strong>".$row["hospitalcategory"];
					echo "<br/><b>Specialities : </b>".$row["specialties"]."";
					echo "<br/><b>Medicine Type :</b> ".$row["medi"]."";
					echo "<br/><b>Facilities :</b> ".$row["facilities"]."";
					echo "<br/><b>Website : </b><a href=".$row["website"]." target=_blank >".cut_sentence($row["website"],30)."</a>"."";
					echo "<br><b>Telephone : </b>".$row["telephone"]."";
					echo "<br><b>Email ID : </b>".$row["hospitalprimaryemailid"]."";
					if($row["totalnumofbeds"]=="NA")
						echo "<br/><b>Beds Avalaible : </b>10";
					else
						echo "<br/><b>Beds Avalaible : </b>".$row["totalnumofbeds"]."";
					 $count++
			   ?>
              
           
          </div>
           </div>
          <br>

	<?php
			}
			
		}else{echo '<p style="font-size:300%">No Result Found</p>';}
		
	?>
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
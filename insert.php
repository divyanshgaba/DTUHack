<?php
	include "assets/php/conn.php";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$phone=$_POST["phone"];
	$itype=$_POST["identitytype"];
	$ano=$_POST["identityvalue"];
	$password=md5($_POST["password"]);	
	$pid=uniqid();
	$sql1="select * from patient where email='$email'";
	$rse1=mysql_query($sql1);
	$count=mysql_num_rows($rse1);
	if($count>0)
	{
		header('location:sign.php?emailinvalid=1');
	}

	$sql2="select * from patient where phone='$phone'";
	$rse2=mysql_query($sql2);
	$count1=mysql_num_rows($rse2);
	if($count1>0)
	{
		echo $count;
		header('location:sign.php?phoneinvalid=1');
	}

	$sql2="select * from patient where identityvalue='$ano' and identitytype='$itype'";
	$rse2=mysql_query($sql2);
	$count2=mysql_num_rows($rse2);	
	if($count2>0)
	{
		if($itype=="Adhar Card Number(ACN)")
		{
			header('location:sign.php?acninvalid=1');
		}
		if($itype=="Driving Licence Number(DLN)")
		{
			header('location:sign.php?dlninvalid=1');
		}
	}
	
	if(($count==0)&&($count1==0)&&($count2==0))
	{
		$sql="INSERT INTO patient values('','$name','$phone','$itype','$ano','$pid','$password','$email','$email','$dob','$gender','','','')";
		$res=mysql_query($sql);
		if(!$res)
		{
			die("PLEASE FILL THE DATA PROPERLY");
		}
		if($res)
		{
			header('location:index.php');
		}
	}
?>
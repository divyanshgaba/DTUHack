<?php
	include "assets/php/conn.php";
	session_start();
	
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$user=$_POST['user'];
	
	if(!strcmp($user,"patient"))
	{	
		$pass=md5($pass);
		$sql="select * from patient where email='$email' and password='$pass'";
		$result=mysql_query($sql);
		$row=mysql_fetch_assoc($result);
		$count=mysql_num_rows($result);
		if($count==1)
		{
			$_SESSION['register']='patient';
			$_SESSION['id']=$row['id'];
			header('location:index.php');
		}
		else
		{
			die(header('location:Sign.php?loginfailed=1'));
		}
	}
	else if(!strcmp($user,"hospital"))
	{
		$sql="select * from hospital where hospitalprimaryemailid='$email' and password='$pass'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$count=mysql_num_rows($result);
		if($count==1)
		{
			$_SESSION['register']="hospital";
			$_SESSION['hospitalid']=$row['id'];
			header('location:hospital_panel.php');
		}
		else
		{
			die(header('location:Sign.php?loginfailed=1'));
		}
	}	
?>
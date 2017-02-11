<?php

include 'conn.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$state=$_POST['state'];
	$beds=$_POST['totalnumofbeds'];
	$addr=$_POST['address'];
	$district=$_POST['district'];
	$state=$_POST['state'];
	$pincode=$_POST['pincode'];
	$category=$_POST['category'];
	$web=$_POST['website'];
	$telephone=$_POST['telephone'];
	$facilities=$_POST['facilities'];
	$id=$_SESSION['hospitalid'];

	$sql ="update hospital set name='$name',hospitalcategory='$category',address_First_Line='$addr',state='$state',district='$district',pincode='$pincode',telephone='telephone',hospitalprimaryemailid='$email',totalnumofbeds='$beds',website='$web',facilities='$facilities' where  id='id'";
	$res=mysql_query($sql);

	header('location:hospital_profile.php');
?>
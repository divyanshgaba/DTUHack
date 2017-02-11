<?php
	include 'conn.php';
	$time=$_POST['time'];
	$date=$_POST['date'];
	$submit=$_POST['submit'];
	$pid=$_POST['pid'];   
	echo $submit;
	if($submit=="CANCEL"){
		$sql="update appointment set status='cancelled',approvedate='$date',approvetime='$time' where pid='$pid'";
		$res=mysql_query($sql);
	}
	header('location:hospital_panel.php');
?>
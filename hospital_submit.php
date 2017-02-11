<?php
	include 'conn.php';
	$time=$_POST['time'];
	$date=$_POST['date'];
	$submit=$_POST['submit'];
	$pid=$_POST['pid'];   
	echo $submit;
	if($submit=="APPROVE"){
		$sql="update appointment set status='approved',approvedate='$date',approvetime='$time' where pid='$pid'";
		echo "asdas";
		$res=mysql_query($sql);
	}
	if($submit=="CANCEL"){
		$sql="update appointment set status='cancelled' where pid='$pid'";
		$res=mysql_query($sql);
	}
	if($res){
		echo $sql;
	}
	header('location:hospital_panel.php');
?>
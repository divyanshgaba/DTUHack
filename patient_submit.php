<?php
	include 'conn.php';
	$submit=$_POST['submit'];
	$pid=$_POST['pid'];   
	
	if($submit=="APPROVE"){
		$time=$_POST['time'];
		$date=$_POST['date'];	
		$sql="update appointment set status='approve',approvedate='$date',approvetime='$time' where pid='$pid'";
		
		$res=mysql_query($sql);
	}
	if($submit=="REJECT"){
		$reason=$_POST["reject"];
		$sql="update appointment set status='reject',reason='$reason' where pid='$pid'";
		$res=mysql_query($sql);
		if($res)
	{
		echo "done";
	}
	}
	
header('location:hospital_panel.php');
?>
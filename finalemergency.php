<?php
include 'assets/php/conn.php';
include "assets/php/functions.php";

$hospitalid=$_POST["hospital"];


session_start();
$pid=$_SESSION["logined"] ;
if (function_exists('date_default_timezone_set'))
{
  date_default_timezone_set('Asia/Kolkata');
}

$time =date('h-i-sa');
if (function_exists('date_default_timezone_set'))
{
  date_default_timezone_set('Asia/Kolkata');
}

$date =date('d/m/y');

$sql="update appointment set did='Emergency',status='pending', hid='$hospitalid',approvetime='$time',approvedate='$date' where pid='$pid'"; 
$res=mysql_query($sql)or die;
if($res)
{
    header("location:reciept.php?pid=$pid&hid=$hospitalid");
}





?>
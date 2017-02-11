<?php
session_start();
include 'conn.php';
$pid=$_SESSION['id'];
$hash=uniqid();
$g=$_FILES['attachement'];
$name=$g['name'];
$type=$g['type'];
$size=$g['size'];


$sql1="insert into attachement values('','$pid','$name','$type','$size','','$hash')";
$res1=mysql_query($sql1);
//echo basename($_FILES["attachement"]["name"]);
move_uploaded_file($g['tmp_name'],'upload/'.$name);
header("location:patient_profile.php");
?>
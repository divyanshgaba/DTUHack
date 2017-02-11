<?php
include 'assets/php/conn.php';
include "assets/php/functions.php";

$name=$_POST["Name"];
$email=$_POST["Email"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$identitytype=$_POST["identitytype"];
$identityvalue=$_POST["identityvalue"];
$symptoms=$_POST["symptoms"];
$comment=$_POST["comment"];
$lat=$_POST["lat"];
$lng=$_POST["long"];
date_default_timezone_set("Asia/Kolkata");
$time= date("h:i:sa");
$date= date("d-m-Y ");
$pass=md5($phone);
$pid=uniqid();
$type=$_GET['type'];

if($lat!="") {
    $sql1="insert into appointment(pid,issue,discription,applicationtime,applicationdate) 
		values('$pid','$symptoms','$comment','$time','$date')";
    $res1=mysql_query($sql1);

    $url = sprintf("https://maps.googleapis.com/maps/api/geocode/json?latlng=%s,%s", $lat, $lng);

    $content = file_get_contents($url); // get json content

    $metadata = json_decode($content, true); //json decoder

    if(count($metadata['results']) > 0) {
        // for format example look at url
        // https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452
        $result = $metadata['results'][0];

        // save it in db for further use
       $add= $result['formatted_address'];

    }

$sql="insert into patient(pid,name,phone,identitytype,identityvalue,password,userid,email,lat,lng,address,gender,dob) 
	values('$pid','$name','$phone','$identitytype','$identityvalue','$pass','$email','$email','$lat','$lng','$add','$gender','$dob')";
$res=mysql_query($sql);
if($res){
	session_start();
	$_SESSION["logined"] = $pid;
	$_SESSION["lat"] = $lat;
	$_SESSION["lng"] = $lng;

	header("location:selecthospital.php" );
}

}


?>
<?php
	function err($errmsg){
		echo $errmsg."<br />";
		echo "Please go back and fix these errors.<br /><br /><FORM><INPUT TYPE=\"button\" VALUE=\"Back\" class=\"submit_small\" onClick=\"history.go(-1);return true;\"></FORM>";
	}
	$msgerr='';
	if(isset($_GET['id'])){
		$gid = mysql_real_escape_string($_GET['id']);
	}
	
	// this function will cut the string by how many words you want
function word_teaser($string, $count){
  $original_string = $string;
  $words = explode(' ', $original_string);
 
  if (count($words) > $count){
   $words = array_slice($words, 0, $count);
   $string = implode(' ', $words);
  }
 
  return $string;
}
 
// sentence reveal teaser
// this function will get the remaining words
function word_teaser_end($string, $count){
 $words = explode(' ', $string);
 $words = array_slice($words, $count);
 $string = implode(' ', $words);
  return $string;
}
function convert_year($yr){
	switch($yr)
	{
		case 1:	$yr=$yr.'st';	break;
		case 2:	$yr=$yr.'nd';	break;
		case 3:	$yr=$yr.'rd';	break;
		case 4:	$yr=$yr.'th';	break;
		default:	break;
	}
  return $yr;
}

//collect member info by memberid
include "conn.php";
function selectuserinfo($id)
{
$pwQuery =  "SELECT * FROM patient WHERE pid='$id'";
		$pwQry_result =mysql_query($pwQuery) or die(mysql_error());
	    $pwRow = mysql_fetch_assoc($pwQry_result);
		return $pwRow;
		
}

//sig data function
function sigdata($id)
{
$pwQuery ="SELECT * FROM sig WHERE id='$id'";
		$pwQry_result = mysql_query($pwQuery) or die(mysql_error());
	    $pwRow = mysql_fetch_assoc($pwQry_result);
		return $pwRow;
		
}


//voluteer of the month $id=month number 
function memofmonth($id)
{
$pwQuery ="SELECT * FROM volofmonth WHERE id='$id'";
		$pwQry_result = mysql_query($pwQuery) or die(mysql_error());
	    $pwRow = mysql_fetch_assoc($pwQry_result);
		 $memberid=$pwRow["memid"];
		return  selectuserinfo($memberid)["name"];
		
}
//recent testimonials $id=number 1-5
function testimonial($id)
{
$pwQuery =  "SELECT * FROM testimonials WHERE id='$id'";
		$pwQry_result = mysql_query($pwQuery) or die(mysql_error());
	    $pwRow = mysql_fetch_assoc($pwQry_result);
		return $pwRow;
		
}


// encryption and decryption
function encrypt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      =base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5($cryptKey))) );
    return($qEncoded);
}

function decrypt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}




//blog details
function blogdetail($id)
{
$pwQuery ="SELECT * FROM blog WHERE id='$id'";
		$pwQry_result = mysql_query($pwQuery) or die(mysql_error());
	    $pwRow = mysql_fetch_assoc($pwQry_result);
		 return $pwRow;
		
		
}

//latest blog
function blog_latestdetail()
{
$pwQuery ="select * from blog order by id  desc";
		$pwQry_result = mysql_query($pwQuery) or die(mysql_error());
	    $pwRow = mysql_fetch_assoc($pwQry_result);
	return $pwRow["id"];
		
		
}

///total likes dislikes
function bloglikes($postid,$arg)
{

	$sql="select * from blog_likes where blogid='$postid' and type='$arg'  ";
    $res=mysql_query($sql);
    $count=mysql_num_rows($res);
    return $count;

}

///total hospitals
function totalhopital($state)
{

	$sql="select * from hospital where state='$state'";
    $res=mysql_query($sql);
    $count=mysql_num_rows($res);
    return $count;

}

function cut_sentence($string,$length)
{

if (strlen($string) > $length) {
$trimstring = substr($string, 0, $length). ' [...]';
} else {
$trimstring = $string;
}
return $trimstring;
}

function distancematrix($origin,$destination)

{
$start = urlencode($origin);
$end = urlencode($destination);
$key="AIzaSyAJNFyyVlgjAh2BzZNntdHIYZEDhcBsRSc";
$url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins={$start}&destinations={$end}&mode=driving&language=English-en&key=$key";
	

    $content = file_get_contents($url); // get json content

    $metadata = json_decode($content, true);
	if($content){
echo  ($metadata['rows'][0]['elements'][0]['distance']['value']/1000).' km,  ';
echo  $metadata['rows'][0]['elements'][0]['duration']['text'].'<br>';
		
	
}
}




?>
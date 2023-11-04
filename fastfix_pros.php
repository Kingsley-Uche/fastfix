<?php

require 'direct.php';
if ($_POST){
	


$firstname= strtolower($_POST["name"]);
$lastname= strtolower($_POST["lastname"]);
$username= strtolower($_POST["usr_name"]);
$user_type=strtolower($_POST['type']);
$password= strtolower($_POST["pass"]);
$address=strtolower($_POST["add"]);
$phone=strtolower($_POST["phone"]);
$email=strtolower($_POST["mail"]);}
$token ="asdefghA#SEFGHTYUE0(;')OONCBBMDIuiN12938303*";
$token=str_shuffle($str);
$token= substr($str,0,13);
$confirmed ='0';

if($user_type=="service"){

$child = new retrieve;
$child->load($firstname, $lastname,$email,$phone,$username,$password,$address,$token,$confirmed);
}elseif($user_type=='artisan'){
	$babe=new retrieve;
	$babe->art($firstname, $lastname,$email,$phone,$username,$password,$address,$token,$confirmed);
}else{echo '<p>Please select an option</p>';}





?>
\xbf\x27 OR 1=1 /*
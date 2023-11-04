<?php
session_start();


require'logz_pro.php';


if($_POST){

$user = trim(strtolower($_POST["usr_name"]));
$password =trim(strtolower($_POST["pwd"]));
$type=$_POST['category'];
$_SESSION['type']=$type;
$uche = new receipt;


if($user==''||$password==''){
	$error="<div class='alert alert-danger'>**Please fill the needed fields**</div>";
	header("location:log_out.php?err=$error");
}

else if($type=='customer'){
$uche->check($user,$password);




}else if( $type=='artisan'){//This code authenticates user from database
$uche->art($user,$password);
$data=$uche->fetch_art($user,$password);
//print_r($data);
}//else{header('location:log.php');
	//   echo ('incorrect username  or password');}
//	}
}else{header('location:log.php');}
?>
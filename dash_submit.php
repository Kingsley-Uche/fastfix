<?php session_start();
require 'direct.php';


if($_POST){
	$job_id=$_POST['job_id'];
	$artisan=$_POST['handy'];
	
$obj= new retrieve;


$obj->artisan_apply($job_id,$artisan);

}




?>
<?php
session_start();
	session_destroy();


	$error='<div><p style="color:red">invalid username or password</p></div>';
	header('location:log.php?err=$error');




?>
<?php
	include_once '../model/db.php';
	$email =$_REQUEST['email'];
	$pass = $_REQUEST['password'];
	$con = db_connect();
	$condition="`email`='".$email."' AND `password`='".$pass."'";
	$selected_row = select('*', '`sigi_login`',$condition, $con);
	if ($selected_row == "empty") {
		 echo "error";
	}else{
		echo "success";
	}
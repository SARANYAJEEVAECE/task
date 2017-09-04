<?php 
	include_once '../model/db.php';
	include_once '../model/curd_operations.php';
	$firstname = $_REQUEST['first_name'];
	$email = $_REQUEST['email'];
	$phonenumber = $_REQUEST['phone_number'];
	$city = $_REQUEST['city'];
	$companyname= $_REQUEST['company_name'];
	$jobtitle=$_REQUEST['job_title'];
	$con = db_connect();
	$result = insert('`task`',array('first_name','email','phone_number','city','company_name','job_title'),array($firstname,$$email,$phonenumber,$city,$companyname,$jobtitle),$con);
	if ($result == 'inserted') {
		// echo "inserted";
		header('location:../view/task.php');
	}else{
		echo "error";
	}
	
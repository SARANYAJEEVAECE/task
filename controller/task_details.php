<?php 
	include_once '../model/db.php';
	include_once '../model/curd_operations.php';
	$name = $_REQUEST['name'];
	$task = $_REQUEST['task'];
	$startdate = $_REQUEST['start_date'];
	$deadline = $_REQUEST['deadline'];
	$con = db_connect();
	$result = insert('`task_detail`',array('name','task','start_date','deadline'),array($name,$task,$startdate,$deadline),$con);
	if ($result == 'inserted') {
		// echo "inserted";
		// header('location:../view/task.php');
	}else{
		echo "error";
	}
	
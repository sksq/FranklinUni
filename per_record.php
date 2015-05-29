<?php

require 'functions.php';
session_start();

$rollno = $_SESSION['rollno'];
$conn = connect($config);

if($conn)
{
	$row = query(
		"SELECT cname FROM course,studies where studies.c_code = course.c_code && studies.rno = :rollno",
		array('rollno' => $rollno),
		$conn);

	// die(print_r($row));
}	

if( $_SERVER['REQUEST_METHOD'] == 'POST')
{
	if( isset($_POST['enroll']) )
	{	
		$conn = connect($config);

		if ( $conn )
		{

			foreach ($row as $key => $value) {
				# code...
				
				insert(
					"INSERT into grades VALUES(:rollno,:value,:psst)",
					array(
						'rollno' => $rollno,
						'value'	 => $value[0],
						'psst'	 => $_POST[$value[0]]),
					$conn);
			}
			header('Location: per.success.php');
		}
	}
}

require 'per_record.temp.php';

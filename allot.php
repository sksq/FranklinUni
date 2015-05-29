<?php

require 'functions.php';
session_start();

if( $_SERVER['REQUEST_METHOD'] == 'POST')
{
	$fname 		= $_POST['fname'];
	$lname 		= $_POST['lname'];
	$rollno  	= (int)$_POST['rollno'];
	$course		= (int)$_POST['course'];

	// die("hey man;");

	if( isset($_POST['allot']) )
	{	
		$conn = connect($config);

		// die("Yo buddy");

		if ( $conn ) 
		{
			insert(
				"INSERT INTO studies VALUES(:rollno,:course)",
				array(
					'rollno' 		 =>   $rollno,
					'course' 		 =>   $course
					),
				$conn);

			header('Location: allot.success.php');
		}

		else echo "Invalid Input";


/*		elseif ($conn && isset($roll)) 
		{
			$row = query("SELECT * FROM student WHERE rollno = :roll",
				array('roll' => $roll),
				$conn)[0];

			$_SESSION['row'] = $row;
			header('Location: student_detail.php');
		}
*/

	}

	else die("esle :( ");
}

require 'allot.temp.php';

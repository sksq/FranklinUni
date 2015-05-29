<?php

require 'functions.php';
session_start();

if( $_SERVER['REQUEST_METHOD'] == 'POST')
{
	$fname 		  =   $_POST['fname'];
	$lname 		  =   $_POST['lname'];
	$father_name  =   $_POST['father_name'];
	$mother_name  =   $_POST['mother_name'];
	$rollno  	  =   (int)$_POST['rollno'];
	$address 	  =   $_POST['address'];
	$prog_study   =   $_POST['prog_study'];
	$year_of_enr  =   (int)$_POST['year_of_enrollment'];
	$sname 		  =   $_POST['sname'];

	if( isset($_POST['enroll']) )
	{	
		$conn = connect($config);

		if ( $conn ) 
		{
			insert(
				"INSERT INTO student VALUES(:fname,:lname,:father_name,:mother_name,:rollno,:address,:prog_study,:year_of_enr,:current,:sname)",
				array(
					'fname' 		 =>   $fname, 
					'lname' 		 =>   $lname,
					'father_name' 	 =>   $father_name,
					'mother_name' 	 =>   $mother_name,
					'rollno' 		 =>   $rollno,
					'address' 		 =>   $address,
					'prog_study' 	 =>   $prog_study,
					'year_of_enr' 	 =>   $year_of_enr,
					'current' 		 =>   2014, 
					'sname'	 		 =>   $sname
					),
				$conn);

			header('Location: enroll.success.php');
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
}

require 'enroll.temp.php';
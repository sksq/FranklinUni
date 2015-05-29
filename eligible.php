<?php

require 'functions.php';
session_start();

if( $_SERVER['REQUEST_METHOD'] == 'POST')
{
	$rollno = (int)$_POST['rollno'];

	if( isset($_POST['enroll']) )
	{	
		$conn = connect($config);

		if ( $conn )
		{
			$min_grade = query(
					"SELECT minGrade from course,studies where studies.c_code = course.c_code AND studies.rno = :rollno  ORDER BY course.cname",
					array('rollno' => $rollno),
					$conn);

			// die(print_r($min_grade));


			$grade = query(
					"SELECT grade from grades,student where student.rollno = grades.rollnum AND grades.rollnum = :rollno ORDER BY grades.course",
					array('rollno' => $rollno),
					$conn);

			// die(print_r($grade));

			$i = 0;
			foreach ($min_grade as $key => $value)
			{
				# code...
				$min[$i] = $value[0] ;
				$i++;
			}

			$i = 0;
			foreach ($grade as $key => $value)
			{
				# code...
				$gr[$i] = $value[0] ;
				$i++;
			}

			$i = 0;
			foreach ($min_grade as $key => $value) 
			{
				# code...

				if(ord($min[$i]) > ord($gr[$i]) )
				{	
					// Do nothing
				}

				else 
				{
					$_SESSION['$min[$i]'] = $min[$i];
					$_SESSION['$gr[$i]'] = $gr[$i];

					header("Location: fail.php");
					die();
				}	
				$i++;
			}

			header("Location: pass.php");
			die();
			

			
		}

	}
}

require 'eligible.temp.php';

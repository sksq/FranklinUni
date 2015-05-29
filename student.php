<?php

require 'functions.php';
session_start();

if( $_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name = $_POST['name'];
	$roll = (int)$_POST['roll'];

	if( isset($_POST['detail']) )
	{
		$conn = connect($config);

		if ( $conn && isset($name) ) 
		{
			
			// $id = isset($_GET['id']) ? (int)$_GET['id'] : 25;

			$row = query(
				"SELECT * FROM student WHERE fname = :name",
				array('name' => $name),
				$conn)[0];

			$_SESSION['row'] = $row;
			header('Location: student_detail.php');

			// die();

			// foreach($row as $key)
			// {

			// 	echo "$key";
			// 	echo "value";
			// 	# code...
			// }
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

require 'student.temp.php';

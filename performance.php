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

			$_SESSION['rollno'] = $rollno;
			header('Location: per_record.php');
		}

	}
}

require 'performance.temp.php';

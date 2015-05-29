<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>FranklinUni</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Custom CSS -->
	<link href="css/heroic-features.css" rel="stylesheet">

	<style type="text/css">
		body, html {
			overflow: hidden;
		}
	</style>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">FranklinUni</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="enroll.php">Enroll</a>
						</li>
						<li>
							<a href="allot.php">Allot</a>
						</li>
						<li>
							<a href="eligible.php">Eligibility</a>
						</li>
						<li>
							<a href="student.php">Student</a>
						</li>						
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<!-- Page Content -->
		<div class="container">
			<form class="form-horizontal" method="post">
				<fieldset>
					<legend>Check Eligibitly</legend>

					<br/><br/>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="fname">First name</label>  
						<div class="col-md-4">
							<input id="fname" name="fname" type="text" placeholder="first name" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="lname">Last Name</label>  
						<div class="col-md-4">
							<input id="lname" name="lname" type="text" placeholder="last name" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="rollno">Roll No.</label>  
						<div class="col-md-4">
							<input id="rollno" name="rollno" type="text" placeholder="roll no." class="form-control input-md" required="">

						</div>
					</div>

					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="enroll"></label>
						<div class="col-md-4">
							<button id="enroll" name="enroll" class="btn btn-primary">Check >></button>
						</div>
					</div>





				</div>
				<!-- /.container -->

				<!-- jQuery Version 1.11.0 -->
				<script src="js/jquery-1.11.0.js"></script>

				<!-- Bootstrap Core JavaScript -->
				<script src="js/bootstrap.min.js"></script>

			</body>

			</html>

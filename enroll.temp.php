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

			<!-- Jumbotron Header -->
			<form class="form-horizontal" method="post">
				<fieldset>

					<!-- Form Name -->
					<legend>Student Enrollment Form</legend>

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
						<label class="col-md-4 control-label" for="father_name">Father's Name</label>  
						<div class="col-md-4">
							<input id="father_name" name="father_name" type="text" placeholder="father's name" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="mother_name">Mother's Name</label>  
						<div class="col-md-4">
							<input id="mother_name" name="mother_name" type="text" placeholder="mother's name" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="rollno">Roll No.</label>  
						<div class="col-md-4">
							<input id="rollno" name="rollno" type="text" placeholder="roll no." class="form-control input-md" required="">

						</div>
					</div>

					<!-- Textarea -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="address">Address</label>
						<div class="col-md-4">                     
							<textarea class="form-control" id="address" name="address"></textarea>
						</div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="prog_study">Program of Study</label>
						<div class="col-md-4">
							<select id="prog_study" name="prog_study" class="form-control">
								<option value="B-Tech">B-Tech</option>
								<option value="BA">B.A.</option>
								<option value="M-Tech">M-Tech</option>
								<option value="MBBS">MBBS</option>
							</select>
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="year_of_enrollment">Enrollment Year</label>  
						<div class="col-md-4">
							<input id="year_of_enrollment" name="year_of_enrollment" type="text" placeholder="enrollment year" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="sname">Stream</label>
						<div class="col-md-4">
							<select id="sname" name="sname" class="form-control">
								<option value="Arts_n_Humanities">Arts and Humanities</option>
								<option value="Engg_sciences">Engg. Sciences</option>
								<option value="Medical_sciences">Medical Sciences</option>
								<option value="Social_sciences">Social Sciences</option>
							</select>
						</div>
					</div>

					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="enroll"></label>
						<div class="col-md-4">
							<button id="enroll" name="enroll" class="btn btn-primary">Enroll</button>
						</div>
					</div>

				</fieldset>
			</form>


			<!-- Footer -->
			<!-- <footer>
				<div class="row">
					<div class="col-lg-12">
						<p>Copyright &copy; shubhamChandel 2014</p>
					</div>
				</div>
			</footer> -->

		</div>
		<!-- /.container -->

		<!-- jQuery Version 1.11.0 -->
		<script src="js/jquery-1.11.0.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

	</body>

	</html>

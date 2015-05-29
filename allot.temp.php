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
					<legend>Course Allotment Form</legend>

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

					<!-- <div class="row"> -->
					<!-- <h2>Multiple fields contact form</h2> -->

					<!-- <div class="form-group">
						<label class="col-md-4 control-label" for="course">Course</label>  
						<div class="col-md-4">
							

							<div class="contacts">

								<div class="form-group multiple-form-group input-group">
									<div class="input-group-btn input-group-select">
										
										<input type="hidden" class="input-group-select-val" name="contacts['type'][]" value="phone">
									</div>
									<input type="text" name="contacts['value'][]" class="form-control">
									<span class="input-group-btn">
										<button type="button" class="btn btn-success btn-add">+</button>
									</span>
								</div>
							</div>
						</div>

					</div> -->


					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="course">Course</label>
						<div class="col-md-4">
							<select id="course" name="course" class="form-control">
								<option value="4213">Algorithms</option>
								<option value="4222">Electronics</option>
								<option value="4444">Dance and drama</option>
								<option value="4567">Literature</option>
								<option value="5521">Maths</option>
								<option value="5534">Microbiolgy</option>
								<option value="7762">Evolution</option>
							</select>
						</div>
						<span class="input-group-btn">
							<button type="button" class="btn btn-success btn-add">+</button>
						</span>
					</div>

					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="allot"></label>
						<div class="col-md-4">
							<button id="allot" name="allot" class="btn btn-primary">Allot Course(s)</button>
						</div>
					</div>



				</fieldset>
			</form>


			<!-- <footer> -->
				<!-- <div class="row">
					<div class="col-lg-12">
						<p>Copyright &copy; shubhamChandel 2014</p>
					</div>
				</div> -->
				<!-- </footer> -->

			</div>
			<!-- /.container -->

			<!-- jQuery Version 1.11.0 -->
			<script src="js/jquery-1.11.0.js"></script>

			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap.min.js"></script>

			<!-- Allot JS -->
			<script type="text/javascript" src="js/allot.js"></script>

		</body>

		</html>

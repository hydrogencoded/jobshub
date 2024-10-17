<?php 
ob_start();
session_start();
include "assets/inc/candidate_controller.php"; 
include "assets/inc/employer_controller.php"; 
?>

<?php
if (isset($_SESSION['notification'])) {
    $notification = $_SESSION['notification'];
}
?>
 

<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="Reposebay" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="reposebay.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/animate/animate.css">

		<link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/css/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/css/custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>		<script src="assets/master/style-switcher/style.switcher.localstorage.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
		<div class="col-lg-12">
			<?php 
 if (isset($notification)) {
    echo $notification; 
}?>

							<div class="tabs">
								<ul class="nav nav-tabs nav-justified">
									<li class="nav-item active">
										<a class="nav-link active" href="#popular10" data-toggle="tab">Candidate</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#recent10" data-toggle="tab">Employer</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular10" class="tab-pane active">
										<a href="/" class="logo float-left">
					<img src="assets/img/logorp.png" height="60" alt="Reposebay" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign up</h2>
					</div>
					<div class="card-body">
						<p class="text-center text-uppercase">
								Sign up as a Candidate
							</p>
						<form action="" method="post">
							<div class="form-group mb-3">
								<div class="input-group">
									<input name="name" type="text" class="form-control form-control-lg" placeholder="Fullname" />
																	</div>
							</div>

							<div class="form-group mb-3">
								<div class="input-group">
									<input name="email" type="email" class="form-control form-control-lg" placeholder="E-mail" />
																	</div>
							</div>

							<div class="form-group mb-3">
								<div class="input-group">
									<input name="username" type="text" class="form-control form-control-lg" placeholder="Username" />
																	</div>
							</div>

							<div class="form-group mb-3">
								<div class="input-group">
									<input name="password" type="password" class="form-control form-control-lg" placeholder="Password" />
																	</div>
							</div>


							
							<div class="row">
								<div class="col-sm-8">
																	</div>
								<div class="col-md-12">
									<button name="register" type="submit" class="btn btn-primary btn-block">REGISTER</button>
								</div>
							</div>

							<span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-1 text-center">
								<a class="btn btn-facebook mb-3 ml-1 mr-1" href="#">Sign in with <i class="fab fa-facebook-f"></i></a>
								<a class="btn btn-twitter mb-3 ml-1 mr-1" href="#">Sign in with <i class="fab fa-twitter"></i></a>
							</div>

							<p class="text-center">Already have an account? <a href="signin">Sign in!</a></p>

						</form>
					</div>
				</div>
									</div>
									<!---------------------- EMPLOYER SIGNUP ------------------->
									<div id="recent10" class="tab-pane">
										<a href="/" class="logo float-left">
					<img src="assets/img/logorp.png" height="60" alt="Reposebay" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign up</h2>
					</div>
					<div class="card-body"><p class="text-center text-uppercase">
								Sign up as an Employer
							</p>
								<form action="" method="post">

							<div class="form-group mb-3">
								<div class="input-group">
									<input name="company" type="text" class="form-control form-control-lg" placeholder="Company's Name" />
																	</div>
							</div>

							
							<div class="form-group mb-3">
								<div class="input-group">
									<input name="email2" type="email" class="form-control form-control-lg" placeholder="E-mail" />
																	</div>
							</div>

							

							<div class="form-group mb-3">
								<div class="input-group">
									<input name="username2" type="text" class="form-control form-control-lg" placeholder="Username" />
																	</div>
							</div>

							<div class="form-group mb-3">
								<div class="input-group">
									<input name="password2" type="text" class="form-control form-control-lg" placeholder="Password" />
																	</div>
							</div>


							
							<div class="row">
								<div class="col-sm-8">
																	</div>
								<div class="col-md-12">
									<button name="register2" type="submit" class="btn btn-primary btn-block">REGISTER</button>
								</div>
							</div>

							<span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-1 text-center">
								<a class="btn btn-facebook mb-3 ml-1 mr-1" href="#">Sign in with <i class="fab fa-facebook-f"></i></a>
								<a class="btn btn-twitter mb-3 ml-1 mr-1" href="#">Sign in with <i class="fab fa-twitter"></i></a>
							</div>

							<p class="text-center">Already have an account? <a href="index.php">Sign in!</a></p>

						</form>
					</div>
				</div>

									</div>
								</div>
							</div>
						</div>
		
				
						<p class="text-center text-muted mt-3 mb-3">© Copyright <script>document.write(new Date().getFullYear());</script> | Repose Bay | Designed with <i class="fa fa-heart pulse"></i> by <a href="http://wildfire.ng">Wildfire NG</a></p>			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="assets/vendor/jquery-cookie/jquery.cookie.js"></script>		<script src="assets/master/style-switcher/style.switcher.js"></script>		<script src="assets/vendor/popper/umd/popper.min.js"></script>		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="assets/vendor/common/common.js"></script>		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/assets/js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/assets/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/js/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
	</body>
</html>

<?php
unset($_SESSION['notification']);
?>
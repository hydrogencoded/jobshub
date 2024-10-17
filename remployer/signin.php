<?php 
ob_start();
session_start();
include "assets/inc/admin_controller.php";  

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
							
										<a href="/" class="logo float-left">
					<img src="assets/img/logorp.png" height="60" alt="Reposebay" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign in</h2>
					</div>
					<div class="card-body">
						
<?php 
 if (isset($notification)) {
    echo $notification; 
}?>

						<h3> Admin Sign-in </h3>

							
						<form action="" method="post">
							<div class="form-group mb-3">
								<label>Username</label>
								<div class="input-group">
									<input name="username" type="text" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-0">
								<div class="clearfix">
									<label class="float-left">Password</label>
								</div>
								<div class="input-group">
									<input name="pwd" type="password" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button name="submit" type="submit" class="btn btn-primary mt-2">Sign In</button>
								</div>
							</div>

							

						

							

						</form>
					</div>
				</div>

		
				
				<p class="text-center text-muted mt-3 mb-3">© Copyright <script>document.write(new Date().getFullYear());</script> | Reposebay.com| Designed with <i class="fa fa-heart pulse"></i> by <a href="http://wildfire.ng">Wildfire NG</a></p>
			</div>
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
	
	</body>
</html>
<?php
unset($_SESSION['notification']);
?>
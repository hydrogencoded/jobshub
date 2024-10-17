<?php
include 'assets/inc/admin_controller.php';

session_start();
$admin_id  = $_SESSION['admin'] ;


?>
<!doctype html>
<html class="fixed sidebar-left-xs" data-style-switcher-options="{'sidebarSize': 'xs'}">
<head>

		<!-- Basic -->
		<meta charset="UTF-8">
		<title>Reposebay</title>
		<meta name="keywords" content="Career &amp; Job Opportunities" />
		<meta name="description" content="Career & Job Opportunities">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="vendor/animate/animate.css">

		<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />		<link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />		<link rel="stylesheet" href="vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">
		<!-- Specific Page Vendor CSS -->		
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />		
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />		
		<link rel="stylesheet" href="vendor/select2/css/select2.css" />		
		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />		
		<link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />	
		<link rel="stylesheet" href="vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />		
		<link rel="stylesheet" href="vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />		
		<link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />		
		<link rel="stylesheet" href="vendor/dropzone/basic.css" />		
		<link rel="stylesheet" href="vendor/dropzone/dropzone.css" />		
		<link rel="stylesheet" href="vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />		
		<link rel="stylesheet" href="vendor/summernote/summernote-bs4.css" />		
		<link rel="stylesheet" href="vendor/codemirror/lib/codemirror.css" />		
		<link rel="stylesheet" href="vendor/codemirror/theme/monokai.css" />


		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>		<script src="master/style-switcher/style.switcher.localstorage.js"></script>


	</head>
	<body>
		<section class="body">

			<!-- start: header -->
		
				<header class="header header-nav-menu header-nav-top-line">
				<div class="logo-container">
					<a href="http://reposebay.com" class="logo">						<img src="img/logo.png" width="130" height="42" alt="Porto Admin" />					</a>					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>					</div>
				</div>

				
				<!-- start: search & user box -->
				<div class="header-right">
			
					
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fas fa-envelope"></i>
								<span class="badge">2</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-right badge badge-default">2</span>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
											
												<span class="title">Repose Bay</span>
												<span class="message">Welcome to reposebay</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
											
												<span class="title">Repose Bay</span>
												<span class="message">Welcome to reposebay</span>
											</a>
										</li>
																			</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fas fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-right badge badge-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-thumbs-up bg-success text-light"></i>
												</div>
												<span class="title">New Job Alert</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-lock bg-warning text-light"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-signal bg-success text-light"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2017</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								 
								  <?php 
     			// $ssql= "SELECT * FROM rp_candidate WHERE cd_username='$candidate_id'";
     			// $query = mysqli_query($boom, $ssql);
			     // if (mysqli_num_rows($query) > 0 ) {
			     //     while($row = mysqli_fetch_assoc($query)) {
			     //      $logo = $row ['cd_photo'];
			     
			     ?>
								<img src="<?php //echo $logo?>" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/%21logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name"><?php //echo "$candidate_id";?></span>
								<span class="role">Candidate</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="profile"><i class="fas fa-user"></i> My Profile</a>
								</li>

								<li>
									<a role="menuitem" tabindex="-1" href="change-password"><i class="fas fa-lock"></i> Change password</a>
								</li>
								
								<li>
									<a role="menuitem" tabindex="-1" href="logout"><i class="fas fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>

<?php
        session_start();

        $admin_id = $_SESSION['admin'] ;
         if(!$_SESSION["admin"]) {
            header("signin");
         }

        //include Header and Side Bar
            include 'inc/header.php';
            include 'inc/navbar.html';
        ?>

		

 <?php
 //GETTING COUNTS
$counttotal = mysqli_num_rows(mysqli_query($boom, "SELECT * FROM rp_jobs"));
$countapplication = mysqli_num_rows(mysqli_query($boom, "SELECT * FROM rp_applications"));
$countcandidate = mysqli_num_rows(mysqli_query($boom, "SELECT * FROM rp_candidate"));
$countemployer = mysqli_num_rows(mysqli_query($boom, "SELECT * FROM rp_employer"));
                                    
                                   

?>
						
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					</header>
						<div class="row">
							
							<div class="col-md-12"> 
								<div class="card-body">
									<div class="widget-summary-col">
														<div class="summary">
															
															<h3 class="text-secondary"> <b>Welcome Admin,</b> What would you like to do today  ?</h3>	
															<hr>																		
														
								<a href="add-candidate"><button class="btn btn-sm btn-outline-info"> ADD A CANDIDATE </button> </a> 
								<a href="add-employer"><button class="btn btn-sm btn-outline-secondary"> ADD AN EMPLOYER </button> </a>
								<a href="add-job"><button class="btn btn-sm btn-outline-success">POST A NEW JOB</button> </a> 

								
								
							</div>
						</div>


					</div>


							</div>
						</div>


						<div class="row">	
									<div class="col-md-4">
												<div class="card-body bg-info">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fas fa-user"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<p class="title">All Candidates</p>
															<div class="info">
																<strong class="amount"><?php echo "$countcandidate"; ?></strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-uppercase" href="Candidates">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</div>	
														
											
									<div class="col-md-4">
												<div class="card-body bg-secondary">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
																<i class="fas fa-users"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">All Companies</h4>
															<div class="info">
																<strong class="amount"><?php echo "$countemployer"; ?></strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-uppercase" href="companies">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									

										<div class="col-md-4">
												<div class="card-body bg-success">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fas fa-briefcase"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">All Jobs</h4>
															<div class="info">
																<strong class="amount"><?php echo "$counttotal"; ?></strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-uppercase" href="jobs">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
										<div class="row">
										<div class="col-md-4">

												<div class="card-body bg-danger">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fas fa-paste"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title"> All Applications</h4>
															<div class="info">
																<strong class="amount"><?php echo "$countapplication"; ?></strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-uppercase" href="applications">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</div>	
										<div class="col-md-4">
												<div class="card-body bg-warning">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fas fa-history"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Pending Jobs</h4>
															<div class="info">
																<strong class="amount">0</strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-uppercase">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
												<div class="card-body bg-danger">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fas fa-exclamation-circle"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Expired Jobs</h4>
															<div class="info">
																<strong class="amount">0</strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-uppercase">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</div>				
						</div>
</div>




											</div>
										</div>







</body> 		
<?php   include 'inc/footer.html'; ?>
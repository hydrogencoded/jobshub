		<?php
		session_start();

        $candidate_id = $_SESSION['candidate'] ;
		 if(!$_SESSION["candidate"]) {
		 	header("location:../index.php");
		 }

		//include Header and Side Bar
		  	include 'inc/header.php';
			include 'inc/navbar.html';
			include 'inc/dbconnect.php';
		?>

			<?php
				//COUNTS
			$counttotaljobs = mysqli_num_rows(mysqli_query($boom, "SELECT * FROM rp_applications WHERE candidate_id = '$candidate_id'"));
			$counttotalalerts = mysqli_num_rows(mysqli_query($boom, "SELECT * FROM rp_alerts  WHERE user_id = '$candidate_id' "));
			$counttotal = mysqli_num_rows(mysqli_query($boom, "SELECT * FROM rp_jobs WHERE rp_user_id = '$user_id' "));
			?>

			<?php
			 
			$sql= "SELECT * FROM rp_candidate WHERE cd_username ='$candidate_id'";
			$query = mysqli_query($boom, $sql);
			if (mysqli_num_rows ($query) > 0) {
								while($row = mysqli_fetch_assoc($query)) {
   										 $un     = $row['cd_name'];
   										 $bio    = $row['cd_bio'];
   										 $unn	 = $row['cd_username'];
   										 $dp	 = $row['cd_photo']; 									

							
			?>			
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					</header>
						<div class="row">
							<div class="col-md-6">						
									<section class="card card-horizontal mb-1">
									<header class="card-header bg-info">
										<div class="thumb-info mb-3">
											<img src="<?=$dp;?>" class="img-fluid " width="150" alt="Display Photo"s >
										
										</div>
									</header>
									<div class="card-body p-4">
										<h3 class="font-weight-semibold mt-3"><?php echo "$un"; }}  ?></h3>
										<p><?php  echo "$bio";?></p>
										<hr class="dotted short">
												
								<a href="profile">	<button class="btn btn-sm btn-success">MY PROFILE</button> </a>
									</section>

									</div>
																	
							<div class="col-md-6">
								<div class="card-body p-4">
								<div class="card-horizontal ">
									<img  class = "" src="img/o3c.gif" height="150">

								<div class="card-body p-4">
									
									<h3 class="font-weight-semibold mt-2"> <?php
												$hour = date('H', time());
														if( $hour = 12 && $hour <= 12) {
  														echo "Good Morning $un <br><span> How are you today?<span></p>";
														} else if($hour > 11 && $hour <= 16) {
  														echo " <div class='text-info text-capitalize'\>Good Afternoon $unn </div> <p>How is your day going?</p>";										
  														}else if($hour > 17 && $hour <= 24) {
  														echo "<strong class=\"title\">Good Evening $un, How was your day ?</strong>";
														}
													 ?></h3>
													 													 
								</div>	
							</div>
									</div>

							</div>
					</div>
	
								<div class="row">									
										<div class="col-md-4">
									<section class="card card-featured-left card-featured-danger mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-danger">
														<i class="fas fa-briefcase"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Jobs Applied</h4>
														<div class="info">
															<strong class="amount"><?=$counttotaljobs?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="applied">view all</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

								<div class="col-md-4">
									<section class="card card-featured-left card-featured-info mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-info">
														<i class="fas fa-heart"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Saved Jobs</h4>
														<div class="info">
															<strong class="amount">3</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="saved">view all</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-4">
									<section class="card card-featured-left card-featured-success mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-success">
														<i class="fas fa-bell"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">My Alerts</h4>
														<div class="info">
															<strong class="amount"><?=$counttotalalerts?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="alert">view all</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							
						</div>







						<div class="row">

							<div class="col-md-6">
								<div class="card-body">
<section class="card card-featured card-featured-info mb-4">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
									</div>

									<h2 class="card-title">News Feeds</h2>
								</header>
								<div class="card-body">
									<code> No feed yet</code>
								</div>
							</section>
						</div>
</div>

							<div class="col-md-6">
								<div class="card-body">
<section class="card card-featured card-featured-info mb-4">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
									</div>

									<h2 class="card-title">Latest News</h2>
								</header>
								<div class="card-body">
									<code>No feed yet</code>
								</div>
							</section>
						</div>
</div>
</div>





</body> 		

<?php   include 'inc/footer.html'; ?>
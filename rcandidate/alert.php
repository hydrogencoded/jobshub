<?php
        session_start();

        $candidate_id = $_SESSION['user'] ;
         if(!$_SESSION["user"]) {
            header("location:../index.php");
         }

        //include Header and Side Bar
            include 'inc/header.php';
            include 'inc/navbar.html';
            include '../assets/inc/candidate_controller.php';
        ?>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Job Alerts</h2>
					
					</header>

					<!-- start: page -->

					<div class="row">
							<div class="col-lg-12">
								<section class="card">


									<!--- page header 
									<header class="card-header">
										<div class="card-actions">
																				</div>
						
										<h2 class="card-title">Saved Jobs</h2>
									</header>

								--->

									<div class="card-body">
										<div class="clearfix">
										<a href="add-alert"><button class="btn btn-sm btn-success"> ADD NEW ALERT</button></a>
										<hr>
																		</div>

										<table class="table table-responsive-md mb-0">
											<thead>
												<tr>
													
													<th>POSITION</th>
													<th>CRITERIA</th>
													<th>CREATED</th>
													<th>ACTION</th>	

												</tr>
											</thead>
											<tbody><?php
								//FETCH ALERT DATA
											 $sql= "SELECT * FROM rp_alerts WHERE user_id ='$user_id'";
										$query = mysqli_query($boom, $sql);
												if (mysqli_num_rows ($query) > 0) {
												 while($row = mysqli_fetch_assoc($query)) {

												   	$title      = $row['title'];
													$date		= $row['date_created'];
													$category	= $row['category'];	
													$location	= $row['location'];
													$skill		= $row['skills'];
												
											?>
								
												<tr>
													<td><?php echo $title; ?></td>
													<td><?php echo "<b>$category</b> <br> $location, $skill"; ?></td>
													<td><?php echo $date;?></td>
													<td class="actions">
														<a href="#"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="delete-row"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<?php }}?>
												
											</tbody>
										</table>
									</div>
								</section>
							</div>

</body> 		



<?php   include 'inc/footer.html'; ?>

<?php
unset($_SESSION['notification']);
?>
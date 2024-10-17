<?php
        session_start();

        	$user_id = $_SESSION['user'] ;
         if(!$_SESSION["user"]) {
            header("location:../index.php");
         }

        //include Header and Side Bar
            include 'inc/header.php';
            include 'inc/navbar.html';
            include '../assets/inc/employer_controller.php';
        ?>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Applications </h2>
					
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
									

										<table class="table table-responsive-md mb-0">
											<thead>
												<tr>
													
								
													
													<th>JOB TITLE </th>
													<th>APPLICANT </th>													
													<th>APPLIED DATE</th>
													<th>ACTION</th>
													
													
												</tr>
											</thead>
											<tbody>
												<?php
								
        										$sql= "SELECT * FROM rp_applications  WHERE employer_id= '$user_id'";
                                    			$query = mysqli_query($boom, $sql);
                                   				 if (mysqli_num_rows ($query) > 0) {
                                    			 while($row = mysqli_fetch_assoc($query)) {
       										 							
												?>
												<tr>
													<td><?=$row['job_title'];?></td>
													<td><?=$row['candidate_name'];?></td>
													<td><?=$row['applied_date'];?></td>
													<td><button class="btn btn-sm btn-secondary"> VIEW RESUME</button>
														<button class="btn btn-sm btn-danger"> DISCARD</button></td>
													
																									
													
												</tr>
													
													
												<?}}?>
											</tbody>
										</table>
									</div>
								</section>
							</div>

</body> 		


<?php   include 'inc/footer.html'; ?>
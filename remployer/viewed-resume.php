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
						<h2>Reviews </h2>
					
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
													
								
													<th>TITLE</th>
													<th>NAME </th>													
													<th>REVIEW GIVEN</th>	
													
													
												</tr>
											</thead>
											<tbody>
												<?php
								//FETCH ALERT DATA
										// 	 $ssql= "SELECT * FROM rp_jobs WHERE rp_user_id ='$user_id'";
										// $query = mysqli_query($boom, $ssql);
										// if (mysqli_num_rows ($query) > 0) {
										// 		 while($row = mysqli_fetch_assoc($query)) {
										// 		   	$title      = $row['rp_job_title'];
										// 			$category	= $row['rp_job_category'];
										// 			$deadline   = $row['rp_deadline'];	
										// 			$views		= $row['rp_total_views'];
										// 			$applys		= $row['rp_total_applications'];
										// 			$date       = $row['rp_date_created'];
										// 			$salary		= $row ['rp_salary_from'];
																			
												?>
												<tr>
													<td> </td>
													<td></td>
													<td></td>	
													
													
																									
													
												</tr>
													
													
												
											</tbody>
										</table>
									</div>
								</section>
							</div>

</body> 		


<?php   include 'inc/footer.html'; ?>
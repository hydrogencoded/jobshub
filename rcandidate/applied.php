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
						<h2>Applied Jobs</h2>
					
						
					</header>


					<!-- start: page -->

					<div class="row">
							<div class="col-lg-12">
								<section class="card">
												<div class="card-body">
										<table class="table table-responsive-md mb-0">
											<thead>

												<tr>
													<th>APPLIED JOB</th>
													<th>EMPLOYER</th>
													<th>APPLIED DATE</th>
													<th>VIEW CV</th>
													<th>ACTIONS</th>
												</tr>
											</thead>
											<tbody>
											 <?php 
        										$sql= "SELECT * FROM rp_applications  WHERE candidate_id= '$candidate_id'";
                                    			$query = mysqli_query($boom, $sql);
                                   				 if (mysqli_num_rows ($query) > 0) {
                                    			 while($row = mysqli_fetch_assoc($query)) {
       										 ?>
												<tr>
													<td><?php echo $row['job_title'] ?></td>
													<td><?=$row['employer']?></td>
													<td><?=$row['applied_date']?></td>
													<td><button class="btn btn-info" href="#modalForm"> VIEW</button></td>
													<td class="actions">
														<a href="#"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="delete-row"><i class="far fa-trash-alt"></i></a>
													</td>
													<?php }} ?>	
												</tr>
												
											</tbody>
										</table>
									</div>
								</section>
							</div>

</body> 		


<?php   include 'inc/footer.html'; ?>
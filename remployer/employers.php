<?php
        session_start();

        	$user_id = $_SESSION['admin'] ;
         if(!$_SESSION["admin"]) {
            header("location:signin");
         }

        //include Header and Side Bar
            include 'inc/header.php';
            include 'inc/navbar.html';
                    ?>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Jobs you posted</h2>
					
					</header>

					<!-- start: page -->

					<div class="row">
							<div class="col-lg-12">
								<section class="card">
									<a href="add-candidate"><button class="btn btn-sm btn-success"> ADD A NEW CANDIDATE</button></a>
										<hr>


								<div class="card-body">
									

										<table class="table table-responsive-md mb-0">
											<thead>
												<tr>
													
								
													<th>ID</th>
													<th>NAME </th>
													<th>EMAIL</th>
													<th>PHONE NUMBER</th>
													<th>OCCUPATION</th>
													<th>GENDER</th>													
													<th>ACTION</th>
													
													
												</tr>
											</thead>
											<tbody>
												<?php
								//FETCH ALERT DATA
											 $ssql= "SELECT * FROM rp_candidate";
										$query = mysqli_query($boom, $ssql);
										if (mysqli_num_rows ($query) > 0) {
												 while($row = mysqli_fetch_assoc($query)) {
												 	$id	= $row['id']; 
												   	$name      = $row['cd_name'];
													$email	= $row['cd_email'];
													$num   = $row['cd_phone'];	
													$headline		= $row['cd_headline'];
													$gender		= $row['cd_gender'];
																			
												?>
												<tr>
													<td><?php echo $id; ?></td>
													<td><?php echo $name;?></td>
													<td><?php echo $email;?></td>
													<td><?php echo $num;?></td>
													<td><?php echo $headline;?></td>
													<td><?php echo $gender;?></td>
													
													<td class="actions">
														<a href="http://reposebay.com/candidate?candidate_id=<?php echo $name;?>"><i class="fas fa-eye"></i></a>
														
														<a href="deletecandidate.php?candidate_id" class="delete-row"><i class="far fa-trash-alt"></i></a>
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
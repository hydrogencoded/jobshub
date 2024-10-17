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


                    <?php
	if (isset($_SESSION['notification'])) {
    $notification = $_SESSION['notification'];
	}
	?>

  <?php 
  $job_idd = $_REQUEST['job'];
  ?>



  
 					





?>

<section role="main" class="content-body">
					<header class="page-header">
						<h2>Jobs you posted</h2>
					
					</header>


					<?php 
 if (isset($notification)) {
    echo $notification; 
}?>

					<!-- start: page -->

					<div class="row">
							<div class="col-lg-12">
								<section class="card">


								<div class="card-body">
									

										<table class="table table-responsive-md mb-0">
											<thead>
												<tr>
													
								
													<th>TITLE</th>
													<th>JOB CATEGORY </th>
													<th>SALARY RANGE </th>
													<th>JOB DEADLINE</th>
													<th>TOTAL VIEWS</th>
													<th>TOTAL APPLICATION</th>
													<th>DATE CREATED</th>
													<th>ACTION</th>
													
													
												</tr>
											</thead>
											<tbody>
												<?php
								//FETCH ALERT DATA
											 $ssql= "SELECT * FROM rp_jobs";
										$query = mysqli_query($boom, $ssql);
										if (mysqli_num_rows ($query) > 0) {
												 while($row = mysqli_fetch_assoc($query)) {
												 	$job_id		= $row['id'];
												   	$title      = $row['rp_job_title'];
													$category	= $row['rp_job_category'];
													$deadline   = $row['rp_deadline'];	
													$views		= $row['rp_total_views'];
													$applys		= $row['rp_total_applications'];
													$date       = $row['rp_date_created'];
													$salary		= $row ['rp_salary_from'];
																			
												?>
												<tr>
													<td><?php echo $title; ?></td>
													<td><?php echo $category;?></td>
													<td><?php echo $salary;?></td>
													<td><?php echo $deadline;?></td>
													<td><?php echo $views;?></td>
													<td><?php echo $applys;?></td>
													<td><?php echo $date;?></td>
													<td class="actions">
														<a href="edit-job?job=<?php echo $job_id;?>"><i class="fas fa-pencil-alt"></i></a>
														
														<a href="delete-job?job=<?php echo $job_id;?>" class="delete-row" onclick="alert('are you sure you want to delete')"><i class="far fa-trash-alt"></i></a>
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
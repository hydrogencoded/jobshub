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

	<?php
	if (isset($_SESSION['notification'])) {
    $notification = $_SESSION['notification'];
	}
	?>

  <?php 
  $job_idd = $_REQUEST['job'];
  ?>
						
<section role="main" class="content-body">
					<header class="page-header">
						<h2>ADD A NEW JOB </h2>
					</header>

					<!-- start: page -->

                <?php
                //FETCH JOB DATA
                       $ssql= "SELECT * FROM rp_jobs WHERE rp_user_id ='$user_id' AND id = '$job_idd' ";
                      $query = mysqli_query($boom, $ssql);
                       if (mysqli_num_rows ($query) > 0) {
                         while($row = mysqli_fetch_assoc($query)) {
                          $job_id   = $row['id'];
                          $desc     = $row['rp_job_desc'];
                          $title    = $row['rp_job_title'];
                          $category = $row['rp_job_category'];
                          $deadline = $row['rp_deadline'];  
                          $views    = $row['rp_total_views'];
                          $applys   = $row['rp_total_applications'];
                          $date     = $row['rp_date_created'];
                          $salary   = $row ['rp_salary_from'];
                          $state    = $row ['rp_state']
                                      
                              
                        ?>


					
<div class="card-body" style="display: block;">
	<?php 
 if (isset($notification)) {
    echo $notification; 
}?>
										<form class="form-horizontal" action="" method="POST">
                              

                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>TITLE *</strong></label>
                                                <input type="text" name="title" placeholder="Enter Job Title"  value="<?php echo $title ?>" class="form-control"  >
                                            </div>
                                        </div>
                                 

                              
                                            <div class="row form-group">												
													<div class="col-lg-12">
												<label class="col-form-label" for="formGroupExampleInput"><strong>JOB DESCRIPTION *</strong></label>
													<textarea  name="desc" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>Start typing...</textarea>
											</div>
									
   								</div>

   								
   										<div class="row form-group">

									        <div class="col-lg-4">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>JOB CATEGORY *</strong></label>
                                <select name="category" class="form-control input-lg mb-md" >
                            <option value="none" selected disabled hidden> Select Category </option>
                            <option value="Art & Media">Arts, Design, Media</option>
                            <option value="Automotive">Automotive</option>
                            <option value="Banking">Banking</option>
                            <option value="Charity & Voluntary">Charity &  Voluntary</option>
                            <option value="Data Center">Data Center</option>
                            <option value="Education & Coachs">Education & Coachs</option>
                           	<option value="Finance & Business">Finance & Business</option>
                           	<option value="Financial Services">Financial Services</option>
                           	<option value="Human Resources">Human Resources</option>
                           	<option value="IT & Computer">IT & Computer</option>	
                           	<option value="Sales & Marketing">Restaurant</option>
                        </select>
                    </div>
                       						 <div class="col-lg-4">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>STATE</strong></label>
                                <select name="state" class="form-control input-lg mb-md" >
                            <option value="none" selected disabled hidden> Select State </option>
                            <option value="Computer Engineering">ABIA </option>
                            <option value="Mechanical Engineering">ADAMAWA</option>
                            <option value="Mechatronics">AKWAIBOM</option>
                        </select>
                    </div>
                    	<div class="col-lg-4 mb-3">
                           		<label class="col-form-label" for="formGroupExampleInput"><strong>ADDRESS</strong></label>
                              <textarea type="text" name="address" placeholder="Address" class="form-control" ></textarea>
                                            </div>
                    		
                     				</div>

                    <div class="row form-group">

                            <div class="col-lg-4 mb-3">
                           		<label class="col-form-label" for="formGroupExampleInput"><strong>SALARY FROM</strong></label>
                              <input type="text" name="salaryf" placeholder="Enter Salary From" class="form-control" >
                                            </div>
                    
                    		<div class="col-lg-4">
                           		<label class="col-form-label" for="formGroupExampleInput"><strong>SALARY TO</strong></label>
                              <input type="text" name="salaryt" placeholder="Enter Salary To" class="form-control" >
                                            </div>
                   
                              <div class="col-lg-4">
                           		<label class="col-form-label" for="formGroupExampleInput"><strong>SALARY POST-FIX</strong></label>
                              <input type="text" name="salarypf" placeholder="Ex-Month" class="form-control" >
                                            </div> 

                                       <div class="col-lg-4 mb-3">
                           		<label class="col-form-label" for="formGroupExampleInput"><strong>DEADLINE SUBMISSION</strong></label>
                              <input type="date" name="deadline" placeholder="Enter Salary From" class="form-control" >
                                            </div>
                    
                    		<div class="col-lg-4">
                           		<label class="col-form-label" for="formGroupExampleInput"><strong>EMAIL FOR APPLICATIONS</strong></label>
                              <input type="email" name="email" placeholder="Email for applications" class="form-control"  >
                                            </div>
                   
                              <div class="col-lg-4">
                           		<label class="col-form-label" for="formGroupExampleInput"><strong>COMPANY WEBSITE </strong></label>
                              <input type="text" name="cweb" placeholder="Enter Custom Apply URL" class="form-control" >
                                            </div>      			
     						                
									 

								<div class="col-lg-12">
                                        <button name="addjob" type="submit" class="btn btn-lg btn-success"> ADD JOB</button>
                                                                               </div>
                        </div>
                            </div>
                            
                            </form>

                            </section>
                   		




		

						<!--- Page ends -->


</body> 		

<?php }}?>
<?php   include 'inc/footer.html'; ?>

<?php
unset($_SESSION['notification']);
?>

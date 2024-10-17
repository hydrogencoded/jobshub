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
						
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Post a new Job </h2>
					
						
					</header>

					<!-- start: page -->

					
<div class="card-body" style="display: block;">
	<?php 
 if (isset($notification)) {
    echo $notification; 
}?>
										<form class="form-horizontal" action="" method="POST">
                              

                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>TITLE *</strong></label>
                                                <input type="text" name="title" placeholder="Enter Job Title" class="form-control"  >
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
                                        <button name="addjob" type="submit" class="btn btn-sm btn-success"> POST JOB</button>
                                                                               </div>
                        </div>
                            </div>
                            
                            </form>

                            </section>
                   		




		

						<!--- Page ends -->


</body> 		


<?php   include 'inc/footer.html'; ?>

<?php
unset($_SESSION['notification']);
?>

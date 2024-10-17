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


        <?php
    if (isset($_SESSION['notification'])) {
    $notification = $_SESSION['notification'];
    }
    ?>


    <?php 
     $ssql= "SELECT * FROM rp_candidate WHERE cd_username='$candidate_id'";
     $query = mysqli_query($boom, $ssql);
     if (mysqli_num_rows($query) > 0 ) {
         while($row = mysqli_fetch_assoc($query)) {
          $logo = $row ['cd_photo'];
          $video = $row['cd_video'];
     
     ?>

<section role="main" class="content-body">
					<header class="page-header">
						<h2>User Profile</h2>
					
						
					</header>

					<!-- start: page -->

						<div class="row">
							<div class="col-lg-10 col-xl-3 mb-4 mb-xl-0">

								<section class="card">
									<div class="card-body">
										<div class="thumb-info mb-3">
											<img src="<?php echo $logo; ?>" class="rounded img-fluid" alt="Display Picture" width="200">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="mt-2">
                                           <input type="file" name="fileToUpload" >
                                            <button  type="submit" name="btn-upload" class="btn btn-sm btn-secondary mt-2"> Upload Profile Photo</button>
                                            </form>
                                    </div>
                 

									   <h4 class="mb-3"><?=$row['cd_name']; ?></h4>
												
											

										<hr class="dotted short">

										<h5 class="mb-2 mt-3">Bio</h5>
										<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vulputate quam. Interdum et malesuada</p>
										
										<hr class="dotted short">
										
										<p><span ><i class="fas fa-phone">   PHONE: </span></i> 08163130210
										<br><span ><i class="fas fa-envelope">   E-MAIL: </span></i> 08163130210
										<br><span ><i class="fas fa-map">   LOCATION: </span></i> 08163130210</p>
			
									<hr class="dotted short">

										<div class="social-icons-list">
											<a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com/" data-original-title="Facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a rel="tooltip" data-placement="bottom" href="http://www.twitter.com/" data-original-title="Twitter"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com/" data-original-title="Linkedin"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</div>

									</div>
								</section>

	

							</div>
                        </span>


                          



							<div class="col-md-9 mb-4 mb-xl-0">

						
                            <div class="col-lg-12">
                                <section class="card mt-auto">
                                    <div class="card-body">
                                        <div class="panel-body">
                                                  <section class="card">   
                                                
                                                <?php 
                                if (isset($notification)) {
                         echo $notification; 
                                        }?>
                                <h2 class="card-title">Update Profile</h2>
                                 </header>

                                      <hr>
                                                      
                              
                                    <form class="form-horizontal" action="" method="POST">
                                <div class="col-lg-12">
                                     <h5><b class="text-info">BASIC INFORMATION </b> </h5>
                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Fullname *</label>
                                                <input type="text" name="fname" placeholder="" class="form-control"  value ="<?=$row['cd_name']?>" required="">
                                            </div>

                                                 <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Phone Number</label>
                                                <input type="text" name="number" placeholder="" class="form-control" value ="<?=$row['cd_phone']?>"required="">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">E-mail *</label>
                                                <input type="email" name="email" placeholder="" class="form-control" value ="<?=$row['cd_email']?>" required="">
                                            </div>

                                                 <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Birthday *</label>
                                                <input type="date" name="dob" placeholder="" class="form-control" value ="<?=$row['cd_dob']?>" required="">
                                            </div>

                                        </div>

                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Headline</label>
                                                <input type="text" name="headline" placeholder="" class="form-control" required="" value ="<?=$row['cd_headline']?>">
                                            </div>
   												 <div class="col-lg-6">
                                   <?php  
                          if($row['ep_gender'] == ''){
                          $gender = ' <option value="select>Select Gender</option>';
                           } ?> 
                                                <label class="col-form-label" for="formGroupExampleInput">Gender *</label>
                                <select name="gender" class="form-control input-lg mb-md" required="">
                             <option value="<?php echo $row['cd_gender']?>" selected disabled hidden> <?php echo $row['cd_gender']?> </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                			<div class="row form-group">
                                            <div class="col-lg-12">
                                                <label class="col-form-label" for="formGroupExampleInput">Home Address *</label>
                                                <textarea type="text" name="address" placeholder="" class="form-control" required=""><?=$row['cd_address']?>" </textarea>
                                            </div>
		                       </div>


                				<div class="row form-group">
                                            <div class="col-lg-12">
                                                <label class="col-form-label" for="formGroupExampleInput">Description *</label>
                                                <textarea type="text" name="bio" placeholder="" class="form-control" required=""> <?=$row['cd_bio']?></textarea>
                                            </div>
		                       </div>

                               <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Skill 1</label>
                                                <input type="text" name="skill1" placeholder="" class="form-control" value ="<?=$row['cd_skill_1']?>" >
                                            </div>

                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Skill 2</label>
                                                <input type="text" name="skill2" placeholder="" class="form-control" value ="<?=$row['cd_skill_2']?>">
                                            </div>


                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Skill 3</label>
                                                <input type="text" name="skill3" placeholder="" class="form-control" value ="<?=$row['cd_skill_3']?>">
                                            </div>

                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Skill 4</label>
                                                <input type="text" name="skill4" placeholder="" class="form-control" value ="<?=$row['cd_skill_4']?>">
                                            </div>
                                        </div>


                                     <h5><b class="text-info">COVER LETTER & RESUME </b> </h5>
                                        <div class="row form-group">
                                         
                                          <div class="col-lg-12">
                                                
                                                    <textarea  name="cover" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?=$row['cd_email']?></textarea>
                                            </div>
                        </div>

						<div class="clearfix">
                                        <button type="submit" name="updateprofile"  class="btn btn-sm btn-success"> Update Profile</button>

                                     </div>
                                     </div>
                                 </form>
                                                      <hr>

                                        <h5><b class="text-info">MY VIDEO RESUME </b> </h5>    

                                      <center>
                                      <video width="500" controls>
                  <source src="<?=$video?>" type="video/mp4">              
                </video>
                <hr>
                <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="mt-2">
                                           <input type="file" name="videoToUpload" >
                                            <button  type="submit" name="vd-upload" class="btn btn-sm btn-danger mt-2"> Upload Video Resume</button>
                                            </form>
                </center>
              </section>

                         </div>
                         <hr>
                                        </div>
                                            <hr>

                     </div>

                 </section>


              

												
</div>

							
<?php   }}?>


<?php
unset($_SESSION['notification']);
?>


<?php   include 'inc/footer.html'; ?>

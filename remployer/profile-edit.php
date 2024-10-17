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
    //Fetch Data
       $ssql= "SELECT * FROM rp_employer WHERE ep_username='$user_id'";
        $query = mysqli_query($boom, $ssql);
        if (mysqli_num_rows($query) > 0 ) {
        while($row = mysqli_fetch_assoc($query)) {  
          $logo = $row['ep_logo'];

        ?>
                                                        

                                                        


<section role="main" class="content-body">
					<header class="page-header">
						<h2>Edit Company Profile</h2>	
					</header>


                

					<!-- start: page -->

													<div class="col-md-12 mb-4 mb-xl-0">
					
                            <div class="col-md-12">
                                <section class="card mt-auto">
                                    <div class="card-body">
                                        <div class="panel-body">
                                               <section class="card">
                                                <?php 
                                if (isset($notification)) {
                         echo $notification; 
                                        }?>
                                                             </header>



                                 <div class="card-body">
                                        <div class="thumb-info mb-3">
                                                <img src="<?php echo $logo;?>" class="img-fluid" alt="Company Logo" width="196">
                                        </div>
                                     
                                          <form action="" method="POST" enctype="multipart/form-data">
                                           <input type="file" name="fileToUpload">

                                            <button type="submit" name="btn-upload" class="btn btn-sm btn-secondary"> Upload Logo</button>
                                             </form>
                                    <p>Update your logo manually, If the logo is not set, the default logo will be used</p>
                                   
                                        
                                        </div>
                                
                                    <form class="form-horizontal" action="" method="POST">

                                <div class="col-lg-12">

                                                            <h5><b class="text-info">COMPANY PROFILE</b> </h5>
                                                          

                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Company Name *</label>
                                                <input type="text" name="name" placeholder="<?php echo $row['ep_company']?>" class="form-control"  value="<?php echo $row['ep_company']?>">
                                            </div>

                                                 <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Phone Number *</label>
                                                <input type="text" name="number" placeholder="" class="form-control" required=""value="<?php echo $row['ep_phone']?>">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">E-mail *</label>
                                                <input type="email" name="email" placeholder="" class="form-control" required="" value="<?php echo $row['ep_email']?>">
                                            </div>

                                                 <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Headline *</label>
                                                <input type="text" name="headline" placeholder="" class="form-control" required="" value="<?php echo $row['ep_headline']?>">
                                            </div>

                                        </div>

                                        <div class="row form-group">
                                            <div class="col-lg-4">
                                                <label class="col-form-label" for="formGroupExampleInput"> Company Website</label>
                                                <input type="text" name="website" placeholder="" class="form-control" value="<?php echo $row['ep_company_website']?>">
                                            </div>

                                            <div class="col-lg-4">
                                                <label class="col-form-label" for="formGroupExampleInput">Founded Date *</label>
                                                <input type="date" value="<?php echo $row['ep_founded_date'];?>" name="founded" placeholder="" class="form-control" >
                                            </div>
   												 <div class="col-lg-4">
                                                <label class="col-form-label" for="formGroupExampleInput">Company Size *</label>
                                <select name="size" class="form-control input-lg mb-md" required="">

                                   <?php  
                          if($row['ep_company_size'] == ''){
                          $size = ' <option value="Abuja FCT">Please choose state</option>';
                           } ?>  
                            <option value="<?php echo $row['ep_company_size']?>" selected disabled hidden> <?php echo $row['ep_company_size']?> </option>
                            <option value="10-50">10-50</option>
                            <option value="51-100">51-100</option>
                            <option value="101-200">101-200</option>
                            <option value="200+">200+</option>

                        </select>
                    </div>
                </div>
                			<div class="row form-group">
                                         
                			              <div class="col-lg-12">
                                                <label class="col-form-label" for="formGroupExampleInput">Description *</strong></label>
                                                    <textarea  name="desc" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?php echo $row['ep_description']?></textarea>
                                            </div>
                        </div>
                        <h5><b class="text-info">LOCATION</b> </h5>


                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">State*</label>
                                <select name="state" class="form-control input-lg mb-md" required="">
                        <?php  
                          if($row['ep_state'] == ''){
                          $statee = ' <option value="Abuja FCT">Please choose state</option>';
                           } ?>          
                                            
              <?php echo $statee; ?> 
              <option value="<?php echo $row['ep_state']; ?>"><?php echo $row['ep_state']; ?></option>                          
              <option value="Abuja FCT">Abuja FCT</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nassarawa">Nassarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
           <option value="Outside Nigeria">Outside Nigeria</option>
            </select>
                    </div>

                                                 <div class="col-md-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Address *</label>
                                                <textarea type="text" name="address" placeholder="" class="form-control" required=""><?php echo $row['ep_address']?> </textarea>
                                            </div>

                                        </div>

                        <h5><b class="text-info">COMPANY SOCIAL ACCOUNTS</b> </h5>
                        <hr>
    
                    <div class="row form-group">

                                            <div class="col-lg-3">
                                                <label class="col-form-label" for="formGroupExampleInput">Facebook</label>
                                                <input type="text" name="fb" placeholder="http://facebook.com/your-page" class="form-control" value="<?php echo $row['ep_facebook']?>">
                                            </div>

                                                 <div class="col-lg-3">
                                                <label class="col-form-label" for="formGroupExampleInput">Twitter</label>
                                                <input type="text" name="tw" placeholder="http://twitter.com/your-page" class="form-control"  value="<?php echo $row['ep_twitter']?>">
                                            </div>

                                            <div class="col-lg-3">
                                                <label class="col-form-label" for="formGroupExampleInput">Linkedin</label>
                                                <input type="text" name="ld" placeholder="http://linkedin.com/your-page" class="form-control"  value="<?php echo $row['ep_linkedin']?>">
                                            </div>

                                                 <div class="col-lg-3">
                                                <label class="col-form-label" for="formGroupExampleInput">Instagram</label>
                                                <input type="text" name="in" placeholder="http://Instagram.com/your-page" class="form-control"  value="<?php echo $row['ep_instagram']?>">
                                            </div>

                                        </div> 

                                        
						<div class="clearfix">
                                        <button name="updateprofile" type="submit" class="btn btn-sm btn-success"> Update Profile</button>

                                       </div>
                                    
                                </section>
                            </div>
                        </form>
                          
                       

                        	<hr>

                        	
                    </section>
                </div>
            </div>
    </div>

<?php   }}?>


<?php   include 'inc/footer.html'; ?>

<?php
unset($_SESSION['notification']);
?>

							
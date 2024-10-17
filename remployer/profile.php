		<?php
        session_start();

        $user_id = $_SESSION['user'] ;
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
     $ssql= "SELECT * FROM rp_employer WHERE ep_username='$user_id'";
     $query = mysqli_query($boom, $ssql);
     if (mysqli_num_rows($query) > 0 ) {
         while($row = mysqli_fetch_assoc($query)) {

          $name = $row ['ep_username'];
          $logo = $row ['ep_logo'];
     
     ?>


<section role="main" class="content-body">
					<header class="page-header">
						<h2>User Profile</h2>   				
						
					</header>

					<!-- start: page -->

												
          <div class="row">
            <div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">

                <section class="card">
                  <div class="card-body">
                    <div class="thumb-info mb-3">
                        <img src="<?php echo $logo ?>" class="img-fluid" width= "200" style="margin-left: -20px" >                
                    
                    </div>

                    <h4 class="text-secondary"><b><?php echo $row['ep_company']?></b></h4>
                    <hr class="dotted short">                    
                    <p><b >  PHONE: </b></i> <?php echo $row['ep_phone'];?>
                    <br><b > E-MAIL: </b></i> <?php echo $row['ep_email']?>
                    <br><b > WEBSITE: </b></i> <?php echo $row['ep_website'];?></p>
      
                  <hr class="dotted short">

                    <div class="social-icons-list">
                      <a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com/" data-original-title="Facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                      <a rel="tooltip" data-placement="bottom" href="http://www.twitter.com/" data-original-title="Twitter"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                      <a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com/" data-original-title="Linkedin"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                    </div>

                  </div>
                </section>

             </div>

            
            <div class="col-md-8">

                <section class="card">
                  <div class="card-body">
                    <h3><b class="text-secondary">PROFILE OVERVIEW</b> </h3>
                    <hr class="dotted short">
                    <a href="profile-edit"><button class="btn btn-sm btn-secondary"> EDIT COMPANY PROFILE   </button> </a>
                    <a href="../view-company?company=<?php echo $name;?>"><button class="btn btn-sm btn-outline-info" style="float: right;"> VIEW ON WEBSITE   </button> </a>
             

                    <hr class="dotted short">

                    <p><b >  HEADLINE: </b>  <?php echo $row['ep_headline']?>
                    <br><b > ADDRESS: </b><?php echo $row['ep_address']?>
                    <br><b > LOCATION: </b> <?php echo $row['ep_state']?>
                    <br><b > FOUNDED DATE: </b><?php echo $row['ep_founded_date']?>
                    <br><b > COMPANY SIZE: </b><?php echo $row['ep_size']?>
                                       <br><b >  DESCRIPTION: </b><br>
                     <textarea class="form-control"><?php echo $row['ep_description']?>

                     </textarea> </p>

                    

                  </div>
                </section>

  

              </div>

            </div>
          </div>
        </section>





                                 

                 



<?php   }}?>


<?php   include 'inc/footer.html'; ?>
							
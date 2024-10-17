<?php
include 'home_assets/inc/header.php';
include 'home_assets/inc/dbconnect.php';    
?>  

<?php 
  $company_id = $_REQUEST['company'];
?>

  <?php
                                    // fetch company data 
                                  $sql= "SELECT * FROM rp_employer  WHERE ep_company= '$company_id' ";
                                    $query = mysqli_query($boom, $sql);
                                    if (mysqli_num_rows ($query) > 0) {
                                     while($row = mysqli_fetch_assoc($query)) {
                                       $name      = $row['ep_company'];
                                       $headline  = $row['ep_headline'];
                                       $email     = $row['ep_email'];
                                       $phone     = $row['ep_phone'];
                                       $date      = $row['ep_founded_date'];
                                       $size      = $row['ep_company_size'];
                                       $description = $row['ep_description'];   
                                       $state       = $row['ep_state'];
                                       $address     = $row['ep_address'];
                                       $fb          = $row['ep_facebook'];
                                       $tw          = $row['ep_twitter'];
                                       $ln          = $row['ep_linkedin'];
                                       $ig          = $row['ep_instagram'];
                                       $logo         =$row['ep_logo'];
                                    
                                 ?>

       
      <!-- Single Candidate Start -->
      <section class="single-candidate-page section_50">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="single-candidate-box">
                     <div class="single-candidate-img">
                          <img src="remployer/<?php echo $logo;?>"  class = "img-fluid"/>


                     </div>
                     <div class="single-candidate-box-right">
                        <h4><?php echo "$name"; ?></h4>
                        <p><?php echo "$headline"; ?></p>
                        <div class="single-candidate-rate">
                           <p class="rating-company">4.9</p>
                           <ul>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star-half-o"></i></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="single-candidate-action">
                     <a href="#" class="bookmarks"><i class="fa fa-map-marker"></i>See on map</a>
                     <a href="posted-jobs" class="candidate-contact"><i class="fa fa-gavel"></i>posted Jobs</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Single Candidate End -->
       
       
      <!-- Single Candidate Bottom Start -->
      <div class="single-candidate-bottom-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-8">
                  <div class="single-candidate-bottom-left">
                     <div class="single-candidate-widget">
                        <h3>company description</h3>


                        <p style="text-align: justify;"><?php echo "$description";?></p></div>
                     <div class="single-candidate-widget">
                        <h3><?php $counttotal = mysqli_num_rows (mysqli_query($boom, "SELECT * FROM rp_jobs 
                         WHERE rp_user_id = '$company_id' "));?> 
                        (<?php echo "$counttotal"; ?>) Open Positions</h3>
                        <div class="single-work-history company-single-page">
                           <div class="single-candidate-list">
                              <div class="main-comment">
                                 <div class="candidate-text">
                                    <div class="candidate-info">
                                       <div class="candidate-title">
                                          <h3><a href="#">C Developer (Senior) C .Net</a></h3>
                                       </div>
                                       <p class="company-state">
                                          <i class="fa fa-map-marker"></i>
                                          Chicago
                                       </p>
                                       <p class="open-icon">
                                          <i class="fa fa-clock-o"></i>
                                          Full Time
                                       </p>
                                       <p class="varify">
                                          <i class="fa fa-check"></i>
                                          Salary : $800-$1200
                                       </p>
                                    </div>
                                    <div class="candidate-text-inner">
                                       <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="single-candidate-bottom-right">
                     <div class="single-candidate-widget-2">
                        <a href="#" class="jobguru-btn-2">
                        <i class="fa fa-briefcase"></i>
                    Follow Company
                        </a>
                     </div>
                     <div class="single-candidate-widget-2">
                        <ul>
                           <li><i class="fa fa-envelope"></i> <?php echo "$email"; ?> </li>
                           <li><i class="fa fa-phone"></i><?php echo "$phone"; ?></li><br>
                           <li><i class="fa fa-globe"></i><?php echo "$website"; ?></li><br>
                           <li><i class="fa fa-map-marker"></i><?php echo "$state"; ?></li>

                        </ul>
                     </div>
                     <div class="single-candidate-widget-2">
                        <h3>Social Links</h3>
                        <ul class="candidate-social">
                           <li><a href="http://facebook.com/<?php echo $fb;?>">  <i class="fa fa-facebook"></i></a></li>
                           <li><a href="http://twitter.com/<?php echo $tw;?>"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="http://linkedin.com/<?php echo $ln;?>"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="http://instagram.com/<?php echo $ig;?>"><i class="fa fa-instagram"></i></a></li>                          
                        </ul>
                     </div>
                     <div class="single-candidate-widget-2">
                        <h3>Quick Contacts</h3>
                        <form>
                           <p>
                              <input type="text" placeholder="Your Name">
                           </p>
                           <p>
                              <input type="email" placeholder="Your Email Address">
                           </p>
                           <p>
                              <textarea placeholder="Write here your message"></textarea>
                           </p>
                           <p>
                              <button type="submit">Send Message</button>        
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Single Candidate Bottom End -->


   <?php   }} ?>

     <?php
include 'home_assets/inc/footer.php';     
?>    

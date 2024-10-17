<?php
include 'home_assets/inc/header.php';
include 'home_assets/inc/controller.php';    
?>  

<?php 
  $candidate_id = $_REQUEST['candidate'];
?>



                                 <?php 
                                $ssql= "SELECT * FROM rp_candidate WHERE cd_username='$candidate_id'";
                                         $query = mysqli_query($boom, $ssql);
                                                 if (mysqli_num_rows($query) > 0 ) {
                                                   while($row = mysqli_fetch_assoc($query)) {
                                                           $c_name     = $row ['cd_name'];
                                                           $c_username = $row ['cd_username'];
                                                           $c_resume   =  $row ['cd_resume'];
                                                                      }}
                                                                               ?>
                              


         <!-- Single Candidate Start -->
      <section class="single-candidate-page section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="single-candidate-box">
                     <div class="single-candidate-img">
                        <img src="home_assets/img/author.jpg" alt="single candidate" />
                     </div>
                     <div class="single-candidate-box-right">     
                        <h4><?=  $cd_name; ?></h4>
                        <p><?=  $cd_headline; ?></p>
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
                     <a href="#" class="bookmarks"><i class="fa fa-star"></i>Bookmarks</a>
                     <a href="#" class="candidate-contact"><i class="fa fa-envelope"></i>contact</a>
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
               <div class="col-md-8 col-lg-9">
                  <div class="single-candidate-bottom-left">
                     <div class="single-candidate-widget">
                        <h3>About Me</h3>
                        <p><?=$row['cd_headline']?></p>
                     </div>
                     <div class="single-candidate-widget">
                        <h3>Skills</h3>
                        <ul>
                           <li><a href="#"><?=$row['cd_skill_1']?></a></li>
                           <li><a href="#"><?=$row['cd_skill_1']?></a></li>
                           <li><a href="#"><?=$row['cd_skill_1']?></a></li>
                           <li><a href="#"><?=$row['cd_skill_1']?></a></li>
                           <li><a href="#"><?=$row['cd_skill_1']?></a></li>
                           
                        </ul>
                     </div>
                     <div class="single-candidate-widget clearfix">
                        <h3>project history</h3>
                        <div class="progressbar-example">
                           <div class="progress-box">
                              <p class="progress-title">Job Success</p>
                              <p class="progress-size">80%</p>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                              </div>
                           </div>
                           <div class="progress-box">
                              <p class="progress-title">Recommendation</p>
                              <p class="progress-size">100%</p>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                              </div>
                           </div>
                           <div class="progress-box">
                              <p class="progress-title">On Budget</p>
                              <p class="progress-size">70%</p>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                              </div>
                           </div>
                           <div class="progress-box">
                              <p class="progress-title">On Budget</p>
                              <p class="progress-size">90%</p>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="single-candidate-widget">
                        <h3>work History</h3>
                        <div class="single-work-history">
                           <div class="single-candidate-list">
                              <div class="main-comment">
                                 <div class="candidate-image">
                                    <img src="home_assets/img/a_logo.png" alt="author">
                                 </div>
                                 <div class="candidate-text">
                                    <div class="candidate-info">
                                       <div class="candidate-title">
                                          <h3><a href="#">Lead UX/UI Designer</a></h3>
                                       </div>
                                       <p><i class="fa fa-calendar-check-o"></i>September 2017 - Present</p>
                                    </div>
                                    <div class="candidate-text-inner">
                                       <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="single-work-history">
                           <div class="single-candidate-list">
                              <div class="main-comment">
                                 <div class="candidate-image">
                                    <img src="home_assets/img/b_logo.png" alt="author">
                                 </div>
                                 <div class="candidate-text">
                                    <div class="candidate-info">
                                       <div class="candidate-title">
                                          <h3><a href="#">Junior UX/UI Designer</a></h3>
                                       </div>
                                       <p><i class="fa fa-calendar-check-o"></i>May 2015 - July 2017</p>
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
               <div class="col-md-4 col-lg-3">
                  <div class="single-candidate-bottom-right">
                     <div class="single-candidate-widget-2">
                        <a href="#" class="jobguru-btn-2">
                        <i class="fa fa-balance-scale"></i>
                        compare with others
                        </a>
                     </div>
                     <div class="single-candidate-widget-2">
                        <ul>
                           <li><i class="fa fa-envelope"></i> <?=$row['cd_email']?></li>
                           <li><i class="fa fa-phone"></i> <?=$row['cd_phone']?></li>
                           <li><i class="fa fa-globe"></i> <?=$row['cd_website']?></li>
                        </ul>
                     </div>
                     <div class="single-candidate-widget-2">
                        <h3>Social Links</h3>
                        <ul class="candidate-social">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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
<?php  // }} ?>

     <?php
include 'home_assets/inc/footer.php';     
?>    

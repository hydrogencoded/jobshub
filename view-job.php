<?php
session_start();

        $candidate_id = $_SESSION['user'] ;
       if(!$_SESSION["user"]) {
         header("location:../index.php");
       }
include 'home_assets/inc/header2.php';
include 'assets/inc/candidate_controller.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>  


                         
<?php
  $job_id = $_REQUEST['job'];
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
                               <?php
                               //fetch Job  data 
                                  $sql= "SELECT * FROM rp_jobs WHERE  rp_job_title = '$job_id'";
                                    $query = mysqli_query($boom, $sql);
                                    if (mysqli_num_rows ($query) > 0) {
                                     while($row = mysqli_fetch_assoc($query)) {
                                       $title      = $row['rp_job_title'];
                                       $ep_logo    = $row['rp_company_logo'];
                                       $ep_name    = $row['rp_company_name'];
                                       $ep_id      = $row['rp_user_id'];
                                       $apply      = $row['rp_total_applications'];
                                       $deadline   = $row['rp_deadline']; 
                                       $date_applied = date("Y/m/d");
                                       
                                 ?>
      <!-- Single Candidate Start -->
      <section class="single-candidate-page section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-9 col-lg-6">
                  <div class="single-candidate-box">
                     <div class="single-candidate-img">
                        <img src="remployer/<?php echo $ep_logo; ?>" alt="single candidate" />
                     </div>
                     <div class="single-candidate-box-right">
                        <h4> <?=$title?> </h4>
                           <div class="job-details-meta">
                           <p><i class="fa fa-file-text"></i><b>Total Applications:</b> <?= $row['rp_total_applications']?> </p>
                           <p><i class="fa fa-calendar"></i> <b>Application Deadline:</b> <?= $row['rp_deadline']?></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-lg-6">
                  <div class="single-candidate-action">
                     <a href="#" class="candidate-contact"><i class="fa fa-star"></i>Save Job</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Single Candidate End -->
       
       
      <!-- Single Candidate Bottom Start -->
      <section class="single-candidate-bottom-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-lg-9">
                  <div class="single-candidate-bottom-left">
                     <div class="single-candidate-widget">
                        <h3>job Description</h3>
                        <p>      <?=$row['rp_job_desc']; ?>   </p>



                             </div>
                     
                     <?php
                        //FETCH ALERT DATA
                                  $sql= "SELECT * FROM rp_jobs LIMIT 3";
                              $query = mysqli_query($boom, $sql);
                                    if (mysqli_num_rows ($query) > 0) {
                                     while($row = mysqli_fetch_assoc($query)) {
                                       $company     = $row['rp_company_name'];
                                       $title       = $row['rp_job_title'];
                                       $salary      = $row['rp_salary_from'];
                                       $salary2     = $row['rp_salary_to'];                                         
                                       $location    = $row['rp_state']; 
                                       $ep_logo      = $row['rp_company_logo'];                           
                                    
                                 ?>
                     <div class="single-candidate-widget">
                        <h3>Other Jobs you might be interested in</h3>
                        <div class="sidebar-list-single">
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="remployer/<?=$ep_logo?>" alt="company list 1">
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#"><?php echo "$company"; ?></a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> <?php echo "$location"; ?></p>
                                 <p class="open-icon"><i class="fa fa-clock-o"></i>2 minutes ago</p>
                                 <p class="varify"><i class="fa fa-check"></i>Fixed price : $1200-$2000</p>
                                 <p class="rating-company">4.1</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="jobguru-btn">View Now</a>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-4 col-lg-3">
                  <div class="single-candidate-bottom-right">
                     <div class="single-candidate-widget-2">


                                 <?php
                                 //apply for job 
                                 if (isset($_POST['apply'])) {
                                      // ('','$c_name','$candidate_id','$title','$ep_name','$ep_id)
                                $qapply= "INSERT INTO rp_applications(`id`, `candidate_name`, `candidate_id`, `job_title`, `employer`, `employer_id`, `resume`, `applied_date`) VALUES('','$c_name','$candidate_id','$title','$ep_name','$ep_id','$c_resume','$date_applied')";

                                    $update     = "UPDATE rp_jobs SET rp_total_applications = rp_total_applications +1 WHERE rp_job_title='$title'";


                                $queryapply = mysqli_query($boom,$qapply);
                                            $result =  mysqli_query($boom,$update);
                                        if ($result) {
                                          
                                          echo "<script> alert('Your Application Successful')</script>";
                                        }else{
                                                      echo "<script> alert('Application Failed')</script>";                                                   
                                        }    

                              }

                              ?>
                           
                           <form action="" method="POST">
                           <button type="submit" name="apply" class="btn btn-info btn-lg btn-block" > <i class="fa fa-paper-plane-o"></i>
                        Apply Now         </button>
                        </form>
                        
                     </div>
                     <div class="single-candidate-widget-2">
                        <h3>Job overview</h3>
                        <ul class="job-overview">
                           <li>
                              <h4><i class="fa fa-briefcase"></i> Salary Range</h4>
                              <p><b>£<?= $row['rp_salary_from']?> - <?= $row['rp_salary_to']?></b></p>
                           </li>
                           <li>
                              <h4><i class="fa fa-map-marker"></i> State</h4>
                              <p><b><?= $row['rp_state']?></b></p>
                           </li>
                           <li>
                              <h4><i class="fa fa-thumb-tack"></i> Address</h4>
                              <p><b><?= $row['rp_address']?></b></p>
                           </li>
                           <li>
                              <h4><i class="fa fa-clock-o"></i> Date Posted</h4>
                              <p><b><?= $row['rp_date_created']?></b></p>
                           </li>
                        </ul>
                     </div>
                   <?php }} ?>
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
      </section>
      <!-- Single Candidate Bottom End -->
       



<?php }} ?>

 <?php
include 'home_assets/inc/footer.php';     
?>    

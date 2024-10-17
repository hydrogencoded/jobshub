<?php
        session_start();
      $user_id = $_SESSION['user'] ;
      include 'home_assets/inc/dbconnect.php';

            ?>
         <!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Reposebay | Job & Career Opportunities">
      <meta name="keyword" content="Job, freelancer, employee, marketplace">
      <meta name="author" content="Themescare">
      <!-- Title -->
      <title>Reposebay || Career & Job Opportunities</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="home_assets/img/favicon/favicon-32x32.png">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="home_assets/css/bootstrap.css">  
      <!--Font Awesome css-->      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="home_assets/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="home_assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="home_assets/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="home_assets/css/animate.min.css">
      <!--Select2 css-->
      <link rel="stylesheet" href="home_assets/css/select2.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="home_assets/css/slicknav.min.css">
      <!--Bootstrap-Datepicker css-->
      <link rel="stylesheet" href="home_assets/css/bootstrap-datepicker.min.css">
      <!--Jquery UI css-->
      <link rel="stylesheet" href="home_assets/css/jquery-ui.min.css">
      <!--Perfect-Scrollbar css-->
      <link rel="stylesheet" href="home_assets/css/perfect-scrollbar.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="home_assets/css/style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="home_assets/css/responsive.css">
      <!---Jquery ---->
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   </head>
<body>
       
       
      <!-- Header Area Start -->
      <header class="jobguru-header-area stick-top forsticky page-header">
         
         <div class="menu-animation">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-2">
                     <div class="site-logo">
                        <a href="index">
                        <img src="assets/img/logo.png" alt="repose" class="non-stick-logo" />
                        <img src="assets/img/logo.png" alt="repose" class="stick-logo" />
                        </a>
                     </div>
                     <!-- Responsive Menu Start -->
                     <div class="jobguru-responsive-menu"></div>
                     <!-- Responsive Menu Start -->
                  </div>
                  <div class="col-lg-6">
                     <div class="header-menu">

                          <?php


                     if (isset($_SESSION['user'])){
                         
                        $sql= "SELECT * FROM rp_employer WHERE ep_username ='$user_id'"; 
                           $query = mysqli_query($boom,$sql);

                           if (mysqli_num_rows($query) > 0) {
                                    echo '<nav id="navigation">
                           <ul id="jobguru_navigation">

                              <li class="active">
                                 <a href="../">Home</a>
                                                                  </li>
                                 <li class="">
                                 <a href="candidates">Candidates</a>
                                                                  </li>
                             
                              <li class="">
                                 <a href="#">Infobay</a>
                                                                  </li> 
                               <li class="">
                                 <a href="#">Resources</a>
                                                                  </li>                                   
                        </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="header-right-menu">
                        <ul>
                           <li><a href="remployer" class="post-jobs"><i class="fa fa-user"></i>My Dashboard</a></li>
                        
                        </ul>
                     </div>';
                  }


                  }

                      if (isset($_SESSION['user'])){                        
                   $sql= "SELECT * FROM rp_candidate WHERE cd_username ='$user_id'";                             
                           $queryy = mysqli_query($boom,$sql);

                           if (mysqli_num_rows($queryy) > 0) {
                                    echo '<nav id="navigation">
                           <ul id="jobguru_navigation">

                              <li class="active">
                                 <a href="../">Home</a>
                                                                  </li>
                                 <li class="">
                                 <a href="Jobs">Jobs</a>
                                                                  </li>
                                 <li class="">
                                 <a href="employers">Employers</a>
                                                                  </li>
                             
                              <li class="">
                                 <a href="#">Infobay</a>
                                                                  </li>
                               <li class="">
                                 <a href="#">Resources</a>
                                                                  </li>                                   
                        </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="header-right-menu">
                        <ul>
                           <li><a href="rcandidate" class="post-jobs"><i class="fa fa-user"></i>My Dashboard</a></li>
                        
                        </ul>
                     </div>';

                }
                   
              }  else{
                  echo '<nav id="navigation">
                           <ul id="jobguru_navigation">

                              <li class="active">
                                 <a href="../">Home</a>
                                                                  </li>
                                 <li class="">
                                 <a href="jobs">Jobs</a>
                                                                  </li>
                              <li class="">
                                 <a href="become-a-candidate">Become a Candidate</a>
                                                                  </li>
                              <li class="">
                                 <a href="become-an-employer">Become an Employer</a>
                                                                  </li>
                              <li class="">
                                 <a href="#">Infobay</a>
                                                                  </li>
                               <li class="">
                                 <a href="#">Resources</a>
                                                                  </li>                                    

                        </ul>
                        </nav>

                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="header-right-menu">
                        <ul>
                           <li><a href="../../repose/signup" class="post-jobs"><i class="fa fa-user-plus"></i>Sign up</a></li>
                           <li><a href="../../repose/signin"><i class="fa fa-user"></i>Login</a></li>
                        </ul>
                     </div>';
               }


                              
                        ?>



                 
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area End -->
   
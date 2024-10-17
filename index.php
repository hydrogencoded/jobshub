<?php
        session_start();
      $user_id = $_SESSION['user'] ;
         
            ?>
            <?php
include 'home_assets/inc/header.php';
include 'home_assets/inc/dbconnect.php';    
?>  



       
      <!-- Banner Area Start -->
      <section class="jobguru-banner-area">
         <div class="banner-slider owl-carousel">
            <div class="banner-single-slider slider-item-1">
               <div class="slider-offset"></div>
            </div>
            
         </div>
         <div class="banner-text">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="banner-search">
                        <h2>FIND YOUR DREAM JOB TODAY!</h2>
                        <h4>Find Jobs, Employment & Career Opportunities </h4>
                        <form>
                           <div class="banner-form-box">
                              <div class="banner-form-input">
                                 <input type="text" placeholder="Job Title, Keywords, or Phrase">
                              </div>
                              <div class="banner-form-input">
                                 <input type="text" placeholder="City, State or ZIP">
                              </div>
                              <div class="banner-form-input">
                                 <select class="banner-select">
                                    <option selected>Select Sector</option>
                                    <option value="1">Design & multimedia</option>
                                    <option value="2">Programming & tech</option>
                                    <option value="3">Accounting/finance</option>
                                    <option value="4">content writting</option>
                                    <option value="5">Training</option>
                                    <option value="6">Digital Marketing</option>
                                 </select>
                              </div>
                              <div class="banner-form-input">
                                 <button type="submit"><i class="fa fa-search"></i></button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Banner Area End -->  
       
       <!-- How it works Starts -->
      <section class="jobguru-job-tab-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2> <span>HOW IT WORKS</span></h2>
                     <p>Learn How Reposebay Works</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class=" job-tab">
                     <ul class="nav nav-pills job-tab-switch" id="pills-tab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="pills-companies-tab" data-toggle="pill" href="#pills-companies" role="tab" aria-controls="pills-companies" aria-selected="true">FOR CANDIDATES</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="false">FOR EMPLOYERS</a>
                        </li>
                     </ul>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                        <div class="top-company-tab">
                                      <div class="row">
                              <div class="col-md-4">
                                 <div> <img src="home_assets/img/1.png">
                                    <p class="text-center">Signup to start accessing amazing career opportunities and getting contacted by top companies recruiting. You can also signup using any of your choice social media login options available.</p>

                              </div>
                              </div>

                              <div class="col-md-4">
                                 <div> <img src="home_assets/img/2.png">
                                    <p class="text-center">To increase your credibility and your chances of being contacted, create a stellar shinny profile with accurate information and watch how you grow through the ranks.</p>

                              </div>
                              </div>


                              <div class="col-md-4">
                                 <div> <img src="home_assets/img/3.png">
                                    <p class="text-center">While recruiters are actively scouting for their best choices, you should do the same too. You can get contacted by recruiters  and you can also show your interest in any available opportunity by applying.</p>

                              </div>
                              </div>

                            




                        </div>
                         <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="#" class="jobguru-btn">REGISTER AS A CANDIDATE</a>
                  </div>
               </div>
            </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                        <div class="top-company-tab">
                           
                           <div class="row">
                              <div class="col-md-4">
                                 <div> <img src="home_assets/img/1.png">
                                    <p class="text-center">Signup to start gaining access to vetted and top notch candidates. You also have the option to signup using any of your choice social media platform.</p>

                              </div>
                              </div>

                              <div class="col-md-4">
                                 <div> <img src="home_assets/img/2.png">
                                    <p class="text-center">Craft a compelling profile that reflects the professionalism behind your brand, update vacancies to attract candidates application.</p>

                              </div>
                              </div>


                              <div class="col-md-4">
                                 <div> <img src="home_assets/img/employer3.png">
                                    <p class="text-center">Waste no time waiting. Utilize any of our easy and reliable tools to find quickly the best fit for your company.</p>

                              </div>
                              </div>

                            




                        </div>
                         <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="#" class="jobguru-btn">REGISTER AS AN EMPLOYER</a>
                  </div>
               </div>
            </div>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
           
         </div>
      </section>
      <!-- How it works section End -->

      <!---------STUNNING FEATURES ----------->

      <section class="jobguru-video-area section_50 bg-info">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2 class="text-white text-center">STUNNING FEATURES</h2>
                  </div>
               </div>
            </div>
            <p class="text-center text-white"> FOR CANDIDATES</p>

            <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder account_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-video-camera"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>VIDEO RESUME</h3>
                     </div>
                     
                     <div class="category-holder-sub-text">
                      <p>Upload a 1 minute video resume which recruiters can use to get familiar with you upfront.</p>  
                     </div>

                  </a>
               </div>
               

               <div class="col-lg-4 ">
                  <a href="#" class="single-category-holder account_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-bell"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>JOBS ALERT</h3>
                     </div>
                   
                     <div class="category-holder-sub-text">
                      <p> Receive alerts when specific job types are made available by recruiters.</p>  
                     </div>

                  </a>
               </div>

               <div class="col-lg-4 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder account_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-comment"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>CHAT WITH EMPLOYERS</h3>
                     </div>
                   
                     <div class="category-holder-sub-text">
                      <p>Both candidates and employers can initiate chats and have private conversations.</p>  
                     </div>

                  </a>
               </div>
            

</div>
<hr style="color: #fff">
<p class="text-center text-white"> FOR EMPLOYERS</p>

            <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder account_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-filter  "></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>SMART CANDIDATE FILTER</h3>
                     </div>
                     
                     <div class="category-holder-sub-text">
                      <p>Filter through thousands of resume in minutes and reduce time spent on searches.</p>  
                     </div>

                  </a>
               </div>
               

               <div class="col-lg-4 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder account_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-thumbs-up"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>QUICK CANDIDATE RECOMMENDATION</h3>
                     </div>
                   
                     <div class="category-holder-sub-text">
                      <p>Get recommendation for new jobs you indicate.</p>  
                     </div>

                  </a>
               </div>

               <div class="col-lg-4 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder account_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-life-ring"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>REPOSE RECRUIT SUPPORT</h3>
                     </div>
                   
                     <div class="category-holder-sub-text">
                      <p>A dedicated support team and online resources to aid achieving your recruitment goals.</p>  
                     </div>

                  </a>
               </div>
               </div>
      </section>


      <!------------------------- FEATURED COMPANY START ----->
             
      <section class="jobguru-top-job-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2 class="text-white">FEATURED JOBS</h2>
                     <p>See the latest and most featured job listings</p>
                  </div>   
               </div>
            </div>
            <div class="row">
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
               <div class="col-lg-4 col-md-12">
                  <div class="sigle-top-job">
                     <div class="top-job-company-image">
                        <div class="company-logo-img">
                           <a href="#">
                           <img src="remployer/<?php echo $ep_logo; ?>" alt="company image" width="180" />
                           </a>
                        </div>
                        <h3><a href="view-job?job=<?php echo $title;?>"><?php echo "$title"; ?></a></h3>
                     </div>
                     <div class="top-job-company-desc">
                        
                        <p><b>Location:</b> <span class="company-state"><i class="fa fa-map-marker"></i> <?php echo "$location";?></span></p>
                        <p> <b>Salary:</b> <span class="company-state"><i class="fa fa-credit-card-alt"></i> <?php echo "$salary - $salary2";?></span></p>
                        <div class="top-job-company-btn">
                           <a href="view-job?job=<?php echo $title;?>" class="jobguru-btn">VIEW JOB DETAILS</a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php      }
                                 } ?>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="jobs" class="jobguru-btn">browse all jobs</a>
                  </div>
               </div>
            </div>
         </div>
      </section>


      <!--------------- FEATURED COMPANY ENDS-------->


        <!--------------- milestone-------->

 <section class="jobguru-video-area section_100">
          <div class="container">
          <hr style="border-top: 1px solid #ffffff">
            <div class="row">

               <div class="col-md-12">
                  <div class="row text-center">
           <div class="col">
           <div class="counter">
      <i class="fa fa-building fa-2x text-white"></i>
      <h2 class="timer count-title count-number text-white" data-to="20" data-speed="1500"></h2>
       <p class="count-text text-white">REGISTERED COMPANIES</p>
    </div>
           </div>
              <div class="col">
               <div class="counter">
      <i class="fa fa-user fa-2x text-white"></i>
      <h2 class="timer count-title count-number text-white" data-to="1700" data-speed="1500"></h2>
      <p class="count-text text-white">LIVE CANDIDATES</p>
    </div>
              </div>
              <div class="col">
                  <div class="counter">
      <i class="fa fa-external-link fa-2x text-white"></i>
      <h2 class="timer count-title count-number text-white" data-to="80" data-speed="1500"></h2>
      <p class="count-text text-white">OPEN POSITIONS</p>
    </div></div>
              <div class="col">
              <div class="counter">
      <i class="fa fa-check fa-2x text-white"></i>
      <h2 class="timer count-title count-number text-white" data-to="150" data-speed="1500"></h2>
      <p class="count-text text-white">SUCCESSFUL APPLICATIONS</p>
    </div>
              </div>
         </div>

               </div>
            </div>
                                       <hr style="border-top: 1px solid #ffffff">

         </div>

      </section>
      


<!--- Milestone ends ---->

<!---- Companies registered -------------->


<!-- Job Tab Area Start -->
      <section class="jobguru-job-tab-area section_70" style="background: #A3D5DB;
">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2 class="text-white">REGISTERED COMPANIES</h2>
                  <p>See the latest  registered companies</p>

                  </div>
               </div>
            </div>
            <div class="row">
                <?php
                        //FETCH ALERT DATA
                                  $sql= "SELECT * FROM rp_employer LIMIT 3";
                              $query = mysqli_query($boom, $sql);
                                    if (mysqli_num_rows ($query) > 0) {
                                     while($row = mysqli_fetch_assoc($query)) {
                                       $id          = $row['id'];     
                                       $company     = $row['ep_company'];
                                       $a_logo       =$row['ep_logo'];
                                       $state       =$row['ep_state'];
                                       $user        =$row['ep_username'];
                                                                
                                    
                                 ?>
               <div class="col-md-12">
                  
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                        <div class="top-company-tab">
                           <ul>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                       <img src="remployer/<?php echo $a_logo ?>" alt="company logo"  width="150" alt="company list 1" >
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href="#"><?php echo $company ?></a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> <?= $state?></p>
                                       <p class="open-icon"><i class="fa fa-briefcase"></i><?php $counttotal = mysqli_num_rows (mysqli_query($boom, "SELECT * FROM rp_jobs 
                         WHERE rp_user_id = '$user' "));?> 
                        (<?php echo "$counttotal"; ?>) OPEN POSITIONS</p>
                                       <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                       <p class="rating-company">4.9</p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="employers" class="jobguru-btn">view profile</a>
                                    </div>
                                 </div>

                              </li>

                           </ul>
                                

                        </div>
                     </div>
                  </div>
               </div>
               <?php } } ?> 
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="#" class="jobguru-btn-2">VIEW MORE COMPANIES</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Job Tab Area End -->







  <section class="jobguru-job-tab-area section_50" >
         <div class="container">
            <div class="row">
               <div class="site-heading">
                     <h2 class="text-info">TESTIMONIALS</h2>
                     <hr>
               <div class="col-md-12">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
                        <div class="single-happy-freelancer">
                        <div class="happy-freelancer-img">
                           <img src="home_assets/img/testimonial-1.jpg" alt="testimonial 1">
                        </div>
                        <div class="happy-freelancer-text">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est.</p>
                           <div class="happy-freelancer-info">
                              <h4>jonathon doe</h4>
                              <p>web designer</p>
                           </div>
                        </div>
                     </div>
    </div>
    <div class="carousel-item">
  <div class="owl-item">
                        <div class="single-happy-freelancer">
                        <div class="happy-freelancer-img">
                           <img src="home_assets/img/testimonial-1.jpg" alt="testimonial 1">
                        </div>
                        <div class="happy-freelancer-text">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est.</p>
                           <div class="happy-freelancer-info">
                              <h4>jonathon doe</h4>
                              <p>web designer</p>
                           </div>
                        </div>
                     </div>
                  </div>
    </div>
    <div class="carousel-item">
  <div class="owl-item">
                        <div class="single-happy-freelancer">
                        <div class="happy-freelancer-img">
                           <img src="home_assets/img/testimonial-1.jpg" alt="testimonial 1">
                        </div>
                        <div class="happy-freelancer-text">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est.</p>
                           <div class="happy-freelancer-info">
                              <h4>jonathon doe</h4>
                              <p>web designer</p>
                           </div>
                        </div>
                     </div>
                  </div>
    </div>
  </div>
</div>


</div>
</div>

</section>







<script type="text/javascript">
   (function ($) {
   $.fn.countTo = function (options) {
      options = options || {};
      
      return $(this).each(function () {
         // set options for current element
         var settings = $.extend({}, $.fn.countTo.defaults, {
            from:            $(this).data('from'),
            to:              $(this).data('to'),
            speed:           $(this).data('speed'),
            refreshInterval: $(this).data('refresh-interval'),
            decimals:        $(this).data('decimals')
         }, options);
         
         // how many times to update the value, and how much to increment the value on each update
         var loops = Math.ceil(settings.speed / settings.refreshInterval),
            increment = (settings.to - settings.from) / loops;
         
         // references & variables that will change with each update
         var self = this,
            $self = $(this),
            loopCount = 0,
            value = settings.from,
            data = $self.data('countTo') || {};
         
         $self.data('countTo', data);
         
         // if an existing interval can be found, clear it first
         if (data.interval) {
            clearInterval(data.interval);
         }
         data.interval = setInterval(updateTimer, settings.refreshInterval);
         
         // initialize the element with the starting value
         render(value);
         
         function updateTimer() {
            value += increment;
            loopCount++;
            
            render(value);
            
            if (typeof(settings.onUpdate) == 'function') {
               settings.onUpdate.call(self, value);
            }
            
            if (loopCount >= loops) {
               // remove the interval
               $self.removeData('countTo');
               clearInterval(data.interval);
               value = settings.to;
               
               if (typeof(settings.onComplete) == 'function') {
                  settings.onComplete.call(self, value);
               }
            }
         }
         
         function render(value) {
            var formattedValue = settings.formatter.call(self, value, settings);
            $self.html(formattedValue);
         }
      });
   };
   
   $.fn.countTo.defaults = {
      from: 0,               // the number the element should start at
      to: 0,                 // the number the element should end at
      speed: 1000,           // how long it should take to count between the target numbers
      refreshInterval: 100,  // how often the element should be updated
      decimals: 0,           // the number of decimal places to show
      formatter: formatter,  // handler for formatting the value before rendering
      onUpdate: null,        // callback method for every time the element is updated
      onComplete: null       // callback method for when the element finishes updating
   };
   
   function formatter(value, settings) {
      return value.toFixed(settings.decimals);
   }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
   formatter: function (value, options) {
     return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
   }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
   var $this = $(this);
   options = $.extend({}, options || {}, $this.data('countToOptions') || {});
   $this.countTo(options);
  }
});
</script>



       
           
       
       
     
     <?php
include 'home_assets/inc/footer.php';     
?>    

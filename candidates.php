<?php
include 'home_assets/inc/header.php';
include 'home_assets/inc/dbconnect.php';    
?>  


         <!-- Breadcromb Area Start -->
    <section class="jobguru-banner-area">
         <div class="banner-slider owl-carousel">
            <div class="banner-single-slider-other slider-item-2">
               <div class="slider-offset"></div>
            </div>
         </div>
      </section>

      <!-- Breadcromb Area End -->
       
       
      <!-- Top Job Area Start -->
      <section class="jobguru-top-job-area browse-page section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-12">
                  <div class="job-grid-sidebar">
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-location">
                        <h3>location</h3>
                        <div class="job-sidebar-box">
                           <form>
                              <p>
                                 <input type="search" placeholder="Location">
                              </p>
                              <p class="location-value">
                                 <input type="text" value="50">
                              </p>
                              <div class="dropdown">
                                 <button class="btn-dropdown dropdown-toggle" type="button" id="location" data-toggle="dropdown" aria-haspopup="true">km</button>
                                 <ul class="dropdown-menu" aria-labelledby="location">
                                    <li>km</li>
                                    <li>miles</li>
                                 </ul>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-keywords">
                        <h3>Keywords</h3>
                        <div class="job-sidebar-box">
                           <form>
                              <select class="sidebar-category-select" name="states[]" multiple="multiple">
                                 <option value="1">accounting</option>
                                 <option value="2">finance</option>
                                 <option value="3">automotive</option>
                                 <option value="4">construction</option>
                                 <option value="5">photoshop</option>
                                 <option value="6">graphics</option>
                                 <option value="7">After affects</option>
                                 <option value="8">poster design</option>
                              </select>
                           </form>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-category">
                          <h3>Category</h3>
                        <div class="job-sidebar-box">
                           <form>
                              <select class="sidebar-category-select-2" name="states[]">
                                 <option value="1">any category</option>
                                 <option value="2">accounting/finance</option>
                                 <option value="3">automotive jobs</option>
                                 <option value="4">construction</option>
                                 <option value="5">design, art & multimedia</option>
                                 <option value="6">education training</option>
                                 <option value="7">restaurent/food</option>
                                 <option value="7">programming/tech</option>
                                 <option value="7">sales/marketing</option>
                                 <option value="7">data science/analysis</option>
                              </select>
                           </form>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-location">
                        <h3>Date Posted</h3>
                        <div class="date-post-job job-sidebar-box">
                           <div class="form-group form-radio">
                              <input id="last_hour" name="radio" type="radio">
                              <label for="last_hour" class="inline control-label">last hour</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="last_24" name="radio" type="radio">
                              <label for="last_24" class="inline control-label">Last 24 hours</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="last_7" name="radio" type="radio">
                              <label for="last_7" class="inline control-label">Last 7 days</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="last_14" name="radio" type="radio">
                              <label for="last_14" class="inline control-label">Last 14 days</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="last_30" name="radio" type="radio">
                              <label for="last_30" class="inline control-label">Last 30 days</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="last_all" name="radio" type="radio">
                              <label for="last_all" class="inline control-label">all</label>
                           </div>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-type">
                        <h3>job type</h3>
                        <div class="job-sidebar-box">
                           <ul>
                              <li class="checkbox">
                                 <input class="checkbox-spin" type="checkbox" id="Freelance" />
                                 <label for="Freelance"><span></span>Freelance</label>
                              </li>
                              <li class="checkbox">
                                 <input class="checkbox-spin" type="checkbox" id="Full_Time" />
                                 <label for="Full_Time"><span></span>Full Time</label>
                              </li>
                              <li class="checkbox">
                                 <input class="checkbox-spin" type="checkbox" id="Internship" />
                                 <label for="Internship"><span></span>Internship</label>
                              </li>
                              <li class="checkbox">
                                 <input class="checkbox-spin" type="checkbox" id="Part_Time" />
                                 <label for="Part_Time"><span></span>Part Time</label>
                              </li>
                              <li class="checkbox">
                                 <input class="checkbox-spin" type="checkbox" id="Temporary" />
                                 <label for="Temporary"><span></span>Temporary</label>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-salary">
                        <h3>Filter by Salary</h3>
                        <div class="job-sidebar-box">
                           <p>
                              <input type="text" id="amount" readonly>
                           </p>
                           <div id="slider"></div>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                  </div>
               </div>
               <div class="col-lg-9 col-md-12">
                  <div class="job-grid-right">
                     <div class="browse-job-head-option">
                        <div class="job-browse-search">
                           <form>
                              <input type="search" placeholder="Search Jobs Here...">
                              <button type="submit"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                        <div class="job-browse-action">
                           <div class="email-alerts">
                              <input type="checkbox" class="styled" id="b_1">
                              <label class="styled" for="b_1">email alerts for this search</label>
                           </div>
                           <div class="dropdown">
                              <button class="btn-dropdown dropdown-toggle" type="button" id="dropdowncur" data-toggle="dropdown" aria-haspopup="true">Short By</button>
                              <ul class="dropdown-menu" aria-labelledby="dropdowncur">
                                 <li>Newest</li>
                                 <li>Oldest</li>
                                 <li>Random</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     
                        <?php
                        //FETCH ALERT DATA
                        /**
                                  $sql= "SELECT * FROM rp_jobs";
                              $query = mysqli_query($boom, $sql);
                                    if (mysqli_num_rows ($query) > 0) {
                                     while($row = mysqli_fetch_assoc($query)) {
                                       $image        = '<img src="home_assets/img/logo.png" alt="company image"';
                                       $company     = $row['rp_user_id'];
                                       $title       = $row['rp_job_title'];
                                       $salary      = $row['rp_salary_from'];
                                       $salary2     = $row['rp_salary_to'];                                         
                                       $location    = $row['rp_state']; 
                                       $deadline     = $row['rp_deadline']  
                                       **/                       
                                    
                                 ?>
                                 <div class="single-candidate-list">
                           <div class="main-comment">
                              <div class="candidate-image">
                                 <img src="home_assets/img/msg-4.png" alt="author">
                              </div>
                              <div class="candidate-text">
                                 <div class="candidate-info">
                                    <div class="candidate-title">
                                       <h3><a href="#">Kathy Crawford</a></h3>
                                    </div>
                                    <p>Laravel Dev</p>
                                 </div>
                                 <div class="candidate-text-inner">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                 </div>
                                 <div class="candidate-text-bottom">
                                    <div class="candidate-text-box">
                                       <p class="open-icon"><i class="fa fa-thumbs-up"></i> 100% job success</p>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Berlin</p>
                                       <p class="varify"><i class="fa fa-check"></i> $50 / hr</p>
                                    </div>
                                    <div class="candidate-action">
                                       <a href="view-candidate" class="jobguru-btn-2">view profile</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>



                       
                     <!-- end row -->
                     <div class="row">
                        <div class="col-md-12">
                           <div class="pagination-box-row">
                              <p>Page 1 of 6</p>
                              <ul class="pagination">
                                 <li class="active"><a href="#">1</a></li>
                                 <li><a href="#">2</a></li>
                                 <li><a href="#">3</a></li>
                                 <li>...</li>
                                 <li><a href="#">6</a></li>
                                 <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- end pagination row -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Top Job Area End -->


     <?php
include 'home_assets/inc/footer.php';     
?>    

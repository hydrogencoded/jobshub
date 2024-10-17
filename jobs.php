<?php
include 'home_assets/inc/header.php';
include 'home_assets/inc/dbconnect.php';    
?>
<?php


        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 4;
        $offset = ($pageno-1) * $no_of_records_per_page;



        $total_pages_sql = "SELECT COUNT(*) FROM rp_jobs";
        $result = mysqli_query($boom,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
       

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
                     <div class="row">
                        <?php
                        //FETCH ALERT DATA
                                  $sql= "SELECT * FROM rp_jobs LIMIT $offset, $no_of_records_per_page";
                              $query = mysqli_query($boom, $sql);
                                    if (mysqli_num_rows ($query) > 0) {
                                     while($row = mysqli_fetch_assoc($query)) {
                                       $id          = $row['id'];
                                       $logo        = $row['rp_company_logo'];
                                       $company     = $row['rp_user_id'];
                                       $title       = $row['rp_job_title'];
                                       $salary      = $row['rp_salary_from'];
                                       $salary2     = $row['rp_salary_to'];                                         
                                       $location    = $row['rp_state']; 
                                       $deadline     = $row['rp_deadline']                         
                                    
                                 ?>
                        <div class="col-lg-6 col-md-12">
                           <div class="sigle-top-job">
                              <div class="top-job-company-image">
                                 <div class="company-logo-img">
                                    <a href="#">
                                    <img src= 'remployer/<?php echo $logo;?>' alt="company logo" width="180" />
                                    </a>
                                 </div>
                                 <h3><a href="#"><?php echo "$title"; ?></a></h3>
                              </div>
                              <div class="top-job-company-desc">
                                 <p><b>Location:</b> <span class="company-state"><i class="fa fa-map-marker"></i> <?php echo "$location";?></span></p>
                                   <p> <b>Salary:</b> <span class="company-state"><i class="fa fa-credit-card-alt"></i> <?php echo "$salary - $salary2";?></span></p>
                                   <p><b>Application Deadline:</b> <span class="company-state"><i class="fa fa-map-marker"></i> <?php echo "$deadline";?></span></p>
                                 <div class="top-job-company-btn">
                                    <a href="view-job?job=<?php echo $title;?>" class="jobguru-btn-2">VIEW JOB DETAILS</a>
                                 </div>
                              </div>            
                           </div>
                        </div>
                        <?php } } ?>
                        </div>
                     </div>
                     <!-- end row -->
                     <div class="row">
                        <div class="col-md-12">
                           <div class="pagination-box-row">
                              <p>Page 1 of 6</p>
                              <ul class="pagination">
                                 <li class="active"><a href="?pageno=1">1</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
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

<?php
        session_start();

        $admin_id
 = $_SESSION['admin'] ;
         if(!$_SESSION["admin"]) {
            header("index.php");
         }

        //include Header and Side Bar
            include 'inc/header.php';
            include 'inc/navbar.html';
            include 'assets/inc/admin_controller.php';
        ?>

  
  <?php
    if (isset($_SESSION['notification'])) {
    $notification = $_SESSION['notification'];
    }
    ?>
                        
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Add new candidate</h2>
                    
                    </header>

                    <!-- start: page -->

                    <div class="row  ">
                            <div class="col-lg-9">
                                <section class="card mt-auto">
                                    <div class="card-body">
                                        <div class="panel-body">
                                               <section class="card">
                                                <?php 
                                if (isset($notification)) {
                         echo $notification; 
                                        }?>
                                <h2 class="card-title">Add New Candidate</h2>
                                 </header>
                                 <hr>
                                    <form class="form-horizontal" action="" method="POST">
                                <div class="col-lg-12">
                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>FIRST NAME</strong></label>
                                                <input type="text" name="fname" placeholder="" class="form-control" required="">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>LAST NAME</strong></label>
                                                <input type="text" name="lname" placeholder="" class="form-control" required="">
                                            </div>

                                             <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>EMAIL ADDRESS</strong></label>
                                                <input type="text" name="lname" placeholder="" class="form-control" required="">
                                            </div>

                                             <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>PHONE NUMBER</strong></label>
                                                <input type="text" name="lname" placeholder="" class="form-control" required="">
                                            </div>



                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>GENDER</strong></label>
                                <select name="category" class="form-control input-lg mb-md">
                            <option value="Computer Engineering">MALE</option>
                            <option value="Mechanical Engineering">FEMALE</option>
                          
                        </select>
                    </div>
                        <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>OCCUPATION (HEADLINE)</strong></label>
                                                                    <input type="text" name="lname" placeholder="" class="form-control" required="">
                                            </div>
                

                    <div class="col-lg-6">
                        
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>USERNAME</strong></label>
                                                <input type="text" name="lname" placeholder="" class="form-control" required="">
                                            </div>

                                              <div class="col-lg-6">
                        
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>PASSWORD</strong></label>
                                                <input type="text" name="lname" placeholder="" class="form-control" required="">
                                            </div>
                    </div>

                 
                    <div class="mb-3 hidden-lg">
                    </div>
                                                  </div>
                                        <div class="clearfix">
                                        <button name="addalert" type="submit" class="btn btn-sm btn-success"> ADD NEW CANDIDATE</button>

                                       </div>
                                    
                                </section>
                            </form>
                        </div>
                 















                                    </div>
                                </section>
                            </div>

</body>         


<?php   include 'inc/footer.html'; ?>

<?php
unset($_SESSION['notification']);
?>
<?php
        session_start();

        $candidate_id
 = $_SESSION['user'] ;
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
                        
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Job Alerts</h2>
                    
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
                                <h2 class="card-title">Add New Alert</h2>
                                 </header>
                                 <hr>
                                    <form class="form-horizontal" action="" method="POST">
                                <div class="col-lg-12">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>TITLE</strong></label>
                                                <input type="text" name="title" placeholder="" class="form-control" required="">
                                            </div>

                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>CATEGORIES</strong></label>
                                <select name="category" class="form-control input-lg mb-md">
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Mechatronics">Mechatronics</option>
                        </select>
                    </div>
                        <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>LOCATION</strong></label>
                                <select name="location" class="form-control input-lg mb-md">
                            <option value="Computer Engineering">ABIA </option>
                            <option value="Mechanical Engineering">ADAMAWA</option>
                            <option value="Mechatronics">AKWAIBOM</option>
                        </select>
                    </div>

                    <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput"><strong>SKILLS</strong></label>
                                <select name="skill" class="form-control input-lg mb-md">
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Mechatronics">Mechatronics</option>
                        </select>
                    </div>


                    <div class="col-lg-6">
                             <label class="col-form-label" for="formGroupExampleInput"><strong class="title"> FREQUENCY</strong></label>
                                <select name="frequency" class="form-control input-lg mb-md" Value="None Selected">
                            <option value="Computer Engineering">Daily</option>
                            <option value="Mechanical Engineering">Weekly</option>
                        </select>
                    </div>
                    <div class="mb-3 hidden-lg">
                    </div>
                                                  </div>
                                        <div class="clearfix">
                                        <button name="addalert" type="submit" class="btn btn-sm btn-success"> ADD NEW ALERT</button>

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
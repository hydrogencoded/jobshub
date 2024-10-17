		<?php
        session_start();

        $candidate_id = $_SESSION['user'] ;
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
     $ssql= "SELECT * FROM rp_candidate WHERE cd_username='$candidate_id'";
     $query = mysqli_query($boom, $ssql);
     if (mysqli_num_rows($query) > 0 ) {
         while($row = mysqli_fetch_assoc($query)) {
     
     ?>


<section role="main" class="content-body">
					<header class="page-header">
						<h2>Change Login Password</h2>	
					</header>


                

					<!-- start: page -->

													<div class="col-md-12 mb-4 mb-xl-0">
					
                            <div class="col-md-12">
                                <section class="card mt-auto">
                                    <div class="card-body">
                                        <div class="panel-body">
                                               <section class="card">
                                                <?php 
                                if (isset($notification)) {
                         echo $notification; 
                                        }?>
                                                             </header>



                                 <div class="card-body">
                                        
                                    <form class="form-horizontal" action="" method="POST">

                                <div class="col-lg-12">

                                                            <h5><b class="text-info">CHANGE PASSWORD</b> </h5>
 <div class="row form-group">

                                            <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">Old Password</label>
                                                <input type="text" name="oldpw" placeholder="" class="form-control" value="">
                                            </div>

                                                 <div class="col-lg-6">
                                                <label class="col-form-label" for="formGroupExampleInput">New Password</label>
                                                <input type="text" name="newpw" placeholder="" class="form-control"  value="">
                                            </div>

                                            </div> 


                                        
						<div class="clearfix">
                                        <button name="updatepassword" type="submit" class="btn btn-sm btn-success"> Update Password</button>

                                       </div>
                                    
                                </section>
                            </div>
                        </form>
                          
                       

                        	
                    </section>
                </div>
            </div>
    </div>

<?php   }}?>


<?php   include 'inc/footer.html'; ?>

<?php
unset($_SESSION['notification']);
?>

							
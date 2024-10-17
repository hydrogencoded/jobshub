<?php
/***ADMIN DASHBOARD CONTROLLER
* LOGIN
* SIGN UP 
* PROFILE PAGE
*/
session_start();
include 'dbconnect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
error_reporting(E_ERROR | E_WARNING | E_PARSE);


//EMPLOYER LOGIN
      if(isset($_POST['submit'])){
  $username   = mysqli_escape_string($boom, $_POST['username']);
  $password   = mysqli_escape_string($boom, $_POST['pwd']);

  $sql    = "SELECT * FROM rp_admin WHERE rp_username = '$username' AND rp_password = '$password'";
  $result   = mysqli_query($boom, $sql);

 if(mysqli_num_rows($result)  > 0){
           $_SESSION['admin'] = $_POST['username']; 
        header("Location:index");
        }else {
              $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize; text-align: center;' > Psst!! That login is incorrect. <br> You might wanna try again </p>
</div>
</div>";
        header("Location:signin");
        exit();

            }
              }










//ADD CANDIDATE SIGNUP
if (isset($_POST['register2'])) {
$company       = mysqli_escape_string($boom, $_POST['company']);
$email         = mysqli_escape_string($boom, $_POST['email2']);
$username      = mysqli_escape_string($boom, $_POST['username2']);
$username      = preg_replace('/(!|@|#|$|%|\^|\&|\(|\)| _|\+|\|\\|`|~)/is', '', $username);
$password      = mysqli_escape_string($boom, $_POST['password2']);
$hash          = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
// Set an array of banned names.
    $banned_names = array('Admin', 'admin', 'sex', 'fuck', 'sexy', 'dick', 'pussy', 'sexxy', 'ass', 'scam', 'mod');

// check if the name is banned.
if (in_array($username, $banned_names)) {
        $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Invalid character found in username entered.</p>
</div>
</div>";  
            header("Location: signup.php");
            exit();       
}

//check username exists
    $check_if_username_exists = mysqli_query($boom, "SELECT  ep_username FROM rp_employer WHERE ep_username ='$username'");
    if (mysqli_num_rows($check_if_username_exists) > 0) {
$_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Username has been used already !</p></div></div>"; 
header("Location: signup.php");
            exit();
                     }
        
  //Check if Email Exist
    $check_if_email_exists = mysqli_query($boom, "SELECT ep_email FROM rp_employer WHERE ep_email ='$email'");
    if (mysqli_num_rows($check_if_email_exists) > 0) {
$_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>The Email has been Used already!</p></div></div>"; 
  header("Location: signup.php");
            exit();
                     }

$csql = "INSERT INTO rp_employer(ep_company,ep_email,ep_username,ep_password,ep_hash) VALUES ('$company','$email','$username','$password','$hash')";
       $res = mysqli_query($boom, $csql);
        if ($res) {
      echo "<div class='alert alert-success'><h3 class=\"text-center\">Account Created Successfully <br><h4 class = \"text-center\">Proceed to <a href=\"index.php\">Login</h4></div>";
         }
}





//ADD JOB

if (isset($_POST['addjob'])) {
$title    = mysqli_escape_string($boom, $_POST['title']);
$desc     = mysqli_escape_string($boom, $_POST['desc']);
$category = mysqli_escape_string($boom, $_POST['category']);
$state    = mysqli_escape_string($boom, $_POST['state']);
$address  = mysqli_escape_string($boom, $_POST['address']);
$salaryf  = mysqli_escape_string($boom, $_POST['salaryf']);
$salaryt  = mysqli_escape_string($boom, $_POST['salaryt']);
$salarypf = mysqli_escape_string($boom, $_POST['salarypf']);
$deadline = mysqli_escape_string($boom, $_POST['deadline']);
$email    = mysqli_escape_string($boom, $_POST['email']);
$cweb     = mysqli_escape_string($boom, $_POST['cweb']);

$date_created = date("Y/m/d"); 

if (empty($title) || empty($desc) || empty($category) || empty($state)|| empty($address) || empty($email) || empty($salaryf) || empty($salaryt) || empty($deadline)){
                    $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>You need to fill all the requred fields.</p>
</div>
</div>";
header("Location: add-job");
            exit();
       
    }

    $csql= "SELECT * FROM rp_employer WHERE ep_username ='$user_id'";
      $cquery = mysqli_query($boom, $csql);
       if (mysqli_num_rows($cquery) > 0 ) {
      while($row = mysqli_fetch_assoc($cquery)) {
          $company_name = $row ['ep_company'];
          $company_logo = $row ['ep_logo'];

          }}

$asql= "INSERT INTO rp_jobs(`id`, `rp_user_id`,`rp_company_name`,`rp_company_logo`,`rp_job_title`, `rp_job_desc`, `rp_job_category`, `rp_state`, `rp_address`, `rp_salary_from`, `rp_salary_to`, `rp_salary_postfix`, `rp_deadline`, `rp_email_submission`, `rp_company_website`, `rp_total_views`, `rp_total_applications`, `rp_date_created`) VALUES ('','$user_id','$company_name','$company_logo','$title','$desc','$category','$state','$address','$salaryf','$salaryt','$salarypf','$deadline','$email','$cweb','0','0','$date_created')";
$ress=  mysqli_query($boom,$asql);
if($ress) {
 $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Job Added Successfully</p></div></div>";
    header("Location: add-job");
            exit();
}       
  }


//UPDATE COMPANY PROFILE
  if (isset($_POST['updateprofile'])) {
   $name    = mysqli_escape_string($boom, $_POST['name']);
   $number  = mysqli_escape_string($boom, $_POST['number']);
   $email   = mysqli_escape_string($boom, $_POST['email']);
   $headline= mysqli_escape_string($boom, $_POST['headline']);
   $website = mysqli_escape_string($boom, $_POST['website']);
   $founded = mysqli_escape_string($boom, $_POST['founded']);
   $size    = mysqli_escape_string($boom, $_POST['size']);
   $desc    = mysqli_escape_string($boom, $_POST['desc']);
   $state   = mysqli_escape_string($boom, $_POST['state']);
   $address = mysqli_escape_string($boom, $_POST['address']);


   $fb    = mysqli_escape_string($boom, $_POST['fb']);
   $tw    = mysqli_escape_string($boom, $_POST['tw']);
   $ld    = mysqli_escape_string($boom, $_POST['ld']);
   $in    = mysqli_escape_string($boom, $_POST['in']);

    
   //Run query
   $sqlll = "UPDATE rp_employer SET ep_email='$email',ep_phone='$number',ep_company='$name',ep_headline='$headline',ep_company_website='$website',ep_founded_date='$founded',ep_company_size='$size',ep_state='$state',ep_address='$address',ep_description='$desc',ep_facebook= '$fb', ep_twitter='$tw', ep_linkedin= '$ld', ep_instagram='$in' WHERE ep_username= '$user_id'";

   $resl=  mysqli_query($boom,$sqlll);
   
   if ($resl) {
    $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Profile Updated Successfully</p></div></div>";
    header("Location: profile-edit");
            exit();
}       
  }

//UPDATE PASSWORD
   if (isset($_POST['updatepassword'])) {
   $oldpw    = mysqli_escape_string($boom, $_POST['oldpw']);
   $newpw    = mysqli_escape_string($boom, $_POST['newpw']);


         if (empty($oldpw || empty($newpw))) {
            $_SESSION['notification'] = "<div class='notification'>
                                <div class='alert alert-danger alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                        <p style='text-trasform: capitalize;'><strong>ERROR: </strong>Please Fill in the required fields to change your password</p>
                                </div>
                            </div>";
            header("Location: change-password");
            exit();
        }
    
    $psql   = "SELECT ep_password FROM rp_employer WHERE ep_password = '$oldpw' AND ep_username= '$user_id'";
        $qpsql  = mysqli_query($boom,$psql);
    if (mysqli_num_rows($qpsql)  == 0) {
        $_SESSION['notification'] = "<div class='notification'>
                                <div class='alert alert-danger alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                        <p style='text-trasform: capitalize;'><strong>ERROR: </strong>Your old password is incorrect</p>
                                </div>
                            </div>";
        header("Location: change-password");
        exit();
    }

    $ppsql = "UPDATE rp_employer SET ep_password = '$newpw' WHERE ep_username = '$user_id'";
       $rppsql=  mysqli_query($boom,$ppsql);
       if ($rppsql) {
     $_SESSION['notification'] = "<div class='notification'>
                                <div class='alert alert-success alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                        <p style='text-trasform: capitalize;'><strong>Success: </strong>Your password has been changed successfully .</p>
                                </div>
                            </div>";
        header("Location: change-password");
        exit();
       }

   } 


// upload profile picture
$target_dirr = "img/video/";
$target_filee = $target_dir . basename($_FILES["videotoUpload"]["name"]);
$uploadOkk = 1;
$videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["btn-upload"])) {
    

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>File size is to large </p></div></div>";
    header("Location: profile-edit");
            exit();
    $uploadOkk = 0;
}

// Allow certain file formats
if($videoFileType != "mpeg" && $videoFileType != "mp4" ) {
    $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Sorry, File tyepe is not allowed </p></div></div>";
    header("Location: profile-edit");
            exit();
    $uploadOkk = 0;
 }
// // Check if $upload Ok is set to 0 by an error
if ($uploadOkk == 0) {
  $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Sorry your logo cannot be uploaded, try again</p></div></div>";
    header("Location: profile-edit");
            exit();

  // if everything is ok, try to upload file
 } else {
if (move_uploaded_file($_FILES["videotoUpload"]["tmp_name"], $target_filee)) { 
  //check if company has logo before 

  $checklogo  = "SELECT * FROM rp_employer WHERE ep_username ='$user_id'";
      $qchecklogo = mysqli_query($boom,$checklogo);
        if (mysqli_num_rows($qchecklogo) == 0  ) {
          $insertlogo = "INSERT INTO rp_employer (rp_logo) VALUES ($target_filee') ";
            $queryinsert= mysqli_query($boom,$insertlogo);
        } if ($queryinsert) { 

 $_SESSION['notification'] = "<div class='notification'>  
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Your Logo has been uploaded successfully</p></div></div>";
    header("Location: profile-edit");
            exit();
} 
// Update company logo
  if (mysqli_num_rows($qchecklogo) > 0  ) {
  $uploadsql= "UPDATE rp_employer SET ep_logo='$target_file' WHERE ep_username= '$user_id'";
    $rup = mysqli_query($boom ,$uploadsql);
        if ($rup) {

          $_SESSION['notification'] = "<div class='notification'>  
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Your Logo has been updated successfully</p></div></div>";
    header("Location: profile-edit");
            exit();
} else {
  $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Logo not updated</p></div></div>";
    header("Location: profile-edit");
            exit();
  }
}          

}
  }
}

//

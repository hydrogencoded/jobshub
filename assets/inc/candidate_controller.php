<?php
/***CANDIDATE DASHBOARD CONTROLLER
* SIGN IN
* SIGN UP 
* PROFILE PAGE
*/
session_start();
include 'dbconnect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
error_reporting(E_ERROR | E_WARNING | E_PARSE);



if(isset($_POST['submit'])){
  $username   = mysqli_escape_string($boom, $_POST['username']);
  $password   = mysqli_escape_string($boom, $_POST['pwd']);

  $sql    = "SELECT * FROM rp_candidate WHERE cd_username = '$username' AND cd_password = '$password'";
  $result   = mysqli_query($boom, $sql);

  if(mysqli_num_rows($result)  > 0){
           $_SESSION['candidate'] = $_POST['username'];
        header("Location: rcandidate/index");
        }else {
              $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Please login with your correct username and password.</p>
</div>
</div>";
        header("Location: signin");
        exit();

            }
              }
      


//SIGNUP SCRIPT
if (isset($_POST['register'])) {
$fullname      = mysqli_escape_string($boom, $_POST['fullname']);
$email         = $_POST['email'];
$username      = mysqli_escape_string($boom, $_POST['username']);
$username      = preg_replace('/(!|@|#|$|%|\^|\&|\(|\)| _|\+|\|\\||~)/is', '', $username);
$password      = mysqli_escape_string($boom, $_POST['password']);
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
            header("Location: signup");
            exit();       
}

//check username exists
    $check_if_username_exists = mysqli_query($boom, "SELECT  cd_username FROM rp_candidate WHERE cd_username ='$username'");
    if (mysqli_num_rows($check_if_username_exists) > 0) {
$_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Username has been used already !</p></div></div>"; 
header("Location: signup");
            exit();
                     }
        
  //Check if Email Exist
    $check_if_email_exists = mysqli_query($boom, "SELECT cd_email FROM rp_candidate WHERE cd_email ='$email'");
    if (mysqli_num_rows($check_if_email_exists) > 0) {
$_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>The Email has been Used already!</p></div></div>"; 
header("Location: signup");
            exit();
                     }

$csql = "INSERT INTO rp_candidate(cd_name,cd_email,cd_username,cd_password) VALUES ('$fullname','$email','$username','$password')";
       $res = mysqli_query($boom, $csql);
        if ($res) {
      echo "<div class='alert alert-success'><h3 class=\"text-center\">Account Created Successfully <br><h4 class = \"text-center\">Proceed to <a href=\"index\">Login</h4></div>";
         }
}



//ADD ALERT
if (isset($_POST['addalert'])) {
  $title     = mysqli_escape_string($boom, $_POST['title']);
  $category  = mysqli_escape_string($boom, $_POST['category']);
  $location  = mysqli_escape_string($boom, $_POST['location']);
  $skill     = mysqli_escape_string($boom, $_POST['skill']);
  $freq      = mysqli_escape_string($boom, $_POST['frequency']); 
  $date_created = date("Y/m/d"); 
  $sqll= "INSERT INTO rp_alerts(user_id, title, category, location, skills, frequency,date_created) VALUES ('$candidate_id
','$title','$category','$location','$skill','$freq','$date_created')";

    $res = mysqli_query($boom,$sqll);
    if ($res) {
    $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Alert Added Successfully</p>
</div>
</div>"; 
header("Location: add-alert");
            exit();


    }
  }
   

//CREATE PROFILE
if (isset($_POST['updateprofile'])) {
  $name       = mysqli_escape_string($boom, $_POST['fname']);
  $pnum       = mysqli_escape_string($boom, $_POST['number']);
  $email      = mysqli_escape_string($boom, $_POST['email']); 
  $dob        = mysqli_escape_string($boom, $_POST['dob']);
  $headline   = mysqli_escape_string($boom, $_POST['headline']);
  $gender     = mysqli_escape_string($boom, $_POST['gender']); 
  $address    = mysqli_escape_string($boom, $_POST['address']);
  $bio        = mysqli_escape_string($boom, $_POST['bio']);
  $sk1        = mysqli_escape_string($boom, $_POST['skill1']);
  $sk2        = mysqli_escape_string($boom, $_POST['skill2']);
  $sk3        = mysqli_escape_string($boom, $_POST['skill3']);
  $sk4        = mysqli_escape_string($boom, $_POST['skill4']);
  $cover      = mysqli_escape_string($boom, $_POST['cover']);

  $sqlo= "UPDATE rp_candidate SET cd_name='$name',cd_email='$email',cd_phone='$pnum',cd_dob='$dob',cd_headline='$headline',cd_gender='$gender',cd_address='$address',cd_bio='$bio',cd_skill_1='$sk1',cd_skill_2='$sk2',cd_skill_3='$sk3',cd_skill_4='$sk4',cd_cover_letter='$cover' WHERE cd_username = '$candidate_id'";

   $pres = mysqli_query($boom,$sqlo);
    if ($pres) {
    $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Profile Updated Successfully</p>
</div>
</div>";
header("Location: profile");
            exit();
          }
       } 







// Upload profile picture
$target_dir = "img/photos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["btn-upload"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {       
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
 //Check if file already exists
if (file_exists($target_file)) {
   $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>File Already exists</p></div></div>";
    header("Location: profile");
            exit();
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
  $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>File size is too large </p></div></div>";
    header("Location: profile");
            exit();
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "png" && $imageFileType != "jpg" ) {
    $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Sorry, Only PNG files are allowed </p></div></div>";
    header("Location: profile");
            exit();
    $uploadOk = 0;
 }
// Check if $upload Ok is set to 0 by an error
if ($uploadOk == 0) {
  $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Sorry your logo cannot be uploaded, try again</p></div></div>";
    header("Location: profile");
            exit();

  // if everything is ok, try to upload file
 } else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { 
  //check if company has logo before 

  $checklogo  = "SELECT * FROM rp_candidate WHERE cd_username ='$candidate_id'";
      $qchecklogo = mysqli_query($boom,$checklogo);
        if (mysqli_num_rows($qchecklogo) == 0  ) {
          $insertlogo = "INSERT INTO rp_candidate (cd_photo) VALUES ($target_file') ";
            $queryinsert= mysqli_query($boom,$insertlogo);
        } if ($queryinsert) { 

 $_SESSION['notification'] = "<div class='notification'>  
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Your Logo has been uploaded successfully</p></div></div>";
    header("Location: profile");
            exit();
} 
// Update company logo
  if (mysqli_num_rows($qchecklogo) > 0  ) {
  $uploadsql= "UPDATE rp_candidate SET cd_photo='$target_file' WHERE cd_username= '$candidate_id'";
    $rup = mysqli_query($boom ,$uploadsql);
        if ($rup) {

          $_SESSION['notification'] = "<div class='notification'>  
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Your Logo has been updated successfully</p></div></div>";
    header("Location: profile");
            exit();
} else {
  $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Logo not updated</p></div></div>";
    header("Location: profile");
            exit();
  }
}          

}
  }
}




// Upload Video Resume
$target_dirr = "img/video/";
$target_filee = $target_dirr . basename($_FILES["videoToUpload"]["name"]);
$uploadOkk = 1;
$imageFileTypee = strtolower(pathinfo($target_filee,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["vd-upload"])) {

 //Check if file already exists
if (file_exists($target_filee)) {
   $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>File Already exists</p></div></div>";
    header("Location: profile");
            exit();
}

// Check file size
if ($_FILES["videoToUpload"]["size"] > 5000000) {
  $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>File size is too large </p></div></div>";
    header("Location: profile");
            exit();
    $uploadOkk = 0;
} 

// Allow certain file formats
if($imageFileTypee != "mp4" && $imageFileTypee != "mpeg" ) {
    $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Sorry, Only video files are allowed </p></div></div>";
    header("Location: profile");
            exit();
    $uploadOkk = 0;
 }
// Check if $upload Ok is set to 0 by an error
if ($uploadOkk == 0) {
  $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Sorry your logo cannot be uploaded, try again</p></div></div>";
    header("Location: profile");
            exit();

  // if everything is ok, try to upload file
 } else {
if (move_uploaded_file($_FILES["videoToUpload"]["tmp_name"], $target_filee)) { 
  //check if company has logo before 

  $checkvideo  = "SELECT * FROM rp_candidate WHERE cd_username ='$candidate_id'";
      $qcheckvideo = mysqli_query($boom,$checkvideo);
        if (mysqli_num_rows($qchecklogo) == 0  ) {
          $insertvideo = "INSERT INTO rp_candidate (cd_video) VALUES ($target_filee') ";
            $queryinsertv= mysqli_query($boom,$insertvideo);
        } if ($queryinserttv) { 

 $_SESSION['notification'] = "<div class='notification'>  
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Your video has been uploaded successfully</p></div></div>";
    header("Location: profile");
            exit();
} 
// Update company logo
  if (mysqli_num_rows($qcheckvideo) > 0  ) {
  $uploadsqll= "UPDATE rp_candidate SET cd_video='$target_filee' WHERE cd_username= '$candidate_id'";
    $ru = mysqli_query($boom ,$uploadsqll);
        if ($ru) {

          $_SESSION['notification'] = "<div class='notification'>  
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Your video has been updated successfully</p></div></div>";
    header("Location: profile");
            exit();
} else {
  $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Video not updated</p></div></div>";
    header("Location: profile");
            exit();
  }
}          

}
  }
}



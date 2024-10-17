<?php
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
           $_SESSION['user'] = $_POST['username'];
        header("Location: rcandidate/index.php");
        }else {
              $_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Please login with your correct username and password.</p>
</div>
</div>";
        header("Location: index.php");
        exit();

            }
              }
      


//SIGNUP SCRIPT
if (isset($_POST['register'])) {
$fullname      = mysqli_escape_string($boom, $_POST['fullname']);
$email         = $_POST['email'];
$username      = mysqli_escape_string($boom, $_POST['username']);
$username      = preg_replace('/(!|@|#|$|%|\^|\&|\(|\)| _|\+|\|\\|`|~)/is', '', $username);
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
            header("Location: signup.php");
            exit();       
}

//check username exists
    $check_if_username_exists = mysqli_query($boom, "SELECT  cd_username FROM rp_candidate WHERE cd_username ='$username'");
    if (mysqli_num_rows($check_if_username_exists) > 0) {
$_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>Username has been used already !</p></div></div>"; 
header("Location: signup.php");
            exit();
                     }
        
  //Check if Email Exist
    $check_if_email_exists = mysqli_query($boom, "SELECT cd_email FROM rp_candidate WHERE cd_email ='$email'");
    if (mysqli_num_rows($check_if_email_exists) > 0) {
$_SESSION['notification'] = "<div class='notification'>
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
    <p style='text-trasform: capitalize;'>The Email has been Used already!</p></div></div>"; 
header("Location: signup.php");
            exit();
                     }

$csql = "INSERT INTO rp_candidate(cd_name,cd_email,cd_username,cd_password) VALUES ('$name','$mail','$username','$password')";
       $res = mysqli_query($boom, $csql);
        if ($res) {
      echo "<div class='alert alert-success'><h3 class=\"text-center\">Account Created Successfully <br><h4 class = \"text-center\">Proceed to <a href=\"index.php\">Login</h4></div>";
         }
}




//Get User profile       
      $sql= "SELECT * FROM rp_candidate WHERE cd_username ='$user_id'";
      $query = mysqli_query($boom, $sql);
      if (mysqli_num_rows ($query) > 0) {
                while($row = mysqli_fetch_assoc($query)) {
                       $un     = $row['cd_username'];
                      }
                    }

              
      ?>      


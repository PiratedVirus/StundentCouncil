<?php

 ob_start();
 session_start();

 if( isset($_SESSION['user'])!="" ){
  header("Location: home.php");
 }


 include_once 'dbconnect.php';
 global $conn;



 $res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $error = false;



 if ( isset($_POST['btn-signup']) ) {

  // clean user inputs to prevent sql injections
  $name = trim($_POST['uname']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);


  $enroll = trim($_POST['enroll']);
  $enroll = strip_tags($enroll);
  $enroll = htmlspecialchars($enroll);

  $email = trim($_POST['cemail']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $pass = trim($_POST['password']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

  $skill = trim($_POST['skill']);
  $skill = strip_tags($skill);
  $skill = htmlspecialchars($skill);



  if (empty($enroll)) {

   $error = true;
   $enrollError = "Please enter your enrollment number.";

  } else {

   // check email exist or not
   $query = "SELECT userId FROM users WHERE userId='$enroll'";

   $result = mysqli_query($conn,$query);
   $count = mysqli_num_rows($result);

   if($count!=0){

    $error = true;
    $enrollError = "Provided Enrollment number is already in use.";

   }else{
    $tester = "SELECT enrollment FROM enrollment WHERE enrollment='$enroll'";
    $result_tester = mysqli_query($conn,$tester);
    $count_tester = mysqli_num_rows($result_tester);

    if($count_tester==0){
        $error = true;
        $enrollError = "Provided Enrollment number not matched.";

      }
   }
 }

     

  // //basic email validation

  // if(!filter_var($email,FILTER_VALIDATE_EMAIL) {

  //  // check email exist or not
  //  $query = "SELECT userEmail FROM users WHERE userEmail='$email'";

  //  $result = mysqli_query($conn,$query);
  //  $count = mysqli_num_rows($result);
  //  if($count!=0){

  //   $error = true;
  //   $emailError = "Provided Email is already in use.";

  //  }
  // }



  // skill validation

  if(empty($skill)){
    $error = true;
    $skillError = "Plese enter branch";
  } else if(strlen($skill) < 2) {

    $error = true;
    $skillError = "Don't fool Us";
  }

  // password encrypt using SHA256();
  $password = hash('sha256', $pass);

  // Gender
  $gender=$_POST['gender'];

  // if there's no error, continue to signup
  if( !$error ) {

   $query = "INSERT INTO users(userId,userName,userEmail,userPass,skills,gender) VALUES('$enroll','$name','$email','$password','$skill','$gender')";
   $res = mysqli_query($conn,$query);

   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($name);
    unset($enroll);
    unset($email);
    unset($pass);
    unset($skill);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later...";
   }

  }


 }


?>
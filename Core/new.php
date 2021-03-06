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


  $mobile = trim($_POST['mobile']);
  $mobile = strip_tags($mobile);
  $mobile = htmlspecialchars($mobile);

  $skill = trim($_POST['branch']);
  $skill = strip_tags($skill);
  $skill = htmlspecialchars($skill);

  // password encrypt using SHA256();
  $password = hash('sha256', $pass);

  function encryptIt( $q ) {
      $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
      $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
      return( $qEncoded );
  }

  function decryptIt( $q ) {
      $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
      $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
      return( $qDecoded );
  }
  $encrypted = encryptIt( $pass );
  $decrypted = decryptIt( $encrypted );
  // echo($decrypted); 


  // Gender
  $gender=$_POST['gender'];

  // if there's no error, continue to signup
  if( !$error ) {

   $addskill = mysqli_query($conn,"INSERT INTO skills(userId,userName) VALUES('$enroll','$name')");
   $query = "INSERT INTO users(userId,userName,userEmail,userPass,skills,gender,mobile) VALUES('$enroll','$name','$email','$encrypted','$skill','$gender',$mobile)";

   $res = mysqli_query($conn,$query);

   if ($res) {
    $errTyp = "success";
    $link = "<a href='Login'>Login Now</a>";
    $errMSG = "Successfully registered, you may $link !";
    // $finalsql = mysqli_query($conn,"SELECT * FROM users WHERE userId='$enroll'");
    // $finalarr = mysqli_fetch_array($finalsql);
    // echo $finalarr['userId'];
    // echo $finalarr['userName'];
    header('Location: https://www.scouncilgeca.com/Login');
    unset($name);
    unset($enroll);
    unset($email);
    unset($pass);
    unset($skill);
   } else {
    $errTyp = "danger";
    $errMSG = "<h4 style='color: red' >Something went wrong, try again later...</h4>";
   }

  }


 }


?>
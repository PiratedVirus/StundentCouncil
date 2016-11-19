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


  // Gender
  $gender=$_POST['gender'];

  // if there's no error, continue to signup
  if( !$error ) {

   $query = "INSERT INTO users(userId,userName,userEmail,userPass,skills,gender) VALUES('$enroll','$name','$email','$encrypted','$skill','$gender')";
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
<?php

    ob_start();
    session_start();
    include 'dbconnect.php';
    $myvalue = $_SESSION['stud_name'];
    $arr = explode(' ',trim($myvalue));
    $fname = $arr[0]; 
    // echo $fname;
    $user =  $_SESSION['stud_id'];



 ?>
<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="theme-color" content="#009688 ">
  <meta name="msapplication-navbutton-color" content="#009688 ">
  <meta name="apple-mobile-web-app-status-bar-style" content="#009688 ">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="../Assets/css/base.css">

  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

      .input-field div.error,.passmsg{
        position: relative;
        top: -1rem;
        left: 0rem;
        font-size: 0.8rem;
        color:red;
        -webkit-transform: translateY(0%);
        -ms-transform: translateY(0%);
        -o-transform: translateY(0%);
        transform: translateY(0%);
      }
      .input-field label.active{
          width:100%;
      }
      .left-alert input[type=text] + label:after, 
      .left-alert input[type=password] + label:after, 
      .left-alert input[type=email] + label:after, 
      .left-alert input[type=url] + label:after, 
      .left-alert input[type=time] + label:after,
      .left-alert input[type=date] + label:after, 
      .left-alert input[type=datetime-local] + label:after, 
      .left-alert input[type=tel] + label:after, 
      .left-alert input[type=number] + label:after, 
      .left-alert input[type=search] + label:after, 
      .left-alert textarea.materialize-textarea + label:after{
          left:0px;
      }
      .right-alert input[type=text] + label:after, 
      .right-alert input[type=password] + label:after, 
      .right-alert input[type=email] + label:after, 
      .right-alert input[type=url] + label:after, 
      .right-alert input[type=time] + label:after,
      .right-alert input[type=date] + label:after, 
      .right-alert input[type=datetime-local] + label:after, 
      .right-alert input[type=tel] + label:after, 
      .right-alert input[type=number] + label:after, 
      .right-alert input[type=search] + label:after, 
      .right-alert textarea.materialize-textarea + label:after{
          right:70px;
      }
  </style>

  <title>Welcome  <?php echo $fname; ?></title>

  
  <script src="../Assets/js/analytics.js"></script>
  <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
  <script src="../Assets/js/passwordchk.js"></script>


</head>
<body>

  <!-- Dropdown Structure -->
  <ul id="settings" class="dropdown-content">
    <li><a href="#!">Change Password</a></li>
    <li><a href="../logout.php?logout">Log Out</a></li>
    <li class="divider"></li>
    <li><a href="http://www.scouncilgeca.com"><b> STUDENT COUNCIL</b></a></li>
  </ul>

	<nav id="home-menu">
    <div class="nav-wrapper">

      <ul id="slide-out" class="side-nav">

          <li><div class="userView">
            <img class="background" src="../Assets/img/b (5).jpg">
            <a href="#"><img class="circle" src="../Assets/img/userios.png"></a>
            <a href="#"><span  class="white-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
            <a href="#"><span class="white-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
          </div></li>
          <li><a href="../view"><img class="slideicon" src="../Assets/img/eye.png"  alt="">View Profile</a></li>
          <li><a href="../home"><img class="slideicon" src="../Assets/img/home.png"  alt="">Home</a></li>
          <li><a href="../user/update"><img class="slideicon" src="../Assets/img/editpro.png"  alt="">Edit Profile</a></li>
          <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
          <li><div class="divider"></div></li>
          <li><a href="http://www.scouncilgeca.com"><b> STUDENT COUNCIL</b></a></li>
          <li><a href="http://www.scouncilgeca.com#team-link">Team</a></li>
          <li><a href="http://www.scouncilgeca.com#contact-link">Contact Us</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="settings">Settings<i class="material-icons right">settings</i></a></li>

      </ul>

      <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
      <i class="material-icons">menu</i></a>

      <!-- <a href="http://www.scouncilgeca.com" class="brand-logo center">Student Council</a> -->
      <a href="http://geca.ac.in" target="_blank" class="brand-logo center downlift"><img src="../Assets/img/final_small.png"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="../logout.php?logout">Log out</a></li>
      <li><a href="http://www.scouncilgeca.com#team-link">Team</a></li>
      <li><a href="http://www.scouncilgeca.com#contact-link">Contact Us</a></li>
      <li><a class="dropdown-button white-text" href="#!" data-activates="settings"><img class="slideicon" style="bottom: -7px;" src="../Assets/img/userios.png"><b><?php echo $fname ?></b><i style="color: #fff; " class="material-icons right spin">settings</i></a></li>

      </ul>


    </div>
  </nav>
<main>
  <div class="row user-name teal">
    <div class="container">
      <div class="col s12 left1">
        <h1 class="hi-header">Hi, <?php echo $fname ?> </h1>
      </div>
    </div>
  </div>


   <div class="container">
     <div class="row">
       <div class="col s12">
         <h3 class="center">
           <?php 

                 $pass = trim($_POST['newpass']);
                 $pass = strip_tags($pass);
                 $pass = htmlspecialchars($pass);

                 function encryptIt( $q ) {
                     $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
                     $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
                     return( $qEncoded );
                 }

                 $encrypted = encryptIt( $pass );



                 $sqlpass = mysqli_query($conn,"UPDATE users SET userPass = '$encrypted' WHERE userId = '$user'");
                 if(!$sqlpass){
                   echo "<span style='color:red;'>Not Saved  </span>";
                   echo "Error is  " .mysqli_error($conn);
                 } 
                   if($sqlpass){
                     echo "<span class='nothnig-to-show gray'> Password Updated Successfully...:) </span>";
                 }

           ?>

         </h3>
       </div>
     </div>
   </div>




</main>

<footer class="page-footer white custom">

  <div class="footer-copyright">
    <div class="container">
     <div class="left">
      <p class="black-text center"><i class="material-icons">code</i>with<i class="material-icons" style="color: #f44336">favorite</i>by <span class="ftr"><a class="ftr" href="https://www.facebook.com/saurabhk20">Saurabh Kulkarni</a> </span>, SE CSE</p>

     </div>

     <div class="right">
      <p class="black-text center">Intiated by <span class="ftr"><a class="ftr" href="https://www.facebook.com/people/Nikhil-Badave/100004117724825">Nikhil Badave</a></span>, Cultural Secretary 2016-17 </p>

     </div>
    </div>
  </div>
</footer>

    <script src="../Assets/js/zxcvbn.js"></script>
    <!-- <script src="../Assets/js/password.js"></script> -->
    <script src="../Assets/js/materialize.js"></script>
    <script src="../Assets/js/init.js"></script>
   

   

</body>
</html>
<?php  ob_end_flush(); ?>

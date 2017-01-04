<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
  // if session is not set this will redirect to login page
  if( !isset($_SESSION['user']) ) {
    header("Location: ../index.php");
    exit;
  }
  
  
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


  <title style="text-transform: capitalize;">Welcome  <?php echo $_SESSION['stud_name']; ?></title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="../Assets/css/base.css">


  <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
  <script src="../Assets/js/dobvailator.js"></script>
  <script src="../Assets/js/analytics.js"></script>
  <style>
    .input-field div.error,.errorTxt20,.errorTxt25{
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
    
    .small-txt{
      position: relative;
      top: -1rem;
      left: 0rem;
      font-size: 0.8rem;
      color:#9e9e9e;
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
</head>
<body>



    <?php 
    require_once 'profile-form.php';
     ?>


     <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>  
     <script src="../Assets/js/materialize.js"></script>  
     <script src="../Assets/js/init.js"></script>
        


    
    
</body>
</html>
<?php ob_end_flush(); ?>
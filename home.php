<?php

    ob_start();
    session_start();
    include 'Core/dbconnect.php';
    $myvalue = $_SESSION['stud_name'];
    $arr = explode(' ',trim($myvalue));
    $fname = $arr[0]; 
    // echo $fname;


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
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }
  </style>

  <title>Welcome  <?php echo $fname; ?></title>

  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="Assets/css/base.css">
</head>
<body>

  <!-- Dropdown Structure -->
  <ul id="settings" class="dropdown-content">
    <li><a href="user/update">Edit Profile</a></li>
    <li><a href="user/password">Change Password</a></li>
    <li><a href="logout.php?logout">Log Out</a></li>
    <li class="divider"></li>
    <li><a href="http://www.scouncilgeca.com"><b> STUDENT COUNCIL</b></a></li>
  </ul>

	<nav id="home-menu">
    <div class="nav-wrapper">

      <ul id="slide-out" class="side-nav">

          <li><div class="userView">
            <img class="background" src="Assets/img/b (5).jpg">
            <a href="#"><img class="circle" src="Assets/img/userios.png"></a>
            <a href="#"><span  class="white-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
            <a href="#"><span class="white-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
          </div></li>
          <li><a href="view"><img class="slideicon" src="Assets/img/eye.png"  alt="">View Profile</a></li>
          <li><a href="user/update"><img class="slideicon" src="Assets/img/editpro.png"  alt="">Edit Profile</a></li>
          <li><a href="logout.php?logout"><img class="slideicon" src="Assets/img/logout.png"  alt="">Log Out</a></li>
          <li><a href="Core/changepass"><img class="slideicon" src="Assets/img/key.png" alt="">Change Password</a></li>
          <li><a href="user/wings"><img class="slideicon" src="Assets/img/forms.png" alt="">Wings Form</a></li>

          <li><div class="divider"></div></li>
          <li><a href="http://www.scouncilgeca.com"><b> STUDENT COUNCIL</b></a></li>
          <li><a href="http://www.scouncilgeca.com#team-link">Team</a></li>
          <li><a href="http://www.scouncilgeca.com#contact-link">Contact Us</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="settings">Settings<i class="material-icons right">settings</i></a></li>

      </ul>

      <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
      <i class="material-icons">menu</i></a>

      <!-- <a href="http://www.scouncilgeca.com" class="brand-logo center">Student Council</a> -->
      <a href="http://geca.ac.in" target="_blank" class="brand-logo center downlift"><img src="Assets/img/final_small.png"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="logout.php?logout">Log out</a></li>
      <li><a href="http://www.scouncilgeca.com#team-link">Team</a></li>
      <li><a href="http://www.scouncilgeca.com#contact-link">Contact Us</a></li>
      <li><a class="dropdown-button white-text" href="#!" data-activates="settings"><img class="slideicon" style="bottom: -7px;" src="Assets/img/userios.png"><b><?php echo $fname ?></b><i style="color: #fff; " class="material-icons right spin">settings</i></a></li>

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
    <div class="col s12 center">
      <?php 
       


             $sql = "SELECT * FROM users  WHERE userId ='".$_SESSION['stud_id']."'";
             $result = mysqli_query($conn, $sql);
             $row = mysqli_fetch_assoc($result);
             $usernamefull = $row['userName'];

             $myvalue = $usernamefull;
             $arr = explode(' ',trim($myvalue));
             $username = $arr[0]; 


             if( $row['notification'] != null){
                $enrollnotf = $row['userId'];

               include "Admin/Notifications/Current/notuser_$enrollnotf.php";

          ?>
          <script>
            newnotification();
            function newnotification() {



              // Let's check if the browser supports notifications
              if (!("Notification" in window)) {
                alert("This browser does not support desktop notification");
              }

              // Let's check whether notification permissions have already been granted
              else if (Notification.permission === "granted") {
                // If it's okay let's create a notification

                randomNotification();



                function randomNotification() {
              var name = '<?php echo $username ?>';
              var number = '<?php echo $row['notification']?>';
              console.log(name,number);
                  var randomQuote = "You have " + number + " new notifications !";
                  var options = {
                      body: randomQuote,
                      icon: 'Assets/img/letter.png',
                  }

                  var n = new Notification('Hi, '+ name + ' !',options);
                  setTimeout(n.close.bind(n), 5000); 
                }

              }

              // Otherwise, we need to ask the user for permission
              else if (Notification.permission !== 'denied') {
                Notification.requestPermission(function (permission) {
                  // If the user accepts, let's create a notification
                  if (permission === "granted") {
                  
                      randomNotification();            

                  }
                });
              }

            }
      </script>


               <form>
                 <input type="submit" class="waves-effect waves-light btn-large update-btn center" name="archives" value="LOAD MORE">
               </form>

          <?php
          

               function loadmore($enrollnotf_func){

                      include "Admin/Notifications/Archives/notuserarchive_$enrollnotf_func.php";
               }

               if(isset($_GET['archives'])){
                loadmore($enrollnotf);
               }


             } else{
               include 'Core/msg.php';
             }

             $conn->close();

        ?>
    </div>
  </div>
</div>
</main>
<?php 

$wings = $row['wings'];

if( $wings != '1'){

 ?>
<div class="container">
  <div class="row user-body">
    <div class="col s12 center">
      <a class="waves-effect waves-light btn-large update-btn" href="user/wings">Submit Form</a>
    </div>

    <p class="nothnig-to-show gray left"> <span id="main-msg">Submit the form for Wings 2017! </span>Please update your profile to dive into world of unlimited possibilities.</p>
  </div>
</div>

<?php } ?>
<footer class="page-footer white custom">

  <div class="footer-copyright">
    <div class="container">
     <div class="center">
      <p class="black-text center"><i class="material-icons">code</i>with<i class="material-icons" style="color: #f44336">favorite</i>by <span class="ftr"><a class="ftr" href="https://www.facebook.com/saurabhk20">Saurabh Kulkarni</a> </span>, SE CSE</p>

     </div>

    </div>
  </div>
</footer>


    <script src="Assets/js/jquery-1.11.3-jquery.min.js"></script>
    <script src="Assets/js/materialize.js"></script>
    <script src="Assets/js/init.js"></script>
    <script src="Assets/js/analytics.js"></script>


</body>
</html>
<?php ob_end_flush(); ?>

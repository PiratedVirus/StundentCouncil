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
  <meta charset="UTF-8">
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
          <li><a href="../home"><img class="slideicon" src="../Assets/img/home.png"  alt="">Home</a></li>
          <li><a href="../view"><img class="slideicon" src="../Assets/img/eye.png"  alt="">View Profile</a></li>
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

    <?php 
       


             $sql = "SELECT * FROM users  WHERE userId ='".$_SESSION['stud_id']."'";
             $result = mysqli_query($conn, $sql);
             $row = mysqli_fetch_assoc($result);

              // First Name
             $usernamefull = $row['userName'];
             $myvalue = $usernamefull;
             $arr = explode(' ',trim($myvalue));
             $username = $arr[0]; 
              // First Name ends here


              // Previous Encrypted password
             $userPass = $row['userPass']; 

              // Decryption function
               function decryptIt( $q ) {
                   $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
                   $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
                   return( $qDecoded );
               }

             $decrypted = decryptIt( $userPass );

    ?>
   
    <div class="container">
    <form action="../Core/passwordchanged.php" method="POST" id="password">
      <div class="row">
          <div class="col m8 s12 offset-m2">
            <div class="input-field">
              <label for="prevpass">Current Password</label>
              <input required type="password" id="prevpass" name="prevpass" class="validate">
              <div class="passmsg"></div>
            </div>
          </div>
      </div>
      <div class="row">
          <div class="col m8 s12 offset-m2">
            <div class="input-field">
              <label for="newpass">New Password</label>
              <input required disabled type="password" id="newpass" name="newpass" class="validate">
              <div class="progress">
                  <div class="determinate passmeter" id="mpassword-strength-meter" style="width: 0%"></div>
              </div>
              <div style="padding-top: 15px;" id="mpassword-strength-text" class='errorTxt3'></div>

            </div>
          </div>

      </div>
      <div class="row ">
          <div class="col m8 s12 offset-m2">
            <div class="input-field">
              <label for="cnfrmpass">Confirm Password</label>
              <input required disabled type="password" id="cnfrmpass" name="cnfrmpass" class="validate">
            </div>
          </div>
      </div>
      
      <div class="row">
        <div class="col s12 center">
          <button type="submit" class="btn waves-effect waves-light center" id="chgpass" name="chgpass">Update Password</button>

        </div>
      </div>


    </form>
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
    <script src="../Assets/js/jquery.validate.min.js"></script>
    <script>
      var strength = {
         0: "Worst ☹",
         1: "Bad ☹",
         2: "Weak ☹",
         3: "Good ☺",
         4: "Strong ☻"
      }

      var password = document.getElementById('newpass');
      var meter = document.getElementById('mpassword-strength-meter');
      var text = document.getElementById('mpassword-strength-text');
      // var text = $('.errorTxt3');


      password.addEventListener('input', function()
      {
          var val = password.value;
          var result = zxcvbn(val);

       
          // Update the password strength meter
          meter.value = result.score*25 + '%';
          meter.style.width = 'meter.value';


         // $('.passmeter').css('visibility','visible');
         $('.passmeter').width(meter.value);

         switch (meter.value) { 
          case '25%': 
            $('.passmeter').css('background-color','red');
            $('#mpassword-strength-text').css('color','red');
            break;
          case '50%': 
            $('.passmeter').css('background-color','#E65100');
            $('#mpassword-strength-text').css('color','#E65100');
            break;
          case '75%': 
            $('.passmeter').css('background-color','#FFC107');
            $('#mpassword-strength-text').css('color','#FFC107');
            break;    
          case '100%': 
            $('.passmeter').css('background-color','#4CAF50');
            $('#mpassword-strength-text').css('color','#4CAF50');

            break;
          default:
            $('.passmeter').css('background-color','transparent');

         }

          // Update the text indicator
          if(val !== "") {
              text.innerHTML = "" + "<strong>" + strength[result.score] + "</strong>" +  " &nbsp;" + "<span>" + result.feedback.warning + " </span"; 
          }
          else {
              text.innerHTML = "";
          }
      });
    </script>

    <script>
      
        $(document).ready(function(){
          $("#password").validate({
              rules: {
                  prevpass:{
                      required: true,
                      minlength:5
                  },
                  newpass: {
                      required: true,
                      minlength: 6
                  },
                  cnfrmpass: {
                    required: true,
                    minlength: 5,
                    equalTo: "#newpass"
                  },

            },
              //For custom messages
            messages: {
                newpass:{
                    required: "Don't leave me alone! Please fill me.",
                    minlength: "Uh Oh! too Weak ! Feed me at least 6 characters."
                },
                cnfrmpass:{
                    required: "Don't leave me alone! Please fill me.",
                    minlength: "Where did you learn to type ? Type excat same password."
                },
            },

              errorElement : 'div',
              errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                if (placement) {
                  $(placement).append(error)
                } else {
                  error.insertAfter(element);
                }
              }
           });

      }); // end of document ready

    </script>

</body>
</html>
<?php  ob_end_flush(); ?>

<?php require_once 'Core/new.php'; ?>
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


   <title>Sign Up</title>

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
   <link rel="stylesheet" href="Assets/css/base.css">
   <link rel="manifest" href="Assets/js/manifest.json">

   <script src="Assets/js/jquery-1.11.3-jquery.min.js"></script>
   <script src="Assets/js/ajaxvailator.js"></script>
   <script src="Assets/js/analytics.js"></script>


</head>

<style type="text/css">
  .input-field div.error,.errorTxt8,#mpassword-strength-text{
    position: relative;
    top: 0rem;
    left: 0rem;
    font-size: 0.8rem;
    color:red;
    -webkit-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%);
  }
  .errorTxt0,.errorTxt7{
    position: relative;
    top: 0rem;
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

<body>

<nav id="subpages">
      <div class="nav-wrapper">
      <a href="default.html" class="brand-logo hide-on-med-and-down">Student Council</a><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <a href="http://geca.ac.in" target="_blank" class="brand-logo center"><img src="Assets/img/final_small.png"></a>

              <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Log In</a></li>
                <li><a href="default.html#team-link">Team</a></li>
                <li><a href="default.html#contact-link">Contact Us</a></li>
              </ul>
              <ul id="mobile-demo" class="side-nav">
              <li><a href="index.php">Log In</a></li>
              <li><a href="default.html#team-link">Team</a></li>
              <li><a href="default.html#contact-link">Contact Us</a></li>
              </ul>
            </div>
    </nav>
  
  

<div class="container new-form">
 <div class="row">
    <form class="col m6 s12 offset-m3 formValidate" id="formValidate" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

     <div class="col s12">


            <?php if ( isset($errMSG) ) { ?>

            <div class="form-group" style="color: green;">
                <div class="alert<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
                    <span class="info-sign"></span> <?php echo $errMSG; ?>
                </div>
            </div>
                <?php } ?>


            <div class="input-field">
                <label for="new-enroll">Enrollment Number</label>
                <input type="text" name="enroll" id="new-enroll" data-error=".errorTxt0" length="11" maxlength="11" value="<?php echo $enroll ?>" />
                <div class="errorTxt0"></div>
            </div>


            <div class="input-field">
                <label  for="uname">Name</label>
                <input type="text" name="uname" class="inser" id="new-name" style="text-transform: capitalize;" data-error=".errorTxt1" maxlength="50" value="" />
                <div class="errorTxt1"></div>
            </div>


            <div class="input-field">
                <label for="new-email">Email</label>
                <input type="email" name="cemail" id="new-email" data-error=".errorTxt7"/>
                <div class="errorTxt7"></div>
            </div>


            <div class="input-field">
            <label for="mpassword">Enter password</label>
            <input type="password" name="password" id="mpassword">
            <div class="progress">
                <div class="determinate passmeter" id="mpassword-strength-meter" style="width: 0%"></div>
            </div>
            <div style="padding-top: 15px;" id="mpassword-strength-text" class='errorTxt3'></div>
            </div>

            <div class="input-field">
              <label for="cpassword">Confirm Password</label>
              <input id="cpassword" type="password" name="cpassword" data-error=".errorTxt4">
              <div class="errorTxt4"></div>
            </div>



           <div class="input-field">
              <input  required="requried"  id="icon_telephone" maxlength="10" type="tel" name="mobile" value="<?php echo $_SESSION['stud_mobile'] ?>" class="validate">
              <label for="icon_telephone">Mobile Number</label>
              <div class="errorTxt12"></div>

            </div> 


            <div class="input-field">
              <select required required="required" id="branch" name="branch" class="branch click"  data-error=".errorTxt5">
                <option value="" disabled selected="selected" >Select Branch</option>
                <option value="Civil Engineering" data-icon="Assets/img/civil.png" class="circle">Civil Engineering</option>
                <option value="Electrical Engineering" data-icon="Assets/img/electrical.png" class="circle">Electrical Engineering</option>
                <option value="Mechanical Engineering" data-icon="Assets/img/mech.png" class="circle">Mechanical Engineering</option>
                <option value="Electronics And Telecommunications" data-icon="Assets/img/entc.png" class="circle">Electronics & Telecommunication Engineering</option>
                <option value="Computer Science And Engineering" data-icon="Assets/img/cse.png" class="circle">Computer Science And Engineering</option>
                <option value="Information Technology" data-icon="Assets/img/it.png" class="circle">Information Technology</option>
                <option value="MCA" data-icon="Assets/img/mca.png" class="circle">Master of Computer Application</option>
              </select>
              <label for="">Branch</label>

              <div class="errorTxt5"></div>
            </div>






            <div class="input-field gender">
                <span id="male-radio">
                    <input type="radio" name="gender" value="Male" class="with-gap" id="male" data-error=".errorTxt6"/>
                    <label for="male">Male</label>
                <span>
                    <input type="radio" name="gender" value="Female" class="with-gap" data-error=".errorTxt6" id="female" />
                    <label for="female">Female</label>
                </span>


            </div>
            <div class="errorTxt6" style="color: #F44336;font-size: 15px;"></div>
             <div class="col s12 center gray" style="padding: 10px 0px;">After successful sign up, you will be redirected  to login page. Please <b style="color: #039be5">LOGIN</b> to update your profile.</div>
             <button type="submit" disabled id="reg" class="btn waves-effect waves-light new-submit" name="btn-signup">Sign Up</button>
        </div>
    </form>
    </div>
</div>
<div class="center-align">
     <a style="font-size: 22px;" href="Login">Log in here</a>
</div>

<footer class="page-footer white custom">

  <div class="footer-copyright">
    <div class="container">
     <div class="center">
      <p class="black-text center"><i class="material-icons">code</i>with<i class="material-icons" style="color: #f44336">favorite</i>by <span class="ftr"><a class="ftr" href="https://www.facebook.com/saurabhk20"> Saurabh Kulkarni</a> </span>, SE CSE</p>

     </div>


    </div>
  </div>
</footer>

<script src="Assets/js/zxcvbn.js"></script>
<!-- <script src="Assets/js/password.js"></script> -->
<script src="Assets/js/materialize.js"></script>
<script src="Assets/js/init.js"></script>
<script src="Assets/js/password.js"></script>
<script src="Assets/js/formvalidate.js"></script>
<script src="Assets/js/jquery.validate.min.js"></script>



</body>
</html>
<?php ob_end_flush(); ?>

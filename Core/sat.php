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

  <title>Welcome  <?php echo $_SESSION['stud_name']; ?></title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="../Assets/css/base.css">
</head>
<body>

<nav id="sat-menu" class="trans-menu">
    <div class="nav-wrapper">

      <ul id="slide-out" class="side-nav">
          <li><div class="userView">
            <img class="background" src="../Assets/img/2.jpg">
            <a href="#"><img class="circle" src="../Assets/img/user.png"></a>
            <a href="#"><span  class="black-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
            <a href="#"><span class="black-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
          </div></li>
          <li><a href="#!"><img class="slideicon" src="../Assets/img/eye.png"  alt="">View Profile</a></li>
          <li><a href="edit.php"><img class="slideicon" src="../Assets/img/editpro.png"  alt="">Edit Profile</a></li>
          <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
          <li><div class="divider"></div></li>

          <li><a href="../default.html"><b> STUDENT COUNCIL</b></a></li>
          <li><a href="../default.html#team-link">Team</a></li>
          <li><a href="../default.html#contact-link">Contact Us</a></li>

      </ul>

      <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
      <i class="material-icons">menu</i></a>

      <a href="#" class="brand-logo center">Student Council</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../logout.php?logout">Log out</a></li>
        <li><a href="default.html#team-link">Team</a></li>
        <li><a href="default.html#contact-link">Contact Us</a></li>
      </ul>


    </div>
  </nav>



        <div class="container" style="padding-top: 50px;">
          <div class="row">
              <form name='form' method="POST" action="notified.php" class="col s12">

                <?php

                  require_once 'dbconnect.php';
                  ob_start();
                  session_start();

                ?>



                  <div class="row">

                  <div class="input-field col s12">
                    <input disabled  id="icon_prefix" type="text" name="uname" id="disabled" value="<?php echo $_SESSION['stud_name'] ?>" class="validate">
                    <label for="icon_prefix">Name</label>
                  </div>


                    <div class="input-field col s6 ">
                      <input disabled  id="icon_prefix" type="text" name="enrollment" id="disabled" value="<?php echo $_SESSION['stud_id'] ?>" class="validate uppercase">
                      <label for="icon_prefix">Enrollment Number</label>
                    </div>

                <!-- ++++++++++ Unique values ends here  +++++++ -->
                <!-- Never modify names of any of these inputs.They are further linked in testing.php -->
                <!-- Not passing entries of Name and Enrollment number for editing, since they r unique -->
                <!-- consider skills as BRANCH in whole project -->


                    <div class="input-field col s6">
                      <input disabled id="icon_prefix" type="text" name="branch" value="<?php echo $_SESSION['stud_skills'] ?>" class="branch-edit validate" requried>
                      <label for="icon_prefix">Branch</label>
                    </div>

                    <div class="input-field col s12 m6">
                      <input  id="icon_prefix" type="email" name="email" value="<?php echo $_SESSION['stud_email'] ?>" class="validate" requried>
                      <label for="icon_prefix">Email</label>
                    </div>



                    <div class="input-field col s12 m6">
                      <input  id="icon_telephone" maxlength="10" type="tel" name="mobile" value="<?php echo $_SESSION['stud_mobile'] ?>" class="validate" requried>
                      <label for="icon_telephone">Mobile Number</label>
                    </div>

                    <div class="input-field col s12 m6">
                      <input  id="urself" maxlength="15" type="text" name="oneword" class="validate" required>
                      <label for="urself">Describe yourself in One Word</label>
                    </div>

                    <div class="input-field col s12 m6">
                      <input  id="Achivements" maxlength="300" type="text" name="Achivements" class="validate" requried>
                      <label for="Achivements">Achivements</label>
                    </div>

                    <div class="input-field col s12 m6">
                      <input  id="strength" maxlength="300" type="text" name="strength" class="validate" requried>
                      <label for="strength">Your Strength</label>
                    </div>

                    <div class="input-field col s12 m6">
                      <input  id="week" maxlength="300" type="text" name="week" class="validate" requried>
                      <label for="week">Your Weekness</label>
                    </div>

                    <div class="input-field col s12">
                      <input  id="software" maxlength="300" type="text" name="software" class="validate" requried>
                      <label for="software">Softwares you can handle</label>
                    </div>
                    
                    <div class="input-field col s12">
                      <input  id="aim" maxlength="300" type="text" name="aim" class="validate" requried>
                      <label for="aim">Aim in Life</label>
                    </div>


                    <div class="input-field col s12 ">
                      <input  id="whysat" maxlength="300" type="text" name="whysat" class="validate" requried>
                      <label for="whysat">Why you want to join SAT ?</label>
                    </div>

                  </div>

                  <div class="center update-button">

                         <button class="btn waves-effect waves-light" type="submit" name="update" style="
                      margin-top: 50px;">SUBMIT
                         </button>
                  </div>


                  </form>
     
                  <footer class="page-footer white">

                    <div class="footer-copyright">
                      <div class="container center">
                        <p class="black-text"><i class="material-icons">code</i>with<i class="material-icons" style="color: #f44336">favorite</i>by <span class="ftr"><a class="ftr" href="https://github.com/piratedvirus">Saurabh Kulkarni</a> </span>, SE CSE</p>
                      </div>
                    </div>
                  </footer>

     <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>  
     <script src="../Assets/js/materialize.js"></script>  
     <script src="../Assets/js/init.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>
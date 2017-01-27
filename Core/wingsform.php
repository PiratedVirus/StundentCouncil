<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
  // if session is not set this will redirect to login page
  if( !isset($_SESSION['user']) ) {
    header("Location: ../Login");
    exit;
  }
  
?>

<!DOCTYPE html(lang='en')>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
   <meta name="theme-color" content="#009688 ">
   <meta name="msapplication-navbutton-color" content="#009688 ">
   <meta name="apple-mobile-web-app-status-bar-style" content="#009688 ">
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
   <link rel="stylesheet" href="../Assets/css/base.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

   <title>Student Council</title>

   <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
   <script src="../Assets/js/analytics.js"></script>
   <script src="../Assets/js/wings.js"></script>

   

 </head>
 <body>

 <nav id="profile-menu" class="trans-menu">
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
           <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
           <li><div class="divider"></div></li>

           <li><a href="https://www.scouncilgeca.com"><b> STUDENT COUNCIL</b></a></li>
           <li><a href="https://www.scouncilgeca.com#team-link">Team</a></li>
           <li><a href="https://www.scouncilgeca.com#contact-link">Contact Us</a></li>

       </ul>

       <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
       <i class="material-icons">menu</i></a>

       <a href="http://geca.ac.in" target="_blank" class="brand-logo center downlift"><img src="../Assets/img/final_small.png"></a>

       <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="../logout.php?logout">Log out</a></li>
         <li><a href="https://www.scouncilgeca.com#team-link">Team</a></li>
         <li><a href="https://www.scouncilgeca.com#contact-link">Contact Us</a></li>
       </ul>


     </div>
  </nav>

 <div class="container" style="padding-top: 50px;">
 	<div class="row">
 	    <form name='form' id="updateform" method="POST" action="../Core/wingssubmit.php" class="col s12">

 		    <?php

          ob_start();
          session_start();
 		      require_once 'dbconnect.php';
          $get = mysqli_query($conn,"SELECT * FROM skills WHERE userId = '".$_SESSION['stud_id']."'");
          $arr = mysqli_fetch_array($get);

          $getuser = mysqli_query($conn,"SELECT * FROM users WHERE userId = '".$_SESSION['stud_id']."'");
          $arruser = mysqli_fetch_array($getuser);

 		    ?>



 		      <div class="row">

 		    	<div class="input-field col s12">
 		    	  <input disabled  id="icon_prefix" type="text" name="uname" id="disabled" style="text-transform: capitalize;" value="<?php echo $_SESSION['stud_name'] ?>" class="validate">
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
 		          <input disabled id="icon_prefix" type="text" name="branch" value="<?php echo $_SESSION['stud_skills'] ?>" class="branch-edit validate">
 		          <label for="icon_prefix">Branch</label>
 		        </div>

 		        <div class="input-field col s12 m6">
 		          <input disabled required="requried" id="icon_prefix" type="email" name="cemail" value="<?php echo $_SESSION['stud_email'] ?>" class="validate">
 		          <label for="icon_prefix">Email</label>
              <div class="errorTxt11"></div>

 		        </div>



 		        <div class="input-field col s12 m6">
 		          <input disabled required="requried"  id="icon_telephone" maxlength="10" type="tel" name="mobile" value="<?php echo $_SESSION['stud_mobile'] ?>" class="validate">
 		          <label for="icon_telephone">Mobile Number</label>
              <div class="errorTxt12"></div>

 		        </div>


            <div class="input-field col s12">
                  <select name="pref1" id="pref1" onchange="myFunction()" required>
                            <option value="" disabled selected>Choose your Preference</option>
                            <option value="Sponsorship" <?=$arr['pref1'] == 'Sponsorship' ? ' selected="selected"' : '';?> >Sponsorship</option>
                            <option value="Publicity" <?=$arr['pref1'] == 'Publicity' ? ' selected="selected"' : '';?> >Publicity</option>
                            <option value="Design" <?=$arr['pref1'] == 'Design' ? ' selected="selected"' : '';?> >Design</option>
                            <option value="Decoration" <?=$arr['pref1'] == 'Decoration' ? ' selected="selected"' : '';?> >Decoration</option>
                            <option value="Infrastructure" <?=$arr['pref1'] == 'Infrastructure' ? ' selected="selected"' : '';?> >Infrastructure</option>
                            <option value="Documentation" <?=$arr['pref1'] == 'Documentation' ? ' selected="selected"' : '';?> >Documentation</option>
                            <option value="FacilityProvider" <?=$arr['pref1'] == 'FacilityProvider' ? ' selected="selected"' : '';?> >Facility Provider</option>
                            <option value="CulturalEvent" <?=$arr['pref1'] == 'CulturalEvent' ? ' selected="selected"' : '';?> >Cultural Event</option>  
                       </select>
                  <label for="pref1">Preference 1</label>
            </div>
            <div class="input-field col s12">
                    <!-- <label id="lbl6" hidden="">How will you contribute to this team?</label> -->
                    <textarea id="pref1ans" placeholder="How will you contribute to this team?" name="pref1ans" hidden=""><?php echo $arr['pref1ans']?></textarea>
            </div>



            <div class="input-field col s12">
                      <select name="pref2" id="pref2" onchange="myFunction1()" required>
                            <option value="" disabled selected>Choose your Preference</option>
                            <option value="Sponsorship" <?=$arr['pref2'] == 'Sponsorship' ? ' selected="selected"' : '';?> >Sponsorship</option>
                            <option value="Publicity" <?=$arr['pref2'] == 'Publicity' ? ' selected="selected"' : '';?> >Publicity</option>
                            <option value="Design" <?=$arr['pref2'] == 'Design' ? ' selected="selected"' : '';?> >Design</option>
                            <option value="Decoration" <?=$arr['pref2'] == 'Decoration' ? ' selected="selected"' : '';?> >Decoration</option>
                            <option value="Infrastructure" <?=$arr['pref2'] == 'Infrastructure' ? ' selected="selected"' : '';?> >Infrastructure</option>
                            <option value="Documentation" <?=$arr['pref2'] == 'Documentation' ? ' selected="selected"' : '';?> >Documentation</option>
                            <option value="FacilityProvider" <?=$arr['pref2'] == 'FacilityProvider' ? ' selected="selected"' : '';?> >Facility Provider</option>
                            <option value="CulturalEvent" <?=$arr['pref2'] == 'CulturalEvent' ? ' selected="selected"' : '';?> >Cultural Event</option>  
                       </select>
                  <label for="pref2">Preference 2</label>
            </div>
            <div class="input-field col s12">
                    <textarea  id="pref2ans" placeholder="How will you contribute to this team?" name="pref2ans" hidden=""><?php echo $arr['pref2ans']?></textarea>
            </div>

            <div class="input-field col s12">
                      <select name="pref3" id="pref3" onchange="myFunction2()" required>
                            <option value="" disabled selected>Choose your Preference</option>
                            <option value="Sponsorship" <?=$arr['pref3'] == 'Sponsorship' ? ' selected="selected"' : '';?> >Sponsorship</option>
                            <option value="Publicity" <?=$arr['pref3'] == 'Publicity' ? ' selected="selected"' : '';?> >Publicity</option>
                            <option value="Design" <?=$arr['pref3'] == 'Design' ? ' selected="selected"' : '';?> >Design</option>
                            <option value="Decoration" <?=$arr['pref3'] == 'Decoration' ? ' selected="selected"' : '';?> >Decoration</option>
                            <option value="Infrastructure" <?=$arr['pref3'] == 'Infrastructure' ? ' selected="selected"' : '';?> >Infrastructure</option>
                            <option value="Documentation" <?=$arr['pref3'] == 'Documentation' ? ' selected="selected"' : '';?> >Documentation</option>
                            <option value="FacilityProvider" <?=$arr['pref3'] == 'FacilityProvider' ? ' selected="selected"' : '';?> >Facility Provider</option>
                            <option value="CulturalEvent" <?=$arr['pref3'] == 'CulturalEvent' ? ' selected="selected"' : '';?> >Cultural Event</option>  
                       </select>
                  <label for="pref3">Preference 3</label>
            </div>
            <div class="input-field col s12">
                    <textarea  id="pref3ans" placeholder="How will you contribute to this team?" name="pref3ans" hidden=""><?php echo $arr['pref3ans']?></textarea>
            </div>

            <div class="input-field col s12">
            
                <textarea  name="ques1" id="ques1" placeholder="Do you have any work experience in WINGS or any other event?"><?php echo $arr['ques1']?></textarea>

            </div>

            <div class="input-field col s12">
              
               <select id="question" onchange="myFunction3()">
                    <option value="" disabled selected>Yes / No</option>
                    <option value="Yes"  <?=$arr['ques2txt'] != '' ? ' selected="selected"' : '';?>  >Yes</option>
                    <option value="No"  <?=$arr['ques2txt'] == '' ? ' selected="selected"' : '';?>  >No</option>
               </select>
               <label for="question">Are you busy in any other event other than WINGS?</label>
            </div>
            <div class="input-field col s12">
                    <textarea  id="ques2txt" name="ques2txt" placeholder="Please mention the event name" hidden><?php echo $arr['ques2txt']?></textarea>

            </div>



            <hr class="header-holder">
      

           <button  class="btn waves-effect waves-light" id ="wingssubmit" type="submit" name="wingssubmit" style="margin-top: 50px;">UPDATE</button>




 		      </div>
 	    </form>
 	</div>
 </div>
 <hr class="header-holder">


 <footer class="page-footer white">
   <div class="container">
     <div class="row">
       <div class="col l6 s12">
         <h5 class="black-text main-footer">The Student Council</h5>          
         <p class="black-text footer-geca">Goverment College of Engineering, Aurangabad<br/>2016-17</p>
         <p class="black-text text-lighten-4">&copy; All Rights Reserved  </p>
       </div>
       <div class="col l6 s12 center footer-links">
         <h5 class="black-text"> </h5>          
         <ul>
             <p>A Concept of <b class="gray">Nikhil Badave</b>, Cultural Secretary </p>           
         </ul>
       </div>
     </div>
   </div>
   <div class="footer-copyright">
     <div class="container center">
       <p class="black-text"><i class="material-icons">code</i>with<i class="material-icons" style="color: #f44336">favorite</i>by <span class="ftr"><a class="ftr" href="https://github.com/piratedvirus">Saurabh Kulkarni</a> </span>, SE CSE</p>

     </div>
   </div>
 </footer>



 <script src="../Assets/js/materialize.min.js"></script>
 <script src="../Assets/js/init.js"></script>
 <script>
   $(document).ready(function() {
       $('select').material_select();
     });
 </script>


 </body>
 </html>

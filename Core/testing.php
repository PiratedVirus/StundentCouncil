<?php
		require_once 'dbconnect.php';
		ob_start();
		session_start();

		if ( ! empty($_POST['branch'])){
		    $branch = $_POST['branch'];
		}


		if ( ! empty($_POST['cemail'])){
		    $email = $_POST['cemail'];
		}

		if ( ! empty($_POST['dob'])){
		    $dob = $_POST['dob'];
		}

		if ( ! empty($_POST['mobile'])){
		    $mobile = $_POST['mobile'];
		}

		if ( ! empty($_POST['year'])){
		    $year = $_POST['year'];
		}

		if ( ! empty($_POST['state'])){
		    $state = $_POST['state'];
		}

		if ( ! empty($_POST['res'])){
		    $res = $_POST['res'];
		}

		if ( ! empty($_POST['future'])){
		    $future = $_POST['future'];
		}

		if ( ! empty($_POST['high_tech'])){
		    $high_tech = $_POST['high_tech'];
		}

		if ( ! empty($_POST['high_cul'])){
		    $high_cul = $_POST['high_cul'];
		}

		if ( ! empty($_POST['high_sports'])){
		    $high_sports = $_POST['high_sports'];
		}

		if ( ! empty($_POST['sugg'])){
		    $sugg = $_POST['sugg'];
		}

		if ( ! empty($_POST['rank_wings'])){
		    $rank_wings = $_POST['rank_wings'];
		}

		if ( ! empty($_POST['rank_gather'])){
		    $rank_gather = $_POST['rank_gather'];
		}

		if ( ! empty($_POST['rank_week'])){
		    $rank_week = $_POST['rank_week'];
		}

		if ( ! empty($_POST['why_wings'])){
		    $why_wings = $_POST['why_wings'];
		}


		if ( ! empty($_POST['why_gather'])){
		    $why_gather = $_POST['why_gather'];
		}

		if ( ! empty($_POST['why_sport'])){
		    $why_sport = $_POST['why_sport'];
		}

		    $sql_namenew = mysqli_query($conn,"UPDATE users SET userEmail = '$email' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET high_tech = '$high_tech' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET high_cul = '$high_cul' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET high_sports = '$high_sports' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET dob = '$dob' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET mobile = '$mobile' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET academic_year = '$year' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET state = '$state' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET local_hostel = '$res' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET future = '$future' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET why_wing = '$why_wings' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET why_sport = '$sugg' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET why_gather = '$why_gather' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET rank_wings = '$rank_wings' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET rank_gather = '$rank_gather' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET rank_sport = '$rank_sport' WHERE userId = '".$_SESSION['stud_id']."'");




		    require_once 'checkbox.php';
 ?>

 <!DOCTYPE html>
 <html>
	 <head>

	   <meta http-equiv="Content-Type" content="text/html"/>
	   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

	   <title style="text-transform: capitalize;">Welcome  <?php echo $_SESSION['stud_name']; ?></title>

	   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
	   <link rel="stylesheet" href="../Assets/css/base.css">
	 </head>
 <body>
	<div class="navbar-fixed">
			<nav id="success-menu">
		    <div class="nav-wrapper">

		    <ul id="slide-out" class="side-nav">
		        <li><div class="userView">
		          <img class="background" src="../Assets/img/2.jpg">
		          <a href="#"><img class="circle" src="../Assets/img/user.png"></a>
		          <a href="#"><span  class="black-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
		          <a href="#"><span class="black-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
		        </div></li>
		        <li><a href="#"><img class="slideicon" src="../Assets/img/eye.png"  alt="">View Profile</a></li>
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
	</div>
 

   <div class="row user-name teal">
     <div class="container">
       <div class="col s12 left1">
         <h1>Hi <?php echo $_SESSION['stud_name'] ?> </h1>
       </div>
     </div>
   </div>

   <div class="container">
     <div class="row user-body">
       <div class="col s12 center">
       </div>

       <p class="success-update center"> <span class="success-update" id="main-msg">Profile Updated Successfully... :)</p>
       <p class="center gray">Opportunities according to your interests will be soon informed to you... </p>
       <hr class="header-holder top-line">

       <div class="profile-img center"><img src="../Assets/img/user.png" alt=""></div>
       <div class="s12 center" style="font-weight: bolder;text-transform: uppercase;">
       	<span><?php echo $_SESSION['stud_name'] ?></span><br>
       	<span class="final-enroll center"><?php echo $_SESSION['stud_id'] ?></span><br>
       </div>
       <div class="center">
       	
       	<span class="final-branch"><?php echo $year; ?>, </span>
       	<span class="final-branch"><?php echo $_SESSION['stud_skills'] ?></span>
       	<h6 class="final-mobile"> <b><?php echo $mobile; ?></b>,  <?php echo $email; ?></h6>
		<p class="final-state" style="text-transform: uppercase;"><?php echo $state; ?></p>

		<?php echo $rank_gather ?>


       </div>





     </div>
   </div>

   <div class="container ">
   		<div class="row">
   			<div class="col 12 ">
					<div class="s12">
						<!-- <h6 class="final-dob"><?php echo $dob; ?></h6> -->
					</div>
					<div class="s12">

					</div>
   			</div>
   		</div>
   </div>

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

	</html>
</body>

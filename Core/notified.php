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


		if ( ! empty($_POST['mobile'])){
		    $mobile = $_POST['mobile'];
		}

		if ( ! empty($_POST['year'])){
		    $year = $_POST['year'];
		}

		if ( ! empty($_POST['oneword'])){
		    $oneword = $_POST['oneword'];
		}

		if ( ! empty($_POST['Achivements'])){
		    $Achivements = $_POST['Achivements'];
		}

		if ( ! empty($_POST['strength'])){
		    $strength = $_POST['strength'];
		}

		if ( ! empty($_POST['week'])){
		    $week = $_POST['week'];
		}

		if ( ! empty($_POST['software'])){
		    $software = $_POST['software'];
		}

		if ( ! empty($_POST['aim'])){
		    $aim = $_POST['aim'];
		}

		if ( ! empty($_POST['whysat'])){
		    $whysat = $_POST['whysat'];
		}





		    $sql_namenew = mysqli_query($conn,"UPDATE users SET userEmail = '$email' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET mobile = '$mobile' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET oneword = '$oneword' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET Achivements = '$Achivements' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET strength = '$strength' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET week = '$week' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET software = '$software' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET whysat = '$whysat' WHERE userId = '".$_SESSION['stud_id']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET aim = '$aim' WHERE userId = '".$_SESSION['stud_id']."'");




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
	<div class="navbar-fixed">
			<nav id="success-menu">
		    <div class="nav-wrapper">

		    <ul id="slide-out" class="side-nav">
		        <li><div class="userView">
		          <img class="background" src="../Assets/img/b (5).jpg">
		          <a href="#"><img class="circle" src="../Assets/img/userios.png"></a>
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
     </div>
   </div>

   <div class="container">
   		<div class="row">
   			<div class="col 12">
					<div class="s12">
						<span class="final-name"><?php echo $_SESSION['stud_name'] ?></span>
					</div>
					<div class="s6">
						<span class="final-enroll"><?php echo $_SESSION['stud_id'] ?>,</span>
						<span class="final-branch"><?php echo $year; ?></span>
					</div>
					<div class="s12">
						<span class="final-branch"><?php echo $_SESSION['stud_skills'] ?></span>
					</div>
					<div class="s12">
						<h6 class="final-mobile"><?php echo $mobile; ?></h6>
						<h6 class="final-dob"><?php echo $dob; ?></h6>
						<h6 class="final-email"><?php echo $email; ?></h6>
					</div>
					<div class="s12">
						<p class="final-state"><?php echo $state; ?></p>
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

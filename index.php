<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv="Content-Type" content="text/html"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<meta name="theme-color" content="#009688 ">
		<meta name="msapplication-navbutton-color" content="#009688 ">
		<meta name="apple-mobile-web-app-status-bar-style" content="#009688 ">

		<title>Log In</title>

		<META NAME="description" CONTENT="Student Council, GECA. The website would turn out to be the break-through for the dawn of \'Cybernated Automatized GECA\' .It would be \'THE\' portal for all the students of the college, and not just students, but even the faculty and staff members. The site would minimize the manual error drastically. It would be easy to get information about all the activities going on.">
		<META NAME="keywords" CONTENT="Student Council, Student Council login, GECA Student Council, Governement College of Engineering Aurangabad , Government Institute in Marathwada, Autonomous Goevernment Engineering College,Student Coucil geca">
		<META NAME="robot" CONTENT="index,follow">
		<META NAME="author" CONTENT="Saurabh Kulkarni">
		<META NAME="revisit-after" CONTENT="2 days">


		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		<link rel="stylesheet" href="Assets/css/base.css">
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


		<script src="Assets/js/analytics.js"></script>

	</head>
	<body>

	<nav id="subpages">
	  <div class="nav-wrapper"><a href="http://www.scouncilgeca.com" class="brand-logo">Student Council</a><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	    <ul class="right hide-on-med-and-down">
	  	  <a href="http://geca.ac.in" target="_blank" class="brand-logo center"><img src="Assets/img/final_small.png"></a>
	      <li><a href="register.php">Sign Up</a></li>
	      <li><a href="http://www.scouncilgeca.com#team-link">Collaborators</a></li>
	      <li><a href="http://www.scouncilgeca.com#contact-link">Contact Us</a></li>
	    </ul>
	    <ul id="mobile-demo" class="side-nav">
	    <li><a href="register.php">Sign Up</a></li>
	    <li><a href="http://www.scouncilgeca.com#team-link">Collaborators</a></li>
	    <li><a href="http://www.scouncilgeca.com#contact-link">Contact Us</a></li>
	    </ul>
	  </div>
	</nav>
<main>
		<div class="row shifter">

		  <div class="col s12">

		    <ul class="tabs">
		      <li class="tab col s3"><a  href="#students">Students</a></li>
		      <li class="tab col s3"><a  href="#admin">Admin</a></li>
		    </ul>

		  </div>

		  <div id="students" class="container form-holder col s12">
		  		<?php   require_once 'Core/user.php'; ?>


		  </div>

		  	<div id="admin" class="container form-holder col s12">
	  			<?php   require_once 'Admin/adminlogin.php'; ?>
		  	</div>

		  </div>
		</div>


		            


		<div class="center-align container">
			<a style="font-size: 22px; " href="Register">Not a Member? Create new Account</a>
		</div>
</main>

	<footer class="page-footer white">

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


	</body>
</html>
<?php ob_end_flush(); ?>
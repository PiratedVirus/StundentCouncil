<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv="Content-Type" content="text/html"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<meta name="theme-color" content="#009688 ">
		<meta name="msapplication-navbutton-color" content="#009688 ">
		<meta name="apple-mobile-web-app-status-bar-style" content="#009688 ">

		<title>Log In</title>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		<link rel="stylesheet" href="../Assets/css/base.css">
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
			  .input-field div.error,.errorTxt20{
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
	
		<script src="../Assets/js/analytics.js"></script>
		<script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>  
		<script src="../Assets/js/forgetpassword.js"></script>  



	</head>
	<body>

	<nav id="subpages">
	  <div class="nav-wrapper"><a href="http://www.scouncilgeca.com" class="brand-logo">Student Council</a><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	    <ul class="right hide-on-med-and-down">
	  	  <a href="http://geca.ac.in" target="_blank" class="brand-logo center"><img src="../Assets/img/final_small.png"></a>
	      <li><a href="../register">Sign Up</a></li>
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
		
		<div class="container">
			<div class="row">
				<div class="col center s12">
					<div class="gray center s12"><h4>FORGOT PASSWORD?</h4></div>
					<img class="responsive-img" src="../Assets/img/angry-mob.jpg" alt="">
					<h5 class="gray" style="line-height: 28px;">We strongly welcome you in the 'Party of ALZHEIMER patients...'</h5 class="gray">
				</div>

				<div class="col center s12">
					<hr class="header-holder">
					<h5 class="gray" style="line-height: 28px;">Enter your enrollment number to recover your account.</h5 class="gray">
				</div>


				<div class="input-field col s12">
					<label for="enrollment">Enrollment Number</label>
					<input style="text-transform: uppercase;" type="text" name="enrollment" id="enrollment" class="validate" length="11" maxlength="11" />
					<div style="color: #9e9e9e;" class="errorTxt20">As soon as you enterd 11<sup>th</sup> digit of Enrollment number, an email will be shooted to your email address. Be carefull that you don't shoot somebody else!</div>

				</div>

				<div class="input-field col center">
					<div class="emailadd"></div>
				</div>



				</div>
			</div>
		</div>



	</main>

		<footer class="page-footer white">

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

			<script src="../Assets/js/materialize.js"></script>  
			<script src="../Assets/js/init.js"></script>

		</body>
	</html>
	<?php ob_end_flush(); ?>
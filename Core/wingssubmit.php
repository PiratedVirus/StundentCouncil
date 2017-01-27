<?php
		require_once 'dbconnect.php';
		ob_start();
		session_start();



		$pref1=$_POST['pref1'];
		$pref2=$_POST['pref2'];
		$pref3=$_POST['pref3'];
		$pref1ans=$_POST['pref1ans'];
		$pref2ans=$_POST['pref2ans'];
		$pref3ans=$_POST['pref3ans'];
		$ques1=$_POST['ques1'];
		$ques2=$_POST['ques2txt'];

		

			$userid = $_SESSION['stud_id'];
			$username = $_SESSION['stud_name'];
			$usermob = $_SESSION['stud_mobile'];
			$usermail = $_SESSION['stud_email'];
			// echo $userid;
			// echo $username;
			// echo $usermob;
			// echo $usermail;


		    $sql_skillstable = mysqli_query($conn,"UPDATE skills SET pref1 = '$pref1', pref2 = '$pref2', pref3 = '$pref3', pref1ans = '$pref1ans', pref2ans = '$pref2ans', pref3ans = '$pref3ans', ques1 = '$ques1', ques2txt = '$ques2' WHERE userId = '$userid'");

		    $sql_userstable = mysqli_query($conn,"UPDATE users SET wings = '1' WHERE userId = '$userid'");



		    	$value = 'wings2k17@gmail.com';
		    	$subject = 'Wings Form '.$idcss;
		    	$message = 'Name : ' .$username. ' Enrollment No. : ' .$userid. ' Email : ' .$usermail. ' Preference1 : ' .$pref1. ' How ? ' .$pref1ans. ' Preference2 : ' .$pref2. ' How ? ' .$pref2ans. ' Preference3 : ' .$pref3. ' How ? ' .$pref3ans. ' Previous Exp ' .$ques1. ' Busy ? ' .$ques2;
		    	$from = 'admin@scouncilgeca.com';
		    	$reply = 'admin@scouncilgeca.com';

		    		$headers = "MIME-Version: 1.0" . "\r\n";
		    		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		    		$headers .= "From: Student Council<".$from.">\r\n";
		    		$headers .= "Reply-To: ".$reply."";




		     		if(mail($value,$subject,$message,$headers))
		    		{	

		    		} 
		    		else{
		    			echo "No email send!";
		    		}





		    if(!$sql_skillstable){
		    	echo 'fail skills' .mysqli_error($conn);
		    }

		    if(!$sql_userstable){
		    	echo 'fail table' .mysqli_error($conn);
		    }



		    $myvalue = $_SESSION['stud_name'];
		    $arr = explode(' ',trim($myvalue));
		    $fname = $arr[0]; 
 ?>

 

 <!DOCTYPE html>
 <html>
	 <head>

	   <meta http-equiv="Content-Type" content="text/html"/>
	   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	   <meta name="theme-color" content="#009688 ">
	   <meta name="msapplication-navbutton-color" content="#009688 ">
	   <meta name="apple-mobile-web-app-status-bar-style" content="#009688 ">

	   <title style="text-transform: capitalize;">Welcome  <?php echo $fname; ?></title>

	   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
	   <link rel="stylesheet" href="../Assets/css/base.css">
	   <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">



	 </head>
 <body>
	<div class="navbar-fixed">
			<nav id="success-menu">
		    <div class="nav-wrapper">

		    <ul id="slide-out" class="side-nav">
		        <li><div class="userView">
		          <img class="background" src="../Assets/img/b (5).jpg">
		          <a href="#"><img class="circle" src="../Assets/img/userios.png"></a>
		          <a href="#"><span  class="white-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
		          <a href="#"><span class="white-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
		        </div></li>
		        <li><a href="../home"><img class="slideicon" src="../Assets/img/home.png"  alt="">Home</a></li>
		        <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
		        <li><div class="divider"></div></li>
		        <li><a href="../default.html"><b> STUDENT COUNCIL</b></a></li>
		        <li><a href="../default.html#team-link">Collaborators</a></li>
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
	<main>
 

   <div class="row user-name teal">
     <div class="container">
       <div class="col s12 left1">
       		<h1 class="hi-header">Hi, <?php echo $fname ?> </h1>
       </div>
     </div>
   </div>

   <div class="container">
     <div class="row user-body">

       <p class="success-update center"> <span class="success-update" id="main-msg">Profile Updated Successfully... :)</span></p>
       <p class="center gray">Opportunities according to your interests will be soon informed to you... </p>
       <hr class="header-holder top-line">
     </div>
   </div>

   <div class="container admin-view">
       	<div class="row">
       		<div class="col offset-s6 offset-m11 m3">
       			<div class="chip right" style="text-transform: uppercase;">
       			  <img src="../Assets/img/id-card-3.png" ><b><?php echo  $_SESSION['stud_id']; ?></b>
       			</div>
       		</div>
       	</div>
   </div>




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


   <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
   <script src="../Assets/js/materialize.js"></script>
   <script src="../Assets/js/init.js"></script>



</body>
</html>

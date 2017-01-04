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


		if ( ! empty($_POST['bloodgroup'])){
		    $bloodgroup = $_POST['bloodgroup'];
		}


		if ( ! empty($_POST['address'])){
		    $address = $_POST['address'];
		}

		if ( ! empty($_POST['state'])){
		    $state = $_POST['state'];
		}

		if ( ! empty($_POST['res'])){
		    $res = $_POST['res'];
		}


		if ( ! empty($_POST['club1'])){
		    $club1 = $_POST['club1'];
		}


		if ( ! empty($_POST['club2'])){
		    $club2 = $_POST['club2'];
		}


		if ( ! empty($_POST['otherother'])){
		    $otherother = $_POST['otherother'];
		}


		if ( ! empty($_POST['othersports'])){
		    $othersports = $_POST['othersports'];
		}


		if ( ! empty($_POST['othercult'])){
		    $othercult = $_POST['othercult'];
		}


		if ( ! empty($_POST['othertech'])){
		    $othertech = $_POST['othertech'];
		}



		if ( ! empty($_POST['future'])){

			$string = $_POST['future'];
			$future = '';
			foreach($string as $val){
				$future .= $val.',';
			}
		}

		if ( ! empty($_POST['sugg'])){
		    $sugg = $_POST['sugg'];
		}

		if ( ! empty($_POST['high_tech'])){
		    $high_tech = $_POST['high_tech'];
		}

		if ( ! empty($_POST['high_cult'])){
		    $high_cult = $_POST['high_cult'];
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

		    $sql_userstable = mysqli_query($conn,"UPDATE users SET userEmail = '$email',academic_year = '$year',mobile = '$mobile',dob = '$dob',userAdd = '$address',bloodgroup = '$bloodgroup',future = '$future',state = '$state',sugg = '$sugg' WHERE userId = '".$_SESSION['stud_id']."'");

		    if(!$sql_userstable){
		    	echo 'The error in users table is ' .mysqli_error($conn);
		    }

		    $sql_skillstable = mysqli_query($conn,"UPDATE skills SET future = '$future',otherother = '$otherother',othertech = '$othertech',othercult = '$othercult',othersports = '$othersports',club1 = '$club1',club2 = '$club2',highsports = '$high_sports',highcult = '$high_cult',hightech = '$high_tech',rankgather = '$rank_gather',rankwings = '$rank_wings',ranksport = '$rank_sport',whygather = '$why_gather',whysport = '$why_sport',whywing = '$why_wings' WHERE userId = '".$_SESSION['stud_id']."'");

		    if(!$sql_skillstable){
		    	echo 'The error in skills table is ' .mysqli_error($conn);
		    }

		    $userid = $_SESSION['stud_id'];
		    $username = $_SESSION['stud_name'];
		    $usermob = $_SESSION['stud_mobile'];
		    $usermail = $_SESSION['stud_email'];



		    	$value = 'gecacouncil@gmail.com';
		    	$subject = 'Suggestions '.$userid;
		    	$message = 'Name : ' .$username. ' Enrollment No. : ' .$userid. ' Email : ' .$usermail. ' Mobile Number : ' .$usermob. ' Suggestions : ' .$sugg;
		    	$from = 'admin@scouncilgeca.com';
		    	$reply = 'admin@scouncilgeca.com';

		    		$headers = "MIME-Version: 1.0" . "\r\n";
		    		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		    		$headers .= "From: Student Council<".$from.">\r\n";
		    		$headers .= "Reply-To: ".$reply."";




		     		if(mail($value,$subject,$message,$headers))
		    		{	
		    						// echo '<div  style="color:#4CAF50;">';
		    			 		//     echo '<strong>Success! </strong>'; 
		    			 		//     echo ' Form mailed Successfully...</br>';
		    						// echo '</div></div>';

		    		} 
		    		else{
		    			// echo "No email send!";
		    		}





		    require_once 'checkbox.php';
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



	<div class="container">
       <div class="profile-img center">
       		<img src="../Assets/img/avatar.png" height="128"  alt="">
       	</div>

	    <div class="s12 center" style="font-weight: bolder;text-transform: uppercase;padding-bottom: 15px;">
	       	<span><?php echo $_SESSION['stud_name'] ?></span><br>
	       	<span class="final-enroll center"><?php echo $year ?></span><br>
	    </div>
	</div>


    <div class="container">
       	<div class="row center">


       		<div class="chip">
       		  <img src="../Assets/img/letter.png" ><b><?php echo  $email; ?></b>
       		</div>


       		<div class="chip">
       		  <img src="../Assets/img/smartphone.png" ><b><?php echo '+91-'.$mobile; ?></b>
       		</div>



       	</div>
    </div>

    <div class="container center">
       	<div class="row center">

       		<div class="chip ">
       		  <img src="../Assets/img/cse.png" ><b><?php echo  $_SESSION['stud_skills']; ?></b>
       		</div>

       		<div class="chip ">
       			<img src="../Assets/img/map3.png" ><b><?php echo $state; ?></b>
       		</div>


       		<div class="chip ">
       			<img src="../Assets/img/calendar.png" ><b><?php echo  $dob; ?></b>
       		</div>

       	</div>
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


   <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
   <script src="../Assets/js/materialize.js"></script>
   <script src="../Assets/js/init.js"></script>



</body>
</html>

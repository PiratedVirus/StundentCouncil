<?php 
	ob_start();
	session_start();
	include 'Core/dbconnect.php';
	$myvalue = $_SESSION['stud_name'];
	$arr = explode(' ',trim($myvalue));
	$fname = $arr[0]; 
?>
<html>
	<head>

	  <meta http-equiv="Content-Type" content="text/html"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	  <meta name="theme-color" content="#009688 ">
	  <meta name="msapplication-navbutton-color" content="#009688 ">
	  <meta name="apple-mobile-web-app-status-bar-style" content="#009688 ">
	  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">


	  <title>Welcome  <?php echo $fname; ?></title>

	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
	  <link rel="stylesheet" href="Assets/css/base.css">

	</head>
	<body>

	<!-- Dropdown Structure -->
	<ul id="settings" class="dropdown-content">
	  <li><a href="Core/changepass">Change Password</a></li>
	  <li><a href="logout.php?logout">Log Out</a></li>
	  <li class="divider"></li>
	  <li><a href="http://www.scouncilgeca.com"><b> STUDENT COUNCIL</b></a></li>
	</ul>


		<nav id="home-menu">
	    <div class="nav-wrapper">

	      <ul id="slide-out" class="side-nav">

	          <li><div class="userView">
	            <img class="background" src="Assets/img/b (5).jpg">
	            <a href="#"><img class="circle" src="Assets/img/userios.png"></a>
	            <a href="#"><span  class="white-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
	            <a href="#"><span class="white-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
	          </div></li>
	          <li><a href="home"><img class="slideicon" src="Assets/img/home.png"  alt="">Home</a></li>
	          <li><a href="user/update"><img class="slideicon" src="Assets/img/editpro.png"  alt="">Edit Profile</a></li>
	          <li><a href="logout.php?logout"><img class="slideicon" src="Assets/img/logout.png"  alt="">Log Out</a></li>
	          <li><a href="changepass">Change Password</a></li>
	          <li><a class="dropdown-button" href="#!" data-activates="settings">Settings<i class="material-icons right">settings</i></a></li>

	          <li><div class="divider"></div></li>
	          <li><a href="http://www.scouncilgeca.com"><b> STUDENT COUNCIL</b></a></li>
	          <li><a href="http://www.scouncilgeca.com#team-link">Team</a></li>
	          <li><a href="http://www.scouncilgeca.com#contact-link">Contact Us</a></li>

	      </ul>

	      <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
	      <i class="material-icons">menu</i></a>

	      <!-- <a href="http://www.scouncilgeca.com" class="brand-logo center">Student Council</a> -->
	      <a href="http://geca.ac.in" target="_blank" class="brand-logo center downlift"><img src="Assets/img/final_small.png"></a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	      <li><a href="logout.php?logout">Log out</a></li>
	      <li><a href="http://www.scouncilgeca.com#team-link">Team</a></li>
	      <li><a href="http://www.scouncilgeca.com#contact-link">Contact Us</a></li>
	      <li><a class="dropdown-button white-text" href="#!" data-activates="settings"><img class="slideicon" style="bottom: -7px;" src="Assets/img/userios.png"><b><?php echo $fname ?></b><i style="color: #fff; " class="material-icons right spin">settings</i></a></li>

	      </ul>


	    </div>
	  </nav>

	  <div class="row user-name teal">
	    <div class="container">
	      <div class="col s12 left1">
	      	<h1 class="hi-header">Hi, <?php echo $fname ?> </h1>
	      </div>
	    </div>
	  </div>


</html>
<?php 
	
	$sql = mysqli_query($conn,"SELECT * FROM skills WHERE userId = '".$_SESSION['stud_id']."'");
	$arr = mysqli_fetch_array($sql);

	$sqluser = mysqli_query($conn,"SELECT * FROM users WHERE userId = '".$_SESSION['stud_id']."'");
	$arruser = mysqli_fetch_array($sqluser);


	$get = mysqli_query($conn,"SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_NAME='skills'");
	
?>


	       	
	       <div class="container admin-view">
	       	<div class="row">
	       		<div class="col offset-s6 offset-m11 m3">
	       			<div class="chip right" style="text-transform: uppercase;color: #000;">
	       			  <img src="Assets/img/id-card-3.png" ><b><?php echo  $arr['userId']; ?></b>
	       			</div>

	       		</div>
	       	</div>

	       	<div class="center">
	       		<img style="padding-bottom: 10px;" height="128"  src="Assets/img/avatar.png" alt="">
	       		<div class="s12 center" style="font-weight: bolder;text-transform: uppercase;">
	       			<span><?php echo $arr['userName']; ?></span><br>
	       			<span class="final-enroll center"><?php echo  $arr['academic_year'] ?></span><br>
	       		</div>

	       	</div>
	       </div>

 <hr style="margin: 40px;" class="header-holder">
 <div class="container">
 	<div class="row center">

 		<div class="chip">
 		  <img src="Assets/img/cse.png" ><b><?php echo  $arruser['Skills']; ?></b>
 		</div>

 		<div class="chip">
 			<img src="Assets/img/map3.png" ><b><?php echo $arruser['state']; ?></b>
 		</div>


 		<div class="chip">
 			<img src="Assets/img/calendar.png" ><b><?php echo  $arruser['dob']; ?></b>
 		</div>

 	</div>
 </div>

 <hr style="margin: 40px;" class="header-holder">

<?php


	if (!$get) {
	    echo 'Could not run query: ' . mysqli_error();
	    exit;
	}

	$cnt = 1;
	
	if (mysqli_num_rows($get) > 0) {
		
	    while ($row = mysqli_fetch_assoc($get)) {

	        $output_col_name = implode($row);


        	$check_bool = $arr[print_r($output_col_name, true)];

        	if ($check_bool == 1) {
        		
        		// echo '<br>';
        		$cnt++;
        		printCnt($cnt,$output_col_name,$check_bool);

        	}
	    }
	}

	function printCnt($cnt,$output_col_name,$check_bool){
		
		echo "<div style='margin-left: 50px;' class='chip s2'>";
		echo "<span style='text-transform: uppercase;text-align: center;'>  <b>$output_col_name</b></span>";
		echo "</div>";
	}



	// $c = "red";
	// $s = "blue";
	// $stat ="post";

	// //Now you need to generate a dynamic url in your php1 file

	// $url = 'dy.php?color='.$c.'&sky='.$s.'&past='.$stat;
	// //now genearte a dynamic link
	// echo '<a href="'. $url.'">Click me</a>';
	// //you have dynamic link. after clicking it will take you to different page
	// //your url shoule be www.mywebsite/script.php?color=red&sky=blue&past=gone
	// //just concanate



 ?>



 <script src="Assets/js/jquery-1.11.3-jquery.min.js"></script>  
 <script src="Assets/js/materialize.js"></script>  
 <script src="Assets/js/init.js"></script>

















 <!-- if (mysqli_num_rows($get) > 0) {
		
	    while ($row = mysqli_fetch_assoc($get)) {

	        $output_col_name = implode($row);


        	$check_bool = $arr[print_r($output_col_name, true)];

        	if ($check_bool == 1) {
        		
        		// echo $arr[print_r($output_col_name, true)];
        		echo '<br>';
        		$cnt++;
        		printCnt($cnt,$output_col_name,$check_bool);
        		// print_r($output_col_name);

        	}
	    }
	}

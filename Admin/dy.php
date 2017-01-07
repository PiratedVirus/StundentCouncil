<?php 
	include '../Core/dbconnect.php';
	$id = $_GET['id'];
	$sql = mysqli_query($conn,"SELECT * FROM users WHERE userId='$id'");
	$arr = mysqli_fetch_array($sql);
	session_start();

	  
	  if ( isset($_SESSION['user']) =="" ) {
	      header("Location: ../Login");
	      exit;
}
	$user_id = $arr['userId'];

	$_SESSION['stud_id'] = $user_id;
	// echo  $arr['Skills'];
	// echo  $arr['mobile'];
	// echo  $arr['academic_year'];
	// echo  $arr['dob'];
	// echo  $arr['state'];
	// echo $arr['userName'];
	// echo $arr['userEmail'];
	// echo $arr['userId'];
	// echo $arr['state'];
	// echo $arr['remarks'];
?>
<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title>Welcome  Admin </title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="../Assets/css/nockeckbox.css">
  <link rel="stylesheet" href="../Assets/css/input.css">
  <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">


  <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
  <script src="../Assets/js/autosave.js"></script>
  <script src="../Assets/js/analytics.js"></script>

  <style>
  	.input-field div.error,.save,.prev-rem{
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
 </style>
</head>
<body>
<div class="navbar-fixed">
  <nav id="admin-menu">
      <div class="nav-wrapper">

        <ul id="slide-out" class="side-nav">
            <li><div class="userView">
              <img class="background" src="../Assets/img/b (5).jpg">
              <a href="#"><img class="circle" src="../Assets/img/userios.png"></a>
              <a href="#"><span  class="white-text name slide-username"> <b>Admin</b></span></a>
              <a href="#"><span class="white-text email"></span></a>
            </div></li>
          
            <li><a href="adminhome.php">Home</a></li>
            <li><a href="#combolink">Combo sort</a></li>
            <li><a href="#bracheslink">Branches</a></li>
            <li><a href="#yearlink">Year</a></li>
            <li><a href="#skillink">Skills</a></li>
            <li><a href="#resultlink">Results</a></li>
            <li><div class="divider"></div></li>
            <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
            <li><div class="divider"></div></li>
            <li><a href="../default.html"><b>STUDENT COUNCIL</b></a></li>



            <li><a class="waves-effect" href="#">Events</a></li>
            <li><a class="waves-effect" href="#">Something</a></li>
        </ul>

        <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
        <i class="material-icons">menu</i></a>

        <a href="../default.html" class="brand-logo center">Student Council</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="adminhome.php">Home</a></li>
          <li><a href="adminhome.php#combolink">Combo sort</a></li>
          <li><a href="adminhome.php#bracheslink">Branches</a></li>
          <li><a href="adminhome.php#yearlink">Year</a></li>
          <li><a href="adminhome.php#skillink">Skills</a></li>
          <li><a href="adminhome.php#resultlink">Results</a></li>
        </ul>


      </div>
  </nav>
</div>
<div class="container admin-view">
	<div class="row">
		<div class="col offset-s6 offset-m11 m3">
			<div class="chip right" style="text-transform: uppercase;">
			  <img src="../Assets/img/id-card-3.png" ><b><?php echo  $arr['userId']; ?></b>
			</div>

		</div>
	</div>

	<div class="center">
		<img style="padding-bottom: 10px;" src="../Assets/img/avatar.png" alt="">
		<div class="s12 center" style="font-weight: bolder;text-transform: uppercase;">
			<span><?php echo $arr['userName']; ?></span><br>
			<span class="final-enroll center"><?php echo  $arr['academic_year'] ?></span><br>
		</div>

	</div>
</div>


<hr style="margin: 40px;" class="header-holder">
<div class="hr-strip row">
	<?php 
		$mobile = $arr['mobile'];
		$mail = $arr['userEmail'];
		$remarks = $arr['remarks'];

		echo "<td><span class =\"bold-text col center s6 m3 gray\"><img height=32 src='../Assets/img/phone-call.png'>  <br><a href=tel:$mobile> +91-$mobile </a> </span></td> ";
		echo "<td><span style='padding-bottom: 20px;' class =\"bold-text col center s6 m3\"><img height=32 src='../Assets/img/email.png'>   <br><a href=$mail> $mail </a> </span></td> ";
		echo "<td><span style='padding-right: 20px;' class =\" col s12 m6\">  <textarea placeholder='Remarks' id='Remarks' name='Remarks'></textarea></td>";
		echo "<div class='save'>Previous remarks will be erased as soon as you type new remark....</div>";
		echo "<div class='prev-rem'><b style='color: brown; text-transform: uppercase;'>Previous remarks</b><br><p style='text-indent: 40px;margin-top: 2px;color:#000;'>$remarks</p></div>";
	?>
</div>


<hr style="margin: 40px;" class="header-holder">
<div class="container">
	<div class="row center">

		<div class="chip">
		  <img src="../Assets/img/cse.png" ><b><?php echo  $arr['Skills']; ?></b>
		</div>

		<div class="chip">
			<img src="../Assets/img/map3.png" ><b><?php echo $arr['state']; ?></b>
		</div>


		<div class="chip">
			<img src="../Assets/img/calendar.png" ><b><?php echo  $arr['dob']; ?></b>
		</div>
	</div>

	<div class="row center">
		<div class="chip">
			<b><?php echo  $arr['future']; ?></b>
		</div>

		<div class="chip">
			<b><?php echo  $arr['sugg']; ?></b>
		</div>

	</div>


	</div>
</div>

<hr style="margin: 40px;" class="header-holder">

<?php 
	
	$userId = $arr['userId'];
	// $sql = mysqli_query($conn,"SELECT * FROM skills WHERE userId = $userId");
	// $arr = mysqli_fetch_array($sql);

	$sql = mysqli_query($conn,"SELECT * FROM skills WHERE userId='$id'");
	$arr = mysqli_fetch_array($sql);


	$get = mysqli_query($conn,"SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_NAME='skills'");



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
	
?>

<hr style="margin: 40px;" class="header-holder">
<?php  
	$userId = $arr['userId'];

	$sqlachivements = mysqli_query($conn,"SELECT * FROM skills WHERE userId='$userId'");
	$arrachive = mysqli_fetch_array($sqlachivements);

?>
	<div class="row">
		<div class="col m4 s12 center">
			<p class="edit-head">TECHNICAL</p>
			<p class="center"><?php echo $arrachive['hightech']; ?></p>
			<hr style="margin: 40px;" class="header-holder">

		</div>
		<div class="col m4 s12 center">
			<p class="edit-head">CULTURAL</p>
			<?php echo $arrachive['highcult']; ?>
			<hr style="margin: 40px;" class="header-holder">

		</div>
		<div class="col m4 s12 center">
			<p class="edit-head">SPORTS</p>
			<?php echo $arrachive['highsports']; ?>
			<hr style="margin: 40px;" class="header-holder">

		</div>
	</div>
<hr class="header-holder">
<div class="row">
	<div class="col s12 center">
		<h3 style="font-size: 24px;" class="edit-head">WINGS</h3>

	</div>
	
	<div class="col m4 s12">
		<div  class="edit-head center">Preference 1</div><br>
		<div class="gray center">
			<?php echo $arrachive['pref1'] ?>
		</div>
		<div  class="edit-head center red-text">-------</div><br>
		<div class="gray center prefbottom">
			<?php echo $arrachive['pref1ans'] ?>
		</div>


	</div>

	
	<div class="col m4 s12">
		<div class="edit-head center">Preference 2</div><br>
		<div class="gray center">
			<?php echo $arrachive['pref2'] ?>
		</div>
		<div  class="edit-head center red-text">-------</div><br>
		<div class="gray center prefbottom">
			<?php echo $arrachive['pref2ans'] ?>
		</div>

	</div>


	<div class="col m4 s12">
		<div class="edit-head center">Preference 3</div><br>
		<div class="gray center">
			<?php echo $arrachive['pref3'] ?>
		</div>
		<div  class="edit-head center red-text">-------</div><br>
		<div class="gray center prefbottom">
			<?php echo $arrachive['pref3ans'] ?>
		</div>

	</div>

	<div class="col m7 s12 center gray">
		<p><b>Work experience in WINGS or any other event?</b></p>
	</div>
	<div class="col m5 s12 center edit-head">
		<p><?php echo $arrachive['ques1'] ?></p>
	</div>

	<div class="col m7 s12 center gray">
		<p><b>Busy in any other event other than WINGS?</b></p>
	</div>
	<div class="col m5 s12 center edit-head">
		<p><?php echo $arrachive['ques2txt'] ?></p>
	</div>

</div>

</body>

	<script src="../Assets/js/materialize.js"></script>
	<script src="../Assets/js/init.js"></script>
</html>
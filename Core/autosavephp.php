<?php
  include 'dbconnect.php';
  $host="localhost";
  $user="santdbgd_geca";
  $pass="Saurabh@123#";
  $dbname="santdbgd_saurabh";
  ob_start();
  session_start();

  
  $dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
  // echo $_SESSION['stud_id'];
  $user =  $_SESSION['stud_id'];
  // echo $user;
  
  if($_POST) 
  {
      $enroll = strip_tags($_POST['Remarks']);

	  $stmt=$dbcon->prepare("SELECT enrollment FROM enrollment WHERE enrollment=:enroll");
	  $stmt->execute(array(':enroll'=>$enroll));
	  $count=$stmt->rowCount();

	  $tester=$dbcon->prepare("SELECT userId FROM users WHERE userId=:enroll");
	  $tester->execute(array(':enroll'=>$enroll));
	  $enrollcount=$tester->rowCount();



	  // $get = mysqli_query($conn,"SELECT name FROM enrollment WHERE enrollment = '$enroll'");
	  // $arr = mysqli_fetch_array($get);
	  // echo $user;

	  $sql = mysqli_query($conn,"UPDATE users SET Remarks = '$enroll' WHERE userId='$user'");
	  if(!$sql){
	  	echo "<span style='color:red;'>Not Saved</span>";
	  }	
	    if($sql){
	  		echo "<span style='color:green;'>Saved</span>";
	  }



	  
  }
?>

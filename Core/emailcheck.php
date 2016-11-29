<?php
  include 'dbconnect.php';
  $host="localhost";
  $user="root";
  $pass="";
  $dbname="students";
  
  $dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
  
  if($_POST) 
  {
 		
 	  $email = strip_tags($_POST['cemail']);

	  $query = "SELECT userEmail FROM users WHERE userEmail = '$email'";
	  $result = mysqli_query($conn,$query);
	  $emailcount = mysqli_num_rows($result);




	  if($emailcount!=0) {
	  	echo "<span style='color:red;'>Copy Cat ! Use your own Email address!</span>";
	  }
	  
  }
?>

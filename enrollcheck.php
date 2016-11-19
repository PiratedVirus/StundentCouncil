<?php
  
  $host="localhost";
  $user="root";
  $pass="";
  $dbname="students";
  
  $dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
  
  if($_POST) 
  {
      $enroll = strip_tags($_POST['enroll']);
      
	  $stmt=$dbcon->prepare("SELECT enrollment FROM enrollment WHERE enrollment=:enroll");
	  $stmt->execute(array(':enroll'=>$enroll));
	  $count=$stmt->rowCount();
	  	  
	  if($count>0)
	  {
		  // echo "<span style='color:brown;'>Sorry username already taken !!!</span>";
	  }
	  else
	  {
	  	  $('.errorTxt0').html('No Match Found')
		  echo "<span style='color:red;'>No match Found</span>";
	  }
  }
?>
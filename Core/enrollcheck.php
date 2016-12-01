<?php
  include 'dbconnect.php';
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

	  $tester=$dbcon->prepare("SELECT userId FROM users WHERE userId=:enroll");
	  $tester->execute(array(':enroll'=>$enroll));
	  $enrollcount=$tester->rowCount();



	  $get = mysqli_query($conn,"SELECT name FROM enrollment WHERE enrollment = '$enroll'");
	  $arr = mysqli_fetch_array($get);


	  if($enrollcount!=0) {
	  	echo "<span style='color:red;'>Somebody hacked you before you!</span>";

	  }  else{
	  	  if($count>0)
	  	  {
	  		  echo "<span style='color:green;'>Awesome ! Welcome to nothing!</span>";
	  	  }
	  	  else
	  	  {
	  		  echo "<span style='color:red;'>Uh Oh ! Seems like you are not from 'The GECA'</span>";
	  	  }
	  }
	  
  }
?>
<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
<script>
	
	var name = '<?php echo $arr['name'] ?>';
	$('#new-name').val(name);
	Materialize.updateTextFields();
	$('select').material_select();

</script>
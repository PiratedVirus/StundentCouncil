<?php
  include 'dbconnect.php';
  $host="localhost";
  $user="santdbgd_geca";
  $pass="Saurabh@123#";
  $dbname="santdbgd_saurabh";
  ob_start();
  session_start();

  
  $dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
  $user =  $_SESSION['stud_id'];
  
  if($_POST) 
  {
      $enroll = strip_tags($_POST['prevpass']);

	  $sql = mysqli_query($conn,"SELECT * FROM users WHERE userId='$user'");
	  $arr = mysqli_fetch_array($sql);

	  $userPass = $arr['userPass']; 

	   // Decryption function
	    function decryptIt( $q ) {
	        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
	        $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
	        return( $qDecoded );
	    }
	  $decrypted = decryptIt( $userPass );



	  if($enroll == $decrypted){
	  	echo "<span style='color:green;'>Password Matched</span>";
		  ?>
	  				<script>
	  				  
	  				$('#newpass').attr('disabled', false);
	  				$('#cnfrmpass').attr('disabled', false);
	  				</script>

  		  <?php
	  } else{
	  	echo "<span style='color:red;'>No match</span>";
	  	?>
	  				<script>
	  				$('#newpass').attr('disabled', true);
	  				$('#cnfrmpass').attr('disabled', true);
	  				</script>
	  	<?php

	  }

	  
  }
?>

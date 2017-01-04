<?php
  include 'dbconnect.php';
  $host="localhost";
  $user="santdbgd_geca";
  $pass="Saurabh@123#";
  $dbname="santdbgd_saurabh";

  
  $dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
  
  if($_POST) 
  {
      $enroll = strip_tags($_POST['enrollment']);

	  $stmt=$dbcon->prepare("SELECT enrollment FROM enrollment WHERE enrollment=:enroll");
	  $stmt->execute(array(':enroll'=>$enroll));
	  $count=$stmt->rowCount();

	  $tester=$dbcon->prepare("SELECT userId FROM users WHERE userId=:enroll");
	  $tester->execute(array(':enroll'=>$enroll));
	  $enrollcount=$tester->rowCount();



	  $get = mysqli_query($conn,"SELECT userEmail,userPass FROM users WHERE userId = '$enroll'");
	  $arr = mysqli_fetch_array($get);

	  $pass = $arr['userPass'];

	  $password = hash('sha256', $pass);

	  function encryptIt( $q ) {
	      $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
	      $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
	      return( $qEncoded );
	  }

	  function decryptIt( $q ) {
	      $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
	      $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
	      return( $qDecoded );
	  }

	  $decrypted = decryptIt( $pass );

	  // echo $decrypted;


	  if($enrollcount!=0) {
	  	$value = $arr['userEmail'];

	  			$subject = 'Key To Recover your ALZHEIMER';
	  			$message = 'The combination of secret letters that you forget is' .$decrypted;
	  			$from = 'admin@scouncilgeca.com';
	  			$reply = 'admin@scouncilgeca.com';

	  				$headers = "MIME-Version: 1.0" . "\r\n";
	  				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	  				$headers .= "From: Student Council<".$from.">\r\n";
	  				$headers .= "Reply-To: ".$reply."";




	  		 		if(mail($value,$subject,$message,$headers))
	  				{	
	  								echo '<div  style="color:#4CAF50;">';
	  					 		    echo '<strong>Success! </strong>'; 
	  					 		    echo ' Mail has been Successfully sent to <b>'.$value.'.</b> Check your \'Updates\' Tab.</br>';
	  								echo '</div></div>';

	  				} 
	  				else{
	  					echo "No email send!";
	  				}
























	  }  else{
	  	  if($count>0)
	  	  {
	  		  echo "<span style='color:green;'>Dear user......First Register yourself! </span>";
	  	  }
	  	  else
	  	  {
	  		  echo "<span style='color:red;'>Uh Oh ! Seems like you are not from 'The GECA'</span>";
	  	  }
	  }
	  
  }
?>

<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';

	// it will never let you open index(login) page if session is set
	// if ( isset($_SESSION['user'])!="" ) {
	// 	header("Location: adminhome.php");
	// 	exit;
	// }

	// For admin login there must be a normal account created ( by main admin (that passwordis used for admin acc too!)) and then in database a id should be enterd in adminId col.

	$error = false;

	if( isset($_POST['btn-login']) ) {


		$id = trim($_POST['id']);
		$id = strip_tags($id);
		$id = htmlspecialchars($id);

		$pass = trim($_POST['password']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		// prevent sql injections / clear user invalid inputs


		if(empty($id)){
			$error = true;
			$idError = "Please enter your Id";
		}

		if(empty($pass)){
			$error = true;
			$passError = "Please enter your password.";
		}

		// if there's no error, continue to login
		if (!$error) {

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

			$encrypted = encryptIt( $pass );

			//passing array for retring whole info
			$res=mysqli_query($conn,"SELECT userId, userName, userPass FROM users WHERE adminId='$id'");
			$row=mysqli_fetch_array($res);
			$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row




			//passing array for retring whole info
			$get = mysqli_query($conn,"SELECT userName,userEmail,userId,userPass,Skills FROM users WHERE adminId='$id'");
			$arr = mysqli_fetch_array($get);

			$user_name = $arr['userName'];
			$user_email = $arr['userEmail'];
			$user_id = $arr['userId'];
			$user_pass = $arr['userPass'];
			$user_skills = $arr['Skills'];


			$_SESSION['stud_name'] = $user_name;
			$_SESSION['stud_email'] = $user_email;
			$_SESSION['stud_id'] = $user_id;
			$_SESSION['stud_pass'] = $user_pass;
			$_SESSION['stud_skills'] = $user_skills;

			if( $count == 1 && $row['userPass']==$encrypted ) {
				$_SESSION['user'] = $row['userId'];
				header("Location: admin/adminhome.php");

			} else {
				$errMSG = "Incorrect Credentials, Try again...";
			}

		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin Log In</title>
	<link rel="stylesheet" href="Assets/css/base.css">
</head>
<body>


	<div class="row">
    <form class="col m6 s12 offset-m3" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
 
    	<div class="col s12">


            <?php
			if ( isset($errMSG) ) {

				?>
				<div class="form-group">
            	<div class="alert alert-danger">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>

            <div class="input-field">
            	<label for="label-enroll-admin" data-error = "<?php echo $idError; ?>">Admin ID</label>
            	<input type="text" name="id" class="form-control" id="label-enroll-admin" value="<?php echo $id; ?>" maxlength="40" />
                <span class="text-danger"><?php echo $idError; ?></span>
            </div>

            <div class="input-field">
            	<label for="label-pass-admin" data-error = "<?php echo $idError; ?>">Password</label>
            	<input type="password" id="label-pass-admin" name="password" class="form-control"  maxlength="15" />
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>



            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-login">Log In</button>
            </div>





        </div>

    </form>
    </div>

</div>

</body>

<script src="Assets/js/jquery-1.11.3-jquery.min.js"></script>
<script src="Assets/js/materialize.js"></script>
<script src="Assets/js/init.js"></script>

</html>
<?php ob_end_flush(); ?>

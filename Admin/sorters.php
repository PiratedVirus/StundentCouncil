<?php
	error_reporting(0);
	ob_start();
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "students";

	include '../Core/checkbox.php';

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	}
// dec varibles for Combo sort
	if (isset($_POST['FE'])) {
		$fe = 'First Year';
	  } else {
	  	$fe = '';
	}

	if (isset($_POST['SE'])) {
		$se = 'Second Year';
	} else {
		$se = '';
	}

	if (isset($_POST['TE'])) {
	    $te = 'Third Year';
	} else {
		$te = '';
	}

	if (isset($_POST['BE'])) {
		$be = 'Final Year';
	} else {
		$be ='';
	}

	if (isset($_POST['CSE'])) {
		$cse = 'Computer Science And Engineering';
	} else {
		$cse ='';
	}

	if (isset($_POST['Mech'])) {
		$mech = 'Mechanical Engineering';
	} else {
		$mech ='';
	}

	if (isset($_POST['Civil'])) {
		$civil = 'Civil Engineering';
	} else {
		$civil ='';
	}

	if (isset($_POST['Entc'])) {
		$entc = 'Elctronics And Telecommunications';
	} else {
		$entc ='';
	}

	if (isset($_POST['Elect'])) {
		$elect = 'Electrical Engineering';
	} else {
		$elect ='';
	}

	if (isset($_POST['It'])) {
		$it = 'Information Technology';
	} else {
		$it ='';
	}

	if (isset($_POST['Mca'])) {
		$mca = 'MCA';
	} else {
		$mca ='';
	}
//combo sort ends here

// Branch and year seprate sorting
	if (isset($_POST['single-cse'])) {
			$query_cse = "SELECT * FROM users WHERE Skills = 'Computer Science And Engineering'";

			    $cse_result = $conn->query($query_cse);

			    ?>
			    <form method="POST" action=""> 
			    <?php
			    if ($cse_result->num_rows > 0) {
			         echo "<table class=\"striped centered responsive-table \"> <thead>  <th> CHECK </th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
			         // output data of each row
			         while($row = $cse_result->fetch_assoc()) {
			         	 	echo "
			         	 	<tr> 
			         		 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
			         		 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
			         		 	<td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  
			         		 	<td>".$row["Skills"]."</td>  
			         		 	<td>".$row["academic_year"]."</td> 
			         		 	<td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   
			         	 	</tr>";   

			         	 }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>

			    		<input type="submit" class="btn btn-waves" value="set">
			    		</form>
			    	<?php

		}

	if (isset($_POST['single-mech'])) {
			$query_mech = "SELECT * FROM users WHERE Skills = 'Mechanical Engineering'";

			    $mech_result = $conn->query($query_mech);

			    $cnt = 1;
			    ?>
			    			    <form method="POST" action=""> 
			    			    <?php	
			    if ($mech_result->num_rows > 0) {
			         echo "<table class=\"striped centered responsive-table \"> <thead>  <th> CHECK </th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
			         // output data of each row
			         while($row = $mech_result->fetch_assoc()) {
			         	 	echo "
			         	 	<tr> 
			         		 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
			         		 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
			         		 	<td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  
			         		 	<td>".$row["Skills"]."</td>  
			         		 	<td>".$row["academic_year"]."</td> 
			         		 	<td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   
			         	 	</tr>";   


       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>

			    		<input type="submit" class="btn btn-waves" value="set">
			    		</form>
			    	<?php

		}

	if (isset($_POST['single-civil'])) {
			$query_civil = "SELECT * FROM users WHERE Skills = 'Civil Engineering'";

			    $civil_result = $conn->query($query_civil);

			    $cnt = 1;
			    ?>
			    			    <form method="POST" action=""> 
			    			    <?php	
			    if ($civil_result->num_rows > 0) {
			         echo "<table class=\"striped centered responsive-table \"> <thead>  <th> CHECK </th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	echo "
			         	 	<tr> 
			         		 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
			         		 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
			         		 	<td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  
			         		 	<td>".$row["Skills"]."</td>  
			         		 	<td>".$row["academic_year"]."</td> 
			         		 	<td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   
			         	 	</tr>";   

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>

			    		<input type="submit" class="btn btn-waves" value="set">
			    		</form>
			    	<?php

		}

	if (isset($_POST['single-entc'])) {
			$query_civil = "SELECT * FROM users WHERE Skills = 'Elctronics And Telecommunications'";

			    $civil_result = $conn->query($query_civil);

			    $cnt = 1;
			    ?>
			    			    <form method="POST" action=""> 
			    			    <?php	
			    if ($civil_result->num_rows > 0) {
			         echo "<table class=\"striped centered responsive-table \"> <thead>  <th> CHECK </th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	echo "
			         	 	<tr> 
			         		 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
			         		 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
			         		 	<td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  
			         		 	<td>".$row["Skills"]."</td>  
			         		 	<td>".$row["academic_year"]."</td> 
			         		 	<td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   
			         	 	</tr>";   

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>

			    		<input type="submit" class="btn btn-waves" value="set">
			    		</form>
			    	<?php

		}

	if (isset($_POST['single-it'])) {
			$query_civil = "SELECT * FROM users WHERE Skills = 'Information Technology'";

			    $civil_result = $conn->query($query_civil);

			    $cnt = 1;
			    ?>
			    			    <form method="POST" action=""> 
			    			    <?php	
			    if ($civil_result->num_rows > 0) {
			         echo "<table class=\"striped centered responsive-table \"> <thead>  <th> CHECK </th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	echo "
			         	 	<tr> 
			         		 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
			         		 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
			         		 	<td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  
			         		 	<td>".$row["Skills"]."</td>  
			         		 	<td>".$row["academic_year"]."</td> 
			         		 	<td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   
			         	 	</tr>";   

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>

			    		<input type="submit" class="btn btn-waves" value="set">
			    		</form>
			    	<?php

		}

	if (isset($_POST['single-elect'])) {
			$query_civil = "SELECT * FROM users WHERE Skills = 'Electrical Engineering'";

			    $civil_result = $conn->query($query_civil);

			    $cnt = 1;
			    ?>
			    			    <form method="POST" action=""> 
			    			    <?php	
			    if ($civil_result->num_rows > 0) {
			         echo "<table class=\"striped centered responsive-table \"> <thead>  <th> CHECK </th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	echo "
			         	 	<tr> 
			         		 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
			         		 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
			         		 	<td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  
			         		 	<td>".$row["Skills"]."</td>  
			         		 	<td>".$row["academic_year"]."</td> 
			         		 	<td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   
			         	 	</tr>";   

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>

			    		<input type="submit" class="btn btn-waves" value="set">
			    		</form>
			    	<?php

		}

	if (isset($_POST['single-fe'])) {
			$query_civil = "SELECT * FROM users WHERE academic_year = 'First Year'";

			    $civil_result = $conn->query($query_civil);

			    $cnt = 1;
			    ?>
			    			    <form method="POST" action=""> 
			    			    <?php	
			    if ($civil_result->num_rows > 0) {
			         echo "<table class=\"striped centered responsive-table \"> <thead>  <th> CHECK </th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	echo "
			         	 	<tr> 
			         		 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
			         		 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
			         		 	<td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  
			         		 	<td>".$row["Skills"]."</td>  
			         		 	<td>".$row["academic_year"]."</td> 
			         		 	<td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   
			         	 	</tr>";   

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>

			    		<input type="submit" class="btn btn-waves" value="set">
			    		</form>
			    	<?php

		}

	if (isset($_POST['single-se'])) {
			$query_civil = "SELECT * FROM users WHERE academic_year = 'Second Year'";

			    $civil_result = $conn->query($query_civil);

			    $cnt = 1;
			    ?>
			    			    <form method="POST" action=""> 
			    			    <?php	
			    if ($civil_result->num_rows > 0) {
			         echo "<table class=\"striped centered responsive-table \"> <thead>  <th> CHECK </th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	echo "
			         	 	<tr> 
			         		 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
			         		 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
			         		 	<td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  
			         		 	<td>".$row["Skills"]."</td>  
			         		 	<td>".$row["academic_year"]."</td> 
			         		 	<td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   
			         	 	</tr>";   

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>

			    		<input type="submit" class="btn btn-waves" value="set">
			    		</form>
			    	<?php

		}

	if (isset($_POST['single-te'])) {
			$query_civil = "SELECT * FROM users WHERE academic_year = 'Third Year'";

			    $civil_result = $conn->query($query_civil);

			    $cnt = 1;
			    ?>
			    			    <form method="POST" action=""> 
			    			    <?php	
			    if ($civil_result->num_rows > 0) {
			         echo "<table class=\"striped centered responsive-table \"> <thead>  <th> CHECK </th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	echo "
			         	 	<tr> 
			         		 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
			         		 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
			         		 	<td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  
			         		 	<td>".$row["Skills"]."</td>  
			         		 	<td>".$row["academic_year"]."</td> 
			         		 	<td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   
			         	 	</tr>";   
							}
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>

			    		<input type="submit" class="btn btn-waves" value="set">
			    		</form>
			    	<?php

		}

	if (isset($_POST['single-be'])) {
			$query_civil = "SELECT * FROM users WHERE academic_year = 'Final Year'";

			    $civil_result = $conn->query($query_civil);

			    $cnt = 1;
			    ?>
			    			    <form method="POST" action=""> 
			    			    <?php	
			    if ($civil_result->num_rows > 0) {
			         echo "<table class=\"striped centered responsive-table \"> <thead>  <th> CHECK </th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	echo "
			         	 	<tr> 
			         		 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
			         		 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
			         		 	<td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  
			         		 	<td>".$row["Skills"]."</td>  
			         		 	<td>".$row["academic_year"]."</td> 
			         		 	<td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   
			         	 	</tr>";   
			         	 }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>

			    		<input type="submit" class="btn btn-waves" value="set">
			    		</form>
			    	<?php

		}

	

		$sql = "SELECT * FROM users WHERE (academic_year = '$fe' or academic_year = '$se' or academic_year = '$te' or academic_year = '$be') AND ( Skills = '$cse' or Skills = '$mech' or Skills = '$civil' or Skills = '$entc' or Skills = '$it' or Skills = '$elect' ) ";
		$result = $conn->query($sql);

		
		?>
		<form method="POST" action=""> 
		<?php
		if ($result->num_rows > 0) {
			echo "<table class=\"striped centered responsive-table \"> <thead>  <th> CHECK </th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";

			 
			 // output data of each row
			 while($row = $result->fetch_assoc()) {
			 	echo "
			 	<tr> 
				 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
				 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
				 	<td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  
				 	<td>".$row["Skills"]."</td>  
				 	<td>".$row["academic_year"]."</td> 
				 	<td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   
			 	</tr>";   

			 	 }	 

			 echo "</table>";
		
	?>


		<input type="submit" class="btn btn-waves" value="set1">
		</form>
	<?php
			 	
			 }






	
		 	
		 
	// Branch and year seprate sorting ends here

	$checkboxes = "SELECT * FROM skills WHERE app = '$app' OR web = '$web' OR photoshop ='$graphics' OR animation = '$animations' OR networking = '$networking' OR autocad = '$autocad' OR katia = '$katia' OR robocon ='$robocon'  OR acting = '$act' OR dance = '$dance' OR ankering = '$anker' OR singing = '$sing' OR drama ='$drama' OR writing = '$writing' OR poetry = '$poetry' OR drawing = '$drawing' OR decoration ='$decoration' OR painting ='$paint' OR cricket ='$cricket' OR badminton='$badminton' OR football ='$football' OR chess ='$chess' or kabbadi ='$kabbadi' OR vollyball ='$vollyball' or PHP ='$PHP' or Video ='$Video' or Photo ='$Photo' or CNC ='$CNC'OR Hypermesh ='$Hypermesh'";

	$result = $conn->query($checkboxes);

		 	?>
		 	<form method="POST" action=""> 
		 	<?php
	if ($result->num_rows > 0) {
		echo "<table class=\"striped centered responsive-table \"> <thead> <tr>  <th> CHECK </th> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
		 // output data of each row
		 while($row = $result->fetch_assoc()) {
		 	
		 	$checkboxes_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
		 	$result_user = $conn->query($checkboxes_user);
		 	$newrow = $result_user->fetch_assoc();
		 	echo "
		 				 	<tr> 
		 					 	<td class =\"uppercase\"> <input value='".$row['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
		 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
		 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
		 					 	<td>".$newrow["Skills"]."</td>  
		 					 	<td>".$newrow["academic_year"]."</td> 
		 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
		 				 	</tr>";   
		 }
		 echo "</table>";
	?>

			<input type="submit" class="btn btn-waves" value="set">
			</form>
		<?php
	} 

	if(isset($_POST['chk']) == true)
	{
		$subject = trim($_POST['subject']);
		$message = trim($_POST['message']);
		$from = 'saurabhk201@gmail.com';
		$reply = 'reply@akmedia.com';
		
		foreach($_POST['chk'] as $key => $value)
		{
		echo $value;
			// Set content-type for sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: <".$from.">\r\n";
			$headers .= "Reply-To: ".$reply."";
	 		if(mail($value,$subject,$message,$headers))
			{	
				echo '<div class="container-fluid" style="width:50%;">
					  <div class="alert alert-success fade in">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
	 		    echo '<strong>Success! </strong>'; 
				echo ' Mail has been Successfully sent to '.$value.'</br>';
				echo '</div></div>';
			} 
			else{
				echo "no email send up!";
			}
		}
	}



	if( isset($_POST['notify'])){
		$sql = mysqli_query($conn,"UPDATE users SET sat_notify = '1' WHERE academic_year='Second Year'");
	}


	$conn->close();


?>

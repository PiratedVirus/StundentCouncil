<?php
	error_reporting(0);
	ob_start();
	session_start();

	include '../Core/dbconnect.php';
	include '../Core/checkbox.php';

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


	if (isset($_POST['Sponsorship'])) {
		$Sponsorship = 'Sponsorship';
	} else {
		$Sponsorship ='';
	}


	if (isset($_POST['Publicity'])) {
		$Publicity = 'Publicity';
	} else {
		$Publicity ='';
	}


	if (isset($_POST['Design'])) {
		$Design = 'Design';
	} else {
		$Design ='';
	}


	if (isset($_POST['Decoration'])) {
		$Decoration = 'Decoration';
	} else {
		$Decoration ='';
	}


	if (isset($_POST['Infrastructure'])) {
		$Infrastructure = 'Infrastructure';
	} else {
		$Infrastructure ='';
	}


	if (isset($_POST['Documentation'])) {
		$Documentation = 'Documentation';
	} else {
		$Documentation ='';
	}


	if (isset($_POST['Astronomy'])) {
		$Astronomy = 'Astronomy';
	} else {
		$Astronomy ='';
	}


	if (isset($_POST['Designclub'])) {
		$Designclub = 'Design';
	} else {
		$Designclub ='';
	}


	if (isset($_POST['ArtnCraft'])) {
		$ArtnCraft = 'Art and Craft';
	} else {
		$ArtnCraft ='';
	}


	if (isset($_POST['Drama'])) {
		$Drama = 'Drama';
	} else {
		$Drama ='';
	}


	if (isset($_POST['MusicnDance'])) {
		$MusicnDance = 'Music and Dance';
	} else {
		$MusicnDance ='';
	}


	if (isset($_POST['Vikasa'])) {
		$Vikasa = 'Vikasa';
	} else {
		$Vikasa ='';
	}


	if (isset($_POST['Writers'])) {
		$Writers = 'Writers';
	} else {
		$Writers ='';
	}


	if (isset($_POST['Samvedena'])) {
		$Samvedena = 'Samvedena';
	} else {
		$Samvedena ='';
	}


	if (isset($_POST['SciencenStreet'])) {
		$SciencenStreet = 'Science on Street';
	} else {
		$SciencenStreet ='';
	}


	if (isset($_POST['Indoor'])) {
		$Indoor = 'Indoor games';
	} else {
		$Indoor ='';
	}


	if (isset($_POST['Outdoor'])) {
		$Outdoor = 'Outdoor games';
	} else {
		$Outdoor ='';
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


function printHead(){
	echo "<table class=\"striped centered responsive-table \" style='margin-top:50px;' > <thead>   <tr> <th>CHECK</th>  <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>    <th>View </th>  </tr></thead>";
	echo " <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/> </th> ";
}

function printInfo($userEmail,$userId,$userName,$skills,$academic_year,$mobile,$Gender){
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 	<tr> 
		 	<td class =\"uppercase\"> <input value='$mobile' type= \"checkbox\" name= \"chk[]\"> </td> 
		 	<td class =\"uppercase\"> $userId </td> 
		 	<td class =\"uppercase bold-text\"> $userName </td>  
		 	<td>$skills</td>  
		 	<td>$academic_year</td> 
		 	<td><span class =\"bold-text\"> <a href=tel:$mobile> $mobile </a> </span> <br> $userEmail </td>  <td>$Gender</td> 
		 	<td><a href=$url target=\"_blank\">View</a></td>  
	 	</tr>";   

};


// Branch and year seprate sorting

	if (isset($_POST['single-cse'])) {
			$query_cse = "SELECT * FROM users WHERE Skills = 'Computer Science And Engineering'";

			    $cse_result = $conn->query($query_cse);

			    ?>
			    <form method="POST" action=""> 
			    <?php
			    if ($cse_result->num_rows > 0) {
			        	printHead();
			         // output data of each row
			         while($row = $cse_result->fetch_assoc()) {
			         		printInfo($row['userEmail'],$row['userId'],$row["userName"],$row["Skills"],$row["academic_year"],$row["mobile"],$row["Gender"]);

			         	 }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>


<div class="container">
	<div class="row">
		<div class="col s12">
			<label for="subject">Email Subject</label>
			<input type="text" name="subject">
		</div>
		<div class="col s12">
			<label for="message">Email Content</label>
			<textarea name="message"></textarea>
		</div>
		<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>	</div>
			    		</form>
</div>					


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

			    	printHead();
			         // output data of each row
			         while($row = $mech_result->fetch_assoc()) {
			         	 	printInfo($row['userEmail'],$row['userId'],$row["userName"],$row["Skills"],$row["academic_year"],$row["mobile"],$row["Gender"]);


       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>


<div class="container">
	<div class="row">
		<div class="col s12">
			<label for="subject">Email Subject</label>
			<input type="text" name="subject">
		</div>
		<div class="col s12">
			<label for="message">Email Content</label>
			<textarea name="message"></textarea>
		</div>
		<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>	</div>
			    		</form>
</div>					


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

			    	printHead();
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	printInfo($row['userEmail'],$row['userId'],$row["userName"],$row["Skills"],$row["academic_year"],$row["mobile"],$row["Gender"]);

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>


<div class="container">
	<div class="row">
		<div class="col s12">
			<label for="subject">Email Subject</label>
			<input type="text" name="subject">
		</div>
		<div class="col s12">
			<label for="message">Email Content</label>
			<textarea name="message"></textarea>
		</div>
		<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>	</div>
			    		</form>
</div>					


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

			    	printHead();
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	printInfo($row['userEmail'],$row['userId'],$row["userName"],$row["Skills"],$row["academic_year"],$row["mobile"],$row["Gender"]);

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>


<div class="container">
	<div class="row">
		<div class="col s12">
			<label for="subject">Email Subject</label>
			<input type="text" name="subject">
		</div>
		<div class="col s12">
			<label for="message">Email Content</label>
			<textarea name="message"></textarea>
		</div>
		<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>	</div>
			    		</form>
</div>					


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

			    	printHead();
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	printInfo($row['userEmail'],$row['userId'],$row["userName"],$row["Skills"],$row["academic_year"],$row["mobile"],$row["Gender"]);

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>


<div class="container">
	<div class="row">
		<div class="col s12">
			<label for="subject">Email Subject</label>
			<input type="text" name="subject">
		</div>
		<div class="col s12">
			<label for="message">Email Content</label>
			<textarea name="message"></textarea>
		</div>
		<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>	</div>
			    		</form>
</div>					


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

			    	printHead();
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	printInfo($row['userEmail'],$row['userId'],$row["userName"],$row["Skills"],$row["academic_year"],$row["mobile"],$row["Gender"]);

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>


<div class="container">
	<div class="row">
		<div class="col s12">
			<label for="subject">Email Subject</label>
			<input type="text" name="subject">
		</div>
		<div class="col s12">
			<label for="message">Email Content</label>
			<textarea name="message"></textarea>
		</div>
		<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>	</div>
			    		</form>
</div>					


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

			    	printHead();
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	printInfo($row['userEmail'],$row['userId'],$row["userName"],$row["Skills"],$row["academic_year"],$row["mobile"],$row["Gender"]);

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>


<div class="container">
	<div class="row">
		<div class="col s12">
			<label for="subject">Email Subject</label>
			<input type="text" name="subject">
		</div>
		<div class="col s12">
			<label for="message">Email Content</label>
			<textarea name="message"></textarea>
		</div>
		<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>	</div>
			    		</form>
</div>					


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

			    	printHead();
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	printInfo($row['userEmail'],$row['userId'],$row["userName"],$row["Skills"],$row["academic_year"],$row["mobile"],$row["Gender"]);

       			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>


<div class="container">
	<div class="row">
		<div class="col s12">
			<label for="subject">Email Subject</label>
			<input type="text" name="subject">
		</div>
		<div class="col s12">
			<label for="message">Email Content</label>
			<textarea name="message"></textarea>
		</div>
		<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>	</div>
			    		</form>
</div>					


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

			    	printHead();
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	printInfo($row['userEmail'],$row['userId'],$row["userName"],$row["Skills"],$row["academic_year"],$row["mobile"],$row["Gender"]);
							}
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>


<div class="container">
	<div class="row">
		<div class="col s12">
			<label for="subject">Email Subject</label>
			<input type="text" name="subject">
		</div>
		<div class="col s12">
			<label for="message">Email Content</label>
			<textarea name="message"></textarea>
		</div>
		<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>	</div>
			    		</form>
</div>					


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

			    	printHead();
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	 	printInfo($row['userEmail'],$row['userId'],$row["userName"],$row["Skills"],$row["academic_year"],$row["mobile"],$row["Gender"]);
			         	 }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    ?>


<div class="container">
	<div class="row">
		<div class="col s12">
			<label for="subject">Email Subject</label>
			<input type="text" name="subject">
		</div>
		<div class="col s12">
			<label for="message">Email Content</label>
			<textarea name="message"></textarea>
		</div>
		<div style="margin-top: 15px;" class="col s12 center">
			
	    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
		</div>
	</div>
			    		</form>
</div>					


			    	<?php

		}

	

		$sql = "SELECT * FROM users WHERE (academic_year = '$fe' or academic_year = '$se' or academic_year = '$te' or academic_year = '$be') AND ( Skills = '$cse' or Skills = '$mech' or Skills = '$civil' or Skills = '$entc' or Skills = '$it' or Skills = '$elect' ) ";
		$result = $conn->query($sql);

		
		?>
		<form method="POST" action=""> 
		<?php
		if ($result->num_rows > 0) {
			printHead();

			 
			 // output data of each row
			 while($row = $result->fetch_assoc()) {
			 	printInfo($row['userEmail'],$row['userId'],$row["userName"],$row["Skills"],$row["academic_year"],$row["mobile"],$row["Gender"]);


			 	 }	 

			 echo "</table>";
		
	?>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>
</form>

<?php
		 }
	 
// Branch and year seprate sorting ends here
		 if (isset($_POST['Sponsorship'])) {

$Sponsorship = "SELECT * FROM skills WHERE pref1 = '$Sponsorship' OR pref2 = '$Sponsorship' OR pref3 = '$Sponsorship'";

$result = $conn->query($Sponsorship);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Sponsorship_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Sponsorship_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>

<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div>
<?php
		 }
	 }
	 if (isset($_POST['Publicity'])) {

// Branch and year seprate sorting ends here

$Publicity = "SELECT * FROM skills WHERE (pref1 = '$Publicity') OR (pref2 = '$Publicity') OR (pref3 = '$Publicity')";

$result = $conn->query($Publicity);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Publicity_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Publicity_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>

<?php
		 }
		}
	 
 		 if (isset($_POST['Design'])) {

// Branch and year seprate sorting ends here

$Design = "SELECT * FROM skills WHERE (pref1 = '$Design') OR (pref2 = '$Design') OR (pref3 = '$Design')";

$result = $conn->query($Design);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Design_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Design_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div>
<?php
		 }
		}
	 
	 if (isset($_POST['Decoration'])) {

// Branch and year seprate sorting ends here

$Decoration = "SELECT * FROM skills WHERE (pref1 = '$Decoration') OR (pref2 = '$Decoration') OR (pref3 = '$Decoration')";

$result = $conn->query($Decoration);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Decoration_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Decoration_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div>
<?php
		 }
		}
	 
 		 if (isset($_POST['Infrastructure'])) {

// Branch and year seprate sorting ends here

$Infrastructure = "SELECT * FROM skills WHERE (pref1 = '$Infrastructure') OR (pref2 = '$Infrastructure') OR (pref3 = '$Infrastructure')";

$result = $conn->query($Infrastructure);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Infrastructure_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Infrastructure_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div>
<?php
		 }
		}

		 if (isset($_POST['FacilityProvider'])) {

	 
// Branch and year seprate sorting ends here

$FacilityProvider = "SELECT * FROM skills WHERE (pref1 = '$FacilityProvider') OR (pref2 = '$FacilityProvider') OR (pref3 = '$FacilityProvider')";

$result = $conn->query($FacilityProvider);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$FacilityProvider_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($FacilityProvider_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div>
<?php
		 }
		}
		 if (isset($_POST['Documentation'])) {

	 
// Branch and year seprate sorting ends here

$Documentation = "SELECT * FROM skills WHERE (pref1 = '$Documentation') OR (pref2 = '$Documentation') OR (pref3 = '$Documentation')";

$result = $conn->query($Documentation);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Documentation_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Documentation_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a Assets/>View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";

?>




<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div>
<?php
		 }
		}
		 if (isset($_POST['CulturalEvent'])) {

	 
// Branch and year seprate sorting ends here

$CulturalEvent = "SELECT * FROM skills WHERE (pref1 = '$CulturalEvent') OR (pref2 = '$CulturalEvent') OR (pref3 = '$CulturalEvent')";

$result = $conn->query($CulturalEvent);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$CulturalEvent_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($CulturalEvent_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>

<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div>
<?php
		 }
		}

		 if (isset($_POST['Designclub'])) {

	 
// Branch and year seprate sorting ends here

$Designclub = "SELECT * FROM skills WHERE (club1 = '$Designclub') OR (club2 = '$Designclub')";

$result = $conn->query($Designclub);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Designclub_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Designclub_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div><?php
		 }
		}

		 if (isset($_POST['Astronomy'])) {

	 
// Branch and year seprate sorting ends here

$Astronomy = "SELECT * FROM skills WHERE (club1 = '$Astronomy') OR (club2 = '$Astronomy')";

$result = $conn->query($Astronomy);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Astronomy_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Astronomy_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div><?php
		 }
		}

		 if (isset($_POST['ArtnCraft'])) {

	 
// Branch and year seprate sorting ends here

$ArtnCraft = "SELECT * FROM skills WHERE (club1 = '$ArtnCraft') OR (club2 = '$ArtnCraft')";

$result = $conn->query($ArtnCraft);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$ArtnCraft_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($ArtnCraft_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div><?php
		 }
		}

		 if (isset($_POST['Drama'])) {

	 
// Branch and year seprate sorting ends here

$Drama = "SELECT * FROM skills WHERE (club1 = '$Drama') OR (club2 = '$Drama')";

$result = $conn->query($Drama);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Drama_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Drama_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div><?php
		 }
		}

		 if (isset($_POST['MusicnDance'])) {

	 
// Branch and year seprate sorting ends here

$MusicnDance = "SELECT * FROM skills WHERE (club1 = '$MusicnDance') OR (club2 = '$MusicnDance')";

$result = $conn->query($MusicnDance);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$MusicnDance_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($MusicnDance_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div><?php
		 }
		}

		 if (isset($_POST['Vikasa'])) {

	 
// Branch and year seprate sorting ends here

$Vikasa = "SELECT * FROM skills WHERE (club1 = '$Vikasa') OR (club2 = '$Vikasa')";

$result = $conn->query($Vikasa);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Vikasa_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Vikasa_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div><?php
		 }
		}

		 if (isset($_POST['Writers'])) {

	 
// Branch and year seprate sorting ends here

$Writers = "SELECT * FROM skills WHERE (club1 = '$Writers') OR (club2 = '$Writers')";

$result = $conn->query($Writers);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Writers_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Writers_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div><?php
		 }
		}

		 if (isset($_POST['Samvedena'])) {

	 
// Branch and year seprate sorting ends here

$Samvedena = "SELECT * FROM skills WHERE (club1 = '$Samvedena') OR (club2 = '$Samvedena')";

$result = $conn->query($Samvedena);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Samvedena_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Samvedena_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div><?php
		 }
		}

		 if (isset($_POST['Designclub'])) {

	 
// Branch and year seprate sorting ends here

$SciencenStreet = "SELECT * FROM skills WHERE (club1 = '$SciencenStreet') OR (club2 = '$SciencenStreet')";

$result = $conn->query($SciencenStreet);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$SciencenStreet_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($SciencenStreet_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div><?php
		 }
		}

		 if (isset($_POST['Indoor'])) {

	 
// Branch and year seprate sorting ends here

$Indoor = "SELECT * FROM skills WHERE (club1 = '$Indoor') OR (club2 = '$Indoor')";

$result = $conn->query($Indoor);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Indoor_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Indoor_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div><?php
		 }
		}

		 if (isset($_POST['Outdoor'])) {

	 
// Branch and year seprate sorting ends here

$Outdoor = "SELECT * FROM skills WHERE (club1 = '$Outdoor') OR (club2 = '$Outdoor')";

$result = $conn->query($Outdoor);

	 	?>
	 	<form method="POST" action=""> 
	 	<?php
if ($result->num_rows > 0) {
	printHead();
	 // output data of each row
	 while($row = $result->fetch_assoc()) {
	 	
	 	$Outdoor_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
	 	$result_user = $conn->query($Outdoor_user);
	 	$newrow = $result_user->fetch_assoc();
	 	$userId = $row['userId'];
	 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

	 	echo "
	 				 	<tr> 
	 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
	 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
	 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
	 					 	<td>".$newrow["Skills"]."</td>  
	 					 	<td>".$newrow["academic_year"]."</td> 
	 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
	 					 	<td><a href=$url target=\"_blank\">View</a></td>  

	 				 	</tr>";   
	 }
	 echo "</table>";
?>
<div class="container">
		<div class="row">
			<div class="col s12">
				<label for="subject">Email Subject</label>
				<input type="text" name="subject">
			</div>
			<div class="col s12">
				<label for="message">Email Content</label>
				<textarea name="message"></textarea>
			</div>
				<div style="margin-top: 15px;" class="col s12 center">
					
			    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
				</div>
		</div>
	</div>


</form>



</div>
	<?php
			 }
			}
		 
	// Branch and year seprate sorting ends here

	$checkboxes = "SELECT * FROM skills WHERE app = '$app' OR web = '$web' OR photoshop ='$graphics' OR animation = '$animations' OR networking = '$networking' OR autocad = '$autocad' OR katia = '$katia' OR robocon ='$robocon'  OR acting = '$act' OR dance = '$dance' OR ankering = '$anker' OR singing = '$sing' OR drama ='$drama' OR writing = '$writing' OR poetry = '$poetry' OR drawing = '$drawing' OR decoration ='$decoration' OR painting ='$paint' OR cricket ='$cricket' OR badminton='$badminton' OR football ='$football' OR chess ='$chess' or kabbadi ='$kabbadi' OR vollyball ='$vollyball' or PHP ='$PHP' or Video ='$Video' or Photo ='$Photo' or CNC ='$CNC'OR Hypermesh ='$Hypermesh'";

	$result = $conn->query($checkboxes);

		 	?>
		 	<form method="POST" action=""> 
		 	<?php
	if ($result->num_rows > 0) {
		printHead();
		 // output data of each row
		 while($row = $result->fetch_assoc()) {
		 	
		 	$checkboxes_user = "SELECT * FROM users WHERE userId ='".$row['userId']."' ";
		 	$result_user = $conn->query($checkboxes_user);
		 	$newrow = $result_user->fetch_assoc();
		 	$userId = $row['userId'];
		 	$url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

		 	echo "
		 				 	<tr> 
		 					 	<td class =\"uppercase\"> <input value='".$newrow['userEmail']."' type= \"checkbox\" name= \"chk[]\">  
		 					 	</td> <td class =\"uppercase\"> ".$row["userId"]." </td> 
		 					 	<td class =\"uppercase bold-text\"> ".$newrow["userName"]." </td>  
		 					 	<td>".$newrow["Skills"]."</td>  
		 					 	<td>".$newrow["academic_year"]."</td> 
		 					 	<td><span class =\"bold-text\"> <a href=\"tel:$newrow[mobile]\">".$newrow["mobile"]."</a></span> <br> ".$newrow["userEmail"]." </td>  <td>".$newrow["Gender"]."</td>   
		 					 	<td><a href=$url target=\"_blank\">View</a></td>  

		 				 	</tr>";   
		 }
		 echo "</table>";
	?>


 


	<div class="container">
			<div class="row">
				<div class="col s12">
					<label for="subject">Email Subject</label>
					<input type="text" name="subject">
				</div>
				<div class="col s12">
					<label for="message">Email Content</label>
					<textarea name="message"></textarea>
				</div>
					<div style="margin-top: 15px;" class="col s12 center">
						
				    		<input type="submit" class="waves-effect waves-light btn-large center" value="SEND EMAIL">
					</div>
			</div>
		</div>


	</form>



	</div>
		<?php
	} 




	if(isset($_POST['chk']) == true)
	{
		$subject = trim($_POST['subject']);
		$message = trim($_POST['message']);
		$from = 'admin@scouncilgeca.com';
		$reply = 'admin@scouncilgeca.com';

		// Authorisation details.
		$username = "saurabhk201@gmail.com";
		$hash = "fcdbcd30935d9047c75eeebc594e70b16d5b7006";

		foreach($_POST['chk'] as $key => $value)
		{
	
			$notifyall =  mysqli_query($conn,"UPDATE users SET notification = notification + 1 WHERE userEmail = '$value'");

			$notified = mysqli_query($conn,"SELECT notification,userId FROM users WHERE userEmail = '$value'");
			$notifiedarr = mysqli_fetch_array($notified);
			$notcount = $notifiedarr['notification'];
			$notfenroll = $notifiedarr['userId'];



			// Data for text message. This is the text message data.
			$sender = "Student Council"; // This is who the message appears to be from.
			$numbers = "91".$value; // A single number or a comma-seperated list of numbers
			echo $numbers;
			// $message = "This is a test message from the PHP API script.";
			// 612 chars or less
			// A single number or a comma-seperated list of numbers
			$message = urlencode($message);
			$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
			$ch = curl_init('http://api.textlocal.in/send/?');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch); // This is the result from the API
			curl_close($ch);
			echo $result;
	

			if($notcount > 4){

				$source_create = fopen("Notifications/Current/notuser_$notfenroll.php", r);
				$destination_create = fopen("Notifications/Archives/notuserarchive_$notfenroll.php", r);
				$source = "Notifications/Current/notuser_$notfenroll.php";
				$destination = "Notifications/Archives/notuserarchive_$notfenroll.php";


				$data = file_get_contents($source);
				$handle = fopen($destination,"c");
				fseek($handle, 5);
				fwrite($handle,$data);
				$sourcewrite = fopen("Notifications/Current/notuser_$notfenroll.php","w");
				fwrite($sourcewrite,$message);
				fclose($handle);
				fclose($sourcewrite);
				fclose($source_create);
				fclose($destination_create);


							
			} else {
				$file = fopen("Notifications/Current/notuser_$notfenroll.php","a") or die("Unable to append in notuser.php"); 
				fwrite($file,$message);
				fclose($file);
			}
			// End of IF-ELSE
			if($notcount > 4){
				$notcount = 1;

			} 
			// echo "New value is ";
			// $newcount = $notcount + 1;
			$notifiedzero = mysqli_query($conn,"UPDATE users SET notification = '$notcount' WHERE userEmail = '$value'");


		}
		// End of FOREACH loop

		
	}



	if( isset($_POST['notify'])){
		$sql = mysqli_query($conn,"UPDATE users SET sat_notify = '1' WHERE academic_year='Second Year'");
	}


	$conn->close();


?>

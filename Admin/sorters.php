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
			         echo "<table class=\"striped centered responsive-table \"> <thead> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
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
			         echo "<table class=\"striped centered responsive-table \"> <thead> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
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
			         echo "<table class=\"striped centered responsive-table \"> <thead> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
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
			         echo "<table class=\"striped centered responsive-table \"> <thead> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
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
			         echo "<table class=\"striped centered responsive-table \"> <thead> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
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
			         echo "<table class=\"striped centered responsive-table \"> <thead> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
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
			         echo "<table class=\"striped centered responsive-table \"> <thead> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
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
			         echo "<table class=\"striped centered responsive-table \"> <thead> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
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
			         echo "<table class=\"striped centered responsive-table \"> <thead> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
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
			         echo "<table class=\"striped centered responsive-table \"> <thead> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
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
			echo "<table class=\"striped centered responsive-table \"> <thead> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th>  <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";

			 
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

	$checkboxes = "SELECT * FROM skills WHERE app = '$app' OR web = '$web' OR photoshop ='$graphics' OR animation = '$animations' OR networking = '$networking' OR autocad = '$autocad' OR katia = '$katia' OR robocon ='$robocon'  OR acting = '$act' OR dance = '$dance' OR ankering = '$anker' OR singing = '$sing' OR drama ='$drama' OR writing = '$writing' OR poetry = '$poetry' OR drawing = '$drawing' OR decoration ='$decoration' OR painting ='$paint' OR cricket ='$cricket' OR badminton='$badminton' OR football ='$football' OR chess ='$chess' or kabbadi ='$kabbadi' OR vollyball ='$vollyball' or PHP ='$PHP' or Video ='$Video' or Photo ='$Photo' or CNC ='$CNC'OR Hypermesh ='$Hypermesh'";

	$result = $conn->query($checkboxes);

		 	?>
		 	<form method="POST" action=""> 
		 	<?php
	if ($result->num_rows > 0) {
		echo "<table class=\"striped centered responsive-table \"> <thead> <tr> <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/></th> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
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
		$from = 'saurabhk201@gmail.com';
		$reply = 'reply@akmedia.com';

		foreach($_POST['chk'] as $key => $value)
		{
		echo $value;
		echo $subject;
		echo $message;
			// Set content-type for sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: <".$from.">\r\n";
			$headers .= "Reply-To: ".$reply."";



			$notifyall =  mysqli_query($conn,"UPDATE users SET notification = notification + 1 WHERE userEmail = '$value'");

			$notified = mysqli_query($conn,"SELECT notification,userId FROM users WHERE userEmail = '$value'");
			$notifiedarr = mysqli_fetch_array($notified);
			$notcount = $notifiedarr['notification'];
			$notfenroll = $notifiedarr['userId'];

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
				echo "No email send!";
			}
	
			echo "notcount is :";
			echo $notcount;

			if($notcount > 4){
				echo "Accddently I am in 4!";

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
				echo 'May be my value is <4';
				echo $notcount;

			} 
			// echo "New value is ";
			// $newcount = $notcount + 1;
			echo $notcount;
			$notifiedzero = mysqli_query($conn,"UPDATE users SET notification = '$notcount' WHERE userEmail = '$value'");


		}
		// End of FOREACH loop

		
	}



	if( isset($_POST['notify'])){
		$sql = mysqli_query($conn,"UPDATE users SET sat_notify = '1' WHERE academic_year='Second Year'");
	}


	$conn->close();


?>

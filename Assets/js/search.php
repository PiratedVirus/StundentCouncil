<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title>Welcome  Admin </title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="../Assets/css/base.css">

</head>
<body>

  <?php
  include 'dbconnect.php';
  $host="localhost";
  $user="root";
  $pass="";
  $dbname="students";
  
  $dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
  
  if($_POST) 
  {

      $search = strip_tags($_POST['search']);


  	  $sql = "SELECT * FROM users  WHERE (userName LIKE '%$search%') OR (userId LIKE '%$search%') OR (Gender LIKE '%$search%') OR (userEmail LIKE '%$search%') OR (Skills LIKE '%$search%') OR (mobile LIKE '%$search%') OR (academic_year LIKE '%$search%') OR (future LIKE '%$search%') OR (state LIKE '%$search%')";
  	  $result = mysqli_query($conn, $sql);
  	  $count = mysqli_num_rows($result);
  	  $row = mysqli_fetch_assoc($result);

	    if ($count > 0) {
	    	echo "<table class=\"striped centered responsive-table \"> <thead> <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
	         while($row = $result->fetch_assoc()) {
	         	echo "<tr> <td class =\"uppercase\"> ".$row["userId"]." </td> <td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  <td>".$row["Skills"]."</td>  <td>".$row["academic_year"]."</td> <td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   </tr>";			         }
	         echo "</table>";
	    } 
  }

?>

<script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
  <script src="../Assets/js/materialize.js"></script>
  <script src="../Assets/js/init.js"></script>

  </body>

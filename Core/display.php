<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../Assets/css/base.css">
<title>Details</title>
</head>
    <body>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "students";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class=\"striped centered responsive-table \"> <thead> <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>    <th>Web</th>    <th>App</th>  <th>Photoshop</th>  </tr></thead>";
             // output data of each row
             while($row = $result->fetch_assoc()) {
                echo "<tr> <td class =\"uppercase\"> ".$row["userId"]." </td> <td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  <td>".$row["Skills"]."</td>  <td>".$row["academic_year"]."</td> <td><span class =\"bold-text\"> ".$row["mobile"]."</span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>     <td>".$row["web"]."</td>     <td>".$row["app"]."</td>      <td>".$row["photoshop"]."</td>   </tr>";                  }
             }
             echo "</table>";
        

        $conn->close();
    ?>
    <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
      <script src="../Assets/js/materialize.js"></script>
      <script src="../Assets/js/init.js"></script>


    </body>
</html>

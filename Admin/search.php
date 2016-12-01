  <?php  
   $connect = mysqli_connect("localhost", "root", "", "students");  
   $output = '';  

   $sql = "SELECT * FROM users  WHERE (userName LIKE '%".$_POST["search_text"]."%') OR (userId LIKE '%".$_POST["search_text"]."%') OR (Gender LIKE '%".$_POST["search_text"]."%') OR (userEmail LIKE '%".$_POST["search_text"]."%') OR (Skills LIKE '%".$_POST["search_text"]."%') OR (mobile LIKE '%".$_POST["search_text"]."%') OR (academic_year LIKE '%".$_POST["search_text"]."%') OR (future LIKE '%".$_POST["search_text"]."%') OR (state LIKE '%".$_POST["search_text"]."%')";  
   

   

   $result = mysqli_query($connect, $sql);  
   if(mysqli_num_rows($result) > 0)  
   {  
        echo "<table class=\"striped centered responsive-table \"> <thead> <tr> <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>  </tr></thead>";
        			         // output data of each row
        			         while($row = $result->fetch_assoc()) {
        			         	echo "<tr> <td class =\"uppercase\"> ".$row["userId"]." </td> <td class =\"uppercase bold-text\"> ".$row["userName"]." </td>  <td>".$row["Skills"]."</td>  <td>".$row["academic_year"]."</td> <td><span class =\"bold-text\"> <a href=\"tel:$row[mobile]\">".$row["mobile"]."</a></span> <br> ".$row["userEmail"]." </td>  <td>".$row["Gender"]."</td>   </tr>";			         }
        			         echo "</table>";
   }  
   else  
   {  
        echo 'Data Not Found';  
   }  
   ?>  
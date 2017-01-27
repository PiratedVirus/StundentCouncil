<?php 
session_start();
include '../Core/dbconnect.php';
$new = $_SESSION['sql_adminclass'];
if ( isset($_SESSION['user']) =="" ) {
    header("Location: ../Login");
    exit;
}


 ?>
<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title>Welcome  Admin </title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="../Assets/css/nockeckbox.css">
  <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">


  <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
  <script src="../Assets/js/ajaxsearch.js"></script>
  <script src="../Assets/js/analytics.js"></script>


    <script type="text/javascript" language="javascript">
      function checkedbox(element) { 
        console.log('checkboxes');
        var checkboxes = document.getElementsByName('chk[]');
        if (element.checked) {
           for (var i = 0; i < checkboxes.length; i++) {
            console.log(i);
             if (checkboxes[i].type == 'checkbox') {
               checkboxes[i].checked = true;
             }
           }
        } else {
           for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
               checkboxes[i].checked = false;
             }
           }
        }
      }
    </script>


</head>
<body>
<div class="navbar-fixed">
  <nav id="admin-menu">
      <div class="nav-wrapper">

        <ul id="slide-out" class="side-nav">
            <li><div class="userView">
              <img class="background" src="../Assets/img/b (5).jpg">
              <a href="#"><img class="circle" src="../Assets/img/userios.png"></a>
              <a href="#"><span style="padding-bottom: 15px;" class="white-text name slide-username"> <b>Admin</b></span></a>
            </div></li>
          
      
            <li><a href="#resultlink">Results</a></li>
            <li><div class="divider"></div></li>
            <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
            <li><div class="divider"></div></li>
            <li><a href="../default.html"><b>STUDENT COUNCIL</b></a></li>
            <li><a href="../default.html#team-link">Team</a></li>
            <li><a href="../default.html#contact-link">Contact Us</a></li>




        </ul>

        <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
        <i class="material-icons">menu</i></a>

        <a href="../default.html" class="brand-logo center">Student Council</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">

          <li><a href="#resultlink">Results</a></li>
        </ul>


      </div>
  </nav>
</div>


  <div class="container admin-land">
    <div class="row">
      <div class="">
        <h2 class="admin-head center">Welcome Admin !</h2>




 <!--        <p class="info-admin center col">
          Use following filters for specific results.There is a COMBO SORT which sorts Year and Branch together.Branches and Year filters are sperate for sorting indivisiuls.'Skills' filter is very useful, Lorem ipsum dolor sit.
        </p> -->
      </div>
    </div>

  </div>

    <div class="row">
      <div class="col s12" style="padding-top: 15px;">
        <div  id ="result" ></div>
      </div>

    </div>


    <?php

    function printHead(){
      // echo "string from print";
      echo "<table class=\"striped centered responsive-table \" style='margin-top:50px;' > <thead>   <tr> <th>CHECK</th>  <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>    <th>View </th>  </tr></thead>";
      echo " <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/> </th> ";
    }

    function printInfo($userEmail,$userId,$userName,$skills,$academic_year,$mobile,$Gender){
        $url = 'https://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

        echo "
        <tr> 
          <td class =\"uppercase\"> <input value='$userEmail' type= \"checkbox\" name= \"chk[]\"> </td> 
          <td class =\"uppercase\"> $userId </td> 
          <td class =\"uppercase bold-text\"> $userName </td>  
          <td>$skills</td>  
          <td>$academic_year</td> 
          <td><span class =\"bold-text\"> <a href=tel:$mobile> $mobile </a> </span> <br> $userEmail </td>  <td>$Gender</td> 
          <td><a href=$url target=\"_blank\">View</a></td>  
        </tr>";   

    };


    // Branch and year seprate sorting

          $query_cse = "SELECT * FROM users WHERE Skills = '$new' ";

              $cse_result = $conn->query($query_cse);
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


    
       <script src="../Assets/js/materialize.js"></script>
       <script src="../Assets/js/init.js"></script>
      
    
  </body>
  </html>
  <?php ob_end_flush(); ?>
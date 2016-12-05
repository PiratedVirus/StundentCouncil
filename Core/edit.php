<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
  // if session is not set this will redirect to login page
  if( !isset($_SESSION['user']) ) {
    header("Location: ../index.php");
    exit;
  }
  
  
?>
<!DOCTYPE html>
<html>
<head>
  
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title style="text-transform: capitalize;">Welcome  <?php echo $_SESSION['stud_name']; ?></title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="../Assets/css/base.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
  </script>
</head>
<body>



    <?php 
    require_once 'profile-form.php';
     ?>


     <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>  
     <script src="../Assets/js/materialize.js"></script>  
     <!-- <script src="../Assets/js/init.js"></script> -->
    
</body>
</html>
<?php ob_end_flush(); ?>
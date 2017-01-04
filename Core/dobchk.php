<?php
  
  if($_POST) 
  {
 		

 	  $dob = strip_tags($_POST['dob']);

    // echo "Dat by u $dob";

    $birthyear = substr($dob,-4);
    // echo "birthyear $birthyear ";

    $sysyear = date("Y");
    // echo "sysyear $sysyear ";

    $age = $sysyear - $birthyear;
    $rest = 100 - $age;



	  if($age > 16 && $age < 25) {
      echo "<span style='color:green;'>Congrats! You survived <b>$age</b> years of your life! Best luck to hit a Century. </span>";
      ?>
        <script>
          
        $('#btn-dis').removeAttr("disabled");
        </script>
      <?php
    } else {
      echo "<span style='color:red;'>Go to kindergarten....<b>$age</b> year old BABY!</span>";
      ?>
      
      <script>
        $('#btn-dis').attr('disabled', 'disabled');
      </script>
      
      <?php
    }
	  
  }
?>

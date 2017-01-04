  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
      tinymce.init({
        selector: 'textarea',
        height: 500,
        theme: 'modern',
        plugins: [
          'advlist autolink code  lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
          'insertdatetime media nonbreaking save table contextmenu directionality',
          'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
        ],
        font_formats: 'Andale Mono=andale mono,times;'+ 'Arial=arial,helvetica,sans-serif;'+ 'Arial Black=arial black,avant garde;'+ 'Book Antiqua=book antiqua,palatino;'+ 'Comic Sans MS=comic sans ms,sans-serif;'+ 'Courier New=courier new,courier;'+ 'Georgia=georgia,palatino;'+ 'Helvetica=helvetica;'+ 'Impact=impact,chicago;'+ 'Symbol=symbol;'+ 'Tahoma=tahoma,arial,helvetica,sans-serif;'+ 'Terminal=terminal,monaco;'+ 'Times New Roman=times new roman,times;'+ 'Trebuchet MS=trebuchet ms,geneva;'+ 'Verdana=verdana,geneva;'+ 'Webdings=webdings;'+ 'Wingdings=wingdings,zapf dingbats',
        fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt 72pt',
        toolbar1: 'code | undo redo | insert | fontselect | fontsizeselect | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | template ',
        toolbar2: 'link image print preview media | forecolor backcolor emoticons | codesample',
        image_advtab: true,

        templates: "template.php",
        
        content_css: [
          '../Assets/css/base.css'
        ]
       });
</script>

<?php  
   $connect = mysqli_connect("localhost", "santdbgd_geca", "Saurabh@123#", "santdbgd_saurabh");  


   $sql = "SELECT * FROM users  WHERE (userName LIKE '%".$_POST["search_text"]."%') OR (userId LIKE '%".$_POST["search_text"]."%') OR (Gender LIKE '%".$_POST["search_text"]."%') OR (userEmail LIKE '%".$_POST["search_text"]."%') OR (Skills LIKE '%".$_POST["search_text"]."%') OR (mobile LIKE '%".$_POST["search_text"]."%') OR (academic_year LIKE '%".$_POST["search_text"]."%') OR (future LIKE '%".$_POST["search_text"]."%') OR (state LIKE '%".$_POST["search_text"]."%')";  
   
   function printHead(){
    echo "<table class=\"striped centered responsive-table \" style='margin-top:50px;' > <thead>   <tr> <th>CHECK</th>  <th>Enrollment No.</th> <th>Name</th> <th>Branch</th>  <th>Year</th>  <th>Contact</th>  <th>Gender</th>    <th>View </th>  </tr></thead>";
    echo " <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/> </th> ";
   }

   function printInfo($userEmail,$userId,$userName,$skills,$academic_year,$mobile,$Gender){
    $url = 'http://www.scouncilgeca.com/Admin/dy.php?id='.$userId;

      echo "
      <tr> 
        <td class =\"uppercase\"> <input value='$userEmail' type= \"checkbox\" name= \"chk[]\"> </td> 
        <td class =\"uppercase\"> $userId </td> 
        <td class =\"uppercase bold-text\"> $userName </td>  
        <td>$skills</td>  
        <td>$academic_year</td> 
        <td><span class =\"bold-text\"> <a href=tel:$mobile> $mobile </a> </span> <br> $userEmail </td>  <td>$Gender</td>   
        <td><a href=$url>View</a></td>  

      </tr>";   

   };
   

   $result = mysqli_query($connect, $sql);  

            ?>

            <form method="POST" action=""> 
            <?php

   if(mysqli_num_rows($result) > 0) {  

                  printHead();

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
              </form>
            </div>         
    <?php

     }  else  {  
          echo 'Data Not Found';  
     }  

  if(isset($_POST['chk']) == true)
  {
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    $from = 'admin@scouncilgeca.com';
    $reply = 'admin@scouncilgeca.com';

    foreach($_POST['chk'] as $key => $value)
    {
    // echo $value;
    // echo $subject;
    // echo $message;
      // Set content-type for sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "From: Student Council<".$from.">\r\n";
      $headers .= "Reply-To: ".$reply."";



      $notifyall =  mysqli_query($conn,"UPDATE users SET notification = notification + 1 WHERE userEmail = '$value'");

      $notified = mysqli_query($conn,"SELECT notification,userId FROM users WHERE userEmail = '$value'");
      $notifiedarr = mysqli_fetch_array($notified);
      $notcount = $notifiedarr['notification'];
      $notfenroll = $notifiedarr['userId'];

      if(mail($value,$subject,$message,$headers))
      { 
              echo '<div class="container-fluid" style="width:50%;color:#4CAF50;">
                  <div class="alert alert-success fade in">';
                echo '<strong>Success! </strong>'; 
                echo ' Mail has been Successfully sent to <b>'.$value.'.</b> Check your \'Updates\' Tab.</br>';
              echo '</div></div>';

      } 
      else{
        echo "No email send!";
      }
  

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

   ?>  
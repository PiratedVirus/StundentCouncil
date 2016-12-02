  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      height: 500,
      theme: 'modern',
      plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
      ],
      toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
      image_advtab: true,
      templates: [
        { title: 'Test template 1', content: 'Test 1' },
        { title: 'Test template 2', content: 'Test 2' }
      ],
      content_css: [
        // '//www.tinymce.com/css/codepen.min.css'
      ]
     });
  </script>
  <?php  
   $connect = mysqli_connect("localhost", "root", "", "students");  
   $output = '';  

   $sql = "SELECT * FROM users  WHERE (userName LIKE '%".$_POST["search_text"]."%') OR (userId LIKE '%".$_POST["search_text"]."%') OR (Gender LIKE '%".$_POST["search_text"]."%') OR (userEmail LIKE '%".$_POST["search_text"]."%') OR (Skills LIKE '%".$_POST["search_text"]."%') OR (mobile LIKE '%".$_POST["search_text"]."%') OR (academic_year LIKE '%".$_POST["search_text"]."%') OR (future LIKE '%".$_POST["search_text"]."%') OR (state LIKE '%".$_POST["search_text"]."%')";  
   

   

   $result = mysqli_query($connect, $sql);  

    ?>
            <form method="POST" action=""> 
            <?php

   if(mysqli_num_rows($result) > 0)  
   {  
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

                         }        			         echo "</table>";
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
                                </div>  </div>
                                      </form>
                         </div>         


                                    <?php


   }  
   else  
   {  
        echo 'Data Not Found';  
   }  
   ?>  
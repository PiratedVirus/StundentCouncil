$(document).ready(function(){    
  $('select').material_select();

   $("#new-enroll").keyup(function(){   
     var name = $(this).val(); 
     
     if(name.length > 10){   
       $(".errorTxt0").html("Checking....Won't Take 2 Billions hours !");

       
       $.ajax({
         
         type : 'POST',
         url  : 'Core/enrollcheck.php',
         data : $(this).serialize(),
         success : function(data)
               {
                    $(".errorTxt0").html(data);
                 }
         });
         return false;
       
     }
     else{
       $(".errorTxt0").html('');
     }
   });

   $("#new-email").keyup(function(){   
     var name = $(this).val(); 
     
     if(name.length > 2){   
       $(".errorTxt7").html("Checking....Won't Take 2 Billions hours !");
       
       $.ajax({
         
         type : 'POST',
         url  : 'Core/emailcheck.php',
         data : $(this).serialize(),
         success : function(data)
               {
                    $(".errorTxt7").html(data);
                 }
         });
         return false;
       
     }
     else{
       $(".errorTxt7").html('');
     }
   });


   $('.with-gap').click(function(){ branchvalidate(); });

   function branchvalidate(){


      if ($("#branch").val() != null) {

          var checkbtn = $("#reg").data("cross");

          
          if(checkbtn == 'disabled'){
              $('#reg').attr('disabled', 'disabled');
            
          } else{
              $('#reg').attr('disabled', false);
          }

      } else {
          $('#reg').attr('disabled', 'disabled');
      }

   }

 
});


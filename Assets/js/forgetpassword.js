$(document).ready(function(){    

   $("#enrollment").keyup(function(){   
     var name = $(this).val(); 
     
     if(name.length > 10){   
       $(".emailadd").html("Checking....Won't Take 2 Billions hours !");

       
       $.ajax({
         
         type : 'POST',
         url  : 'enroll2email.php',
         data : $(this).serialize(),
         success : function(data)
               {
                    $(".emailadd").html(data);
                 }
         });
         return false;
       
     }
     else{
       $(".emailadd").html('');
     }
   });
});
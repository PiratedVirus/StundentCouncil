$(document).ready(function(){    
  $('select').material_select();

   $("#new-enroll").keyup(function(){   
     var name = $(this).val(); 
     
     if(name.length > 10){   
       $(".errorTxt0").html("Checking....Won't Take 2 Billions hours !");

       
       $.ajax({
         
         type : 'POST',
         url  : 'core/enrollcheck.php',
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
         url  : 'core/emailcheck.php',
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



 
});
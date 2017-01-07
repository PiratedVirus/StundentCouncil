$(document).ready(function(){    

   $("#prevpass").keyup(function(){   
     var name = $(this).val(); 
     console.log(name);
     
     if(name.length > 5){   
       $(".passmsg").html("Checking....Won't Take 2 Billions hours !");

       
       $.ajax({
         
         type : 'POST',
         url  : '../Core/passverification.php',
         data : $(this).serialize(),
         success : function(data)
               {
                    $(".passmsg").html(data);
                 }
         });
         return false;
       
     }
     else{
       $(".passmsg").html('');
     }
   });
 
});


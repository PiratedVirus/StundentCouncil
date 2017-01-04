$(document).ready(function(){    

   $("#Remarks").keyup(function(){   
     var name = $(this).val(); 
     console.log(name);
     
     if(name.length > 3){   
       $(".save").html("Saving....");

       
       $.ajax({
         
         type : 'POST',
         url  : '../Core/autosavephp.php',
         data : $(this).serialize(),
         success : function(data)
               {
                    $(".save").html(data);
                 }
         });
         return false;
       
     }
     else{
       $(".save").html('');
     }
   });
 
});


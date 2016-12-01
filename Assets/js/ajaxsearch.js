$(document).ready(function(){  
    $('#search_text').keyup(function(){  
     var name = $(this).val(); 
     
     if(name.length > 1){   
       $("#result").html("Checking....Won't Take 2 Billions hours !");
              console.log('cht');
              $.ajax({  
                   url  : '../Admin/search.php',
                   method:"post",  
                   data : $(this).serialize(),
                   dataType:"text",  
                   success:function(data)  
                   {  
                        $('#result').html(data);  
                   }  
              });  
         }  
         else  
         {  
              $('#result').html('');                 
         }  
    });  
});  

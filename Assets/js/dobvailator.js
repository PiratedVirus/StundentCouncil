$(document).ready(function(){    


   $(".dobchkbtn").click(function(){ 

     var name = $('#birthdate').val(); 

     
     if(name.length > 3){   
       $(".errorTxt20").html("Checking....Won't Take 2 Billions hours !");

       
       $.ajax({
         
         type : 'POST',
         url  : '../Core/dobchk.php',
         data : $('#birthdate').serialize(),
         success : function(data)
               {
                    $(".errorTxt20").html(data);
                 }
         });
         return false;
       
     }
     else{
       $(".errorTxt20").html('');
     }
   });

 });


$(document).ready(function(){    


   $(".dobchkbtn").click(function(){ 

     var name = $('#birthdate').val(); 

     
     if(name.length > 3){   
       $(".errorTxt20").html("Checking....Won't Take 2 Billions hours !");
       $(".errorTxt20").fadeIn('slow');

       
       $.ajax({
         
         type : 'POST',
         url  : '../Core/dobchk.php',
         data : $('#birthdate').serialize(),
         success : function(data)
               {
                    $(".errorTxt20").html(data);
                    $(".errorTxt20").fadeIn('slow');

                 }
         });
         return false;
       
     }
     else{
       $(".errorTxt20").html('');
       $(".errorTxt20").fadeIn('slow');

     }
   });

 });


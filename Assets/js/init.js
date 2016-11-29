(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 50 // Creates a dropdown of 15 years to control year
    });


    $('input.state').autocomplete({
      data: {
           "Andhra Pradesh": null,
           "Arunachal Pradesh": null,
           "Assam": null,
           "Bihar": null,
           "Chhattisgarh": null,
           "Chandigarh": null,
           "Dadra and Nagar Haveli": null,
           "Daman and Diu": null,
           "Delhi": null,
           "Goa": null,
           "Gujarat": null,
           "Haryana": null,
           "Himachal Pradesh": null,
           "Jammu and Kashmir": null,
           "Jharkhand": null,
           "Karnataka": null,
           "Kerala": null,
           "Madhya Pradesh": null,
           "Maharashtra": null,
           "Manipur": null,
           "Meghalaya": null,
           "Mizoram": null,
           "Nagaland": null,
           "Orissa": null,
           "Punjab": null,
           "Pondicherry": null,
           "Rajasthan": null,
           "Sikkim": null,
           "Tamil Nadu": null,
           "Tripura": null,
           "Uttar Pradesh": null,
           "Uttarakhand": null,
           "West Bengal":null

      }
    });

    $(document).ready(function(){

      $('.tooltipped').tooltip({delay: 50});
      $('.carousel').carousel();
      
      // Next slide
      $('.carousel').carousel('next');
      $('.carousel').carousel('next', 3); // Move next n times.
      // Previous slide
      $('.carousel').carousel('prev');
      $('.carousel').carousel('prev', 4); // Move prev n times.
      // Set to nth slide
      $('.carousel').carousel('set', 4);

    });

    $("#formValidate,#updateform").validate({
        rules: {
            enroll:{
                required: true,
                minlength:10
            },
            uname: {
                required: true,
                minlength: 6
            },
            cemail: {
                required: true,
                email:true
            },
            email: {
                required: true,
                email:true
            },
            password: {
               required: true,
               minlength: 5
            },
           cpassword: {
              required: true,
              minlength: 5,
              equalTo: "#mpassword"
            },
          branch:"required",
          dob:"required",
          mobile:"required",
          gender:"required"
      },
        //For custom messages
      messages: {
          uname:{
              required: "Don't leave me alone! Give me a Name.",
              minlength: "That must be your pet name ! Enter your full name."
          },

          password:{
              required: "Don't leave me alone! Please fill me.",
              minlength: "Uh Oh! too Weak ! Feed me at least 6 characters."
          },
          cpassword:{
              required: "Don't leave me alone! Please fill me.",
              minlength: "Where did you learn to type ? Type excat same password."
          },
          branch:{
              required: "How could be you confuse on your Branch ?"
              // minlength: "No shortforms! Respect your Branch."
          }
          
      },

        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });

  }); // end of document ready


  var strength = {
     0: "Worst ☹",
     1: "Bad ☹",
     2: "Weak ☹",
     3: "Good ☺",
     4: "Strong ☻"
  }

  var password = document.getElementById('mpassword');
  var meter = document.getElementById('mpassword-strength-meter');
  var text = document.getElementById('mpassword-strength-text');
  // var text = $('.errorTxt3');


  password.addEventListener('input', function()
  {
      var val = password.value;
      var result = zxcvbn(val);

   
      // Update the password strength meter
      meter.value = result.score*25 + '%';
      meter.style.width = 'meter.value';


     // $('.passmeter').css('visibility','visible');
     $('.passmeter').width(meter.value);

     switch (meter.value) { 
      case '25%': 
        $('.passmeter').css('background-color','red');
        $('#mpassword-strength-text').css('color','red');
        break;
      case '50%': 
        $('.passmeter').css('background-color','#F44336');
        $('#mpassword-strength-text').css('color','#F44336');
        break;
      case '75%': 
        $('.passmeter').css('background-color','#AED581');
        $('#mpassword-strength-text').css('color','#AED581');
        break;    
      case '100%': 
        $('.passmeter').css('background-color','#4CAF50');
        $('#mpassword-strength-text').css('color','4CAF50');

        break;
      default:
        $('.passmeter').css('background-color','transparent');

     }

      // Update the text indicator
      if(val !== "") {
          text.innerHTML = "" + "<strong>" + strength[result.score] + "</strong>" +  " &nbsp;" + "<span>" + result.feedback.warning + " </span"; 
      }
      else {
          text.innerHTML = "";
      }
  });

})(jQuery); // end of jQuery name space
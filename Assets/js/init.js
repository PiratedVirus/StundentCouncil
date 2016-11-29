(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 50 // Creates a dropdown of 15 years to control year
    });



    $('input.future').autocomplete({
      data: {
            "GATE": null,
            "CAT": null,
            "UPSC / MPSC": null,
            "Masters": null,
            "Job": null,
            "PHD": null,
            "Bussiness": null
          }
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

    $("#formValidate").validate({
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
})(jQuery); // end of jQuery name space
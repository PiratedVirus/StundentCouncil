
  $(document).ready(function(){
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
              minlength: "Where did you learn to type ? Type exact same password."
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

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


  }); // end of document ready


 

})(jQuery); // end of jQuery name space
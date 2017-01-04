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
      $('.passmeter').css('background-color','#E65100');
      $('#mpassword-strength-text').css('color','#E65100');
      break;
    case '75%': 
      $('.passmeter').css('background-color','#FFC107');
      $('#mpassword-strength-text').css('color','#FFC107');
      break;    
    case '100%': 
      $('.passmeter').css('background-color','#4CAF50');
      $('#mpassword-strength-text').css('color','#4CAF50');

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
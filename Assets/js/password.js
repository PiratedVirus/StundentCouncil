
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

  password.addEventListener('input', function()
  {
      var val = password.value;
      var result = zxcvbn(val);

      console.log(val);
   
      // Update the password strength meter
      meter.value = result.score;
      console.log(meter.value)
     meter.style.width = 'meter.value';
      // Update the text indicator
      if(val !== "") {
          text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" + "<span class='feedback'>" + result.feedback.warning + " </span"; 
      }
      else {
          text.innerHTML = "";
      }
  });

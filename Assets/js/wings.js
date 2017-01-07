	function check()
	{
		    var inpObj = document.getElementById("pref1").value;
            var inpObj1 = document.getElementById("pref2").value;
            var inpObj2 = document.getElementById("pref3").value;
            var ques = document.getElementById("question").value;
		if (inpObj!="Select") {
			// document.getElementById("lbl6").style.display = 'BLOCK'
			document.getElementById("pref1ans").style.display = 'BLOCK'

		}
		else if (inpObj1!="Select") {
				// document.getElementById("lbl7").style.display = 'BLOCK'
			document.getElementById("pref2ans").style.display = 'BLOCK'
		}
		else if (inpObj2!="Select") {
				// document.getElementById("lbl8").style.display = 'BLOCK'
			document.getElementById("pref3ans").style.display = 'BLOCK'
		}
		else if (ques!="Select") {
			document.getElementById("ques2txt").style.display = 'BLOCK'
					// document.getElementById("lbl4").style.display = 'BLOCK'
		}
	}
		function myFunction() {
			document.getElementById("pref1").style.color = 'BLACK'
			document.getElementById("pref2").style.color = 'BLACK'
			document.getElementById("pref3").style.color = 'BLACK'
			// document.getElementById("lbl6").style.display = 'BLOCK'
			document.getElementById("pref1ans").style.display = 'BLOCK'
			var inpObj = document.getElementById("pref1").value;
            var inpObj1 = document.getElementById("pref2").value;
            var inpObj2 = document.getElementById("pref3").value;
            if (inpObj==inpObj1 && inpObj!="Select") {
        window.alert("Uh Oh! I can 'feel' your Over Interest to this option, but my algorithm doesn't allow me to do so !");
    	var inpObj = document.getElementById("pref1").value = "Select";
    	// document.getElementById("lbl6").style.display = 'none'
			document.getElementById("pref1ans").style.display = 'none'
     }
    if (inpObj==inpObj2 && inpObj!="Select") {
        window.alert("Uh Oh! I can 'feel' your Over Interest to this option, but my algorithm doesn't allow me to do so !");
    	var inpObj = document.getElementById("pref1").value = "Select";
    	// document.getElementById("lbl6").style.display = 'none'
			document.getElementById("pref1ans").style.display = 'none'
    }
    
   
} 


		function myFunction1() {
			document.getElementById("pref1").style.color = 'BLACK'
			document.getElementById("pref2").style.color = 'BLACK'
			document.getElementById("pref3").style.color = 'BLACK'
			// document.getElementById("lbl7").style.display = 'BLOCK'
			document.getElementById("pref2ans").style.display = 'BLOCK'
    var inpObj = document.getElementById("pref1").value;
    var inpObj1 = document.getElementById("pref2").value;
    var inpObj2 = document.getElementById("pref3").value;
    if (inpObj1==inpObj && inpObj1!="Select") {
    	window.alert("Please select another value");
    	var inpObj1 = document.getElementById("pref2").value = "Select";
    	// document.getElementById("lbl7").style.display = 'none'
			document.getElementById("pref2ans").style.display = 'none'
    }
    if (inpObj1==inpObj2 && inpObj1!="Select") {
    	window.alert("Please select another value");
    	var inpObj1 = document.getElementById("pref2").value = "Select";
    	// document.getElementById("lbl7").style.display = 'none'
			document.getElementById("pref2ans").style.display = 'none'
    }
    	
    	} 	function myFunction2() {
    			document.getElementById("pref1").style.color = 'BLACK'
			document.getElementById("pref2").style.color = 'BLACK'
			document.getElementById("pref3").style.color = 'BLACK'
			// document.getElementById("lbl8").style.display = 'BLOCK'
			document.getElementById("pref3ans").style.display = 'BLOCK'
    var inpObj = document.getElementById("pref1").value;
    var inpObj1 = document.getElementById("pref2").value;
    var inpObj2 = document.getElementById("pref3").value;
    if (inpObj2==inpObj1 && inpObj2!="Select") {
        window.alert("Uh Oh! I can 'feel' your Over Interest to this option, but my algorithm doesn't allow me to do so !");
    	var inpObj2 = document.getElementById("pref3").value = "Select";
    	// document.getElementById("lbl8").style.display = 'none'
			document.getElementById("pref3ans").style.display = 'none'
    }
    if (inpObj2==inpObj && inpObj2!="Select") {
        window.alert("Uh Oh! I can 'feel' your Over Interest to this option, but my algorithm doesn't allow me to do so !");
    	var inpObj2 = document.getElementById("pref3").value = "Select";
    	// document.getElementById("lbl8").style.display = 'none'
			document.getElementById("pref3ans").style.display = 'none'
    }
    
    }


    function myFunction3() {
    			document.getElementById("question").style.color = 'BLACK'
			
			var ques = document.getElementById("question").value;
			if (ques=="Select") {

                window.alert("Uh Oh! I can 'feel' your Over Interest to this option, but my algorithm doesn't allow me to do so !");
					document.getElementById("ques2txt").style.display = 'none'
					// document.getElementById("lbl4").style.display = 'none'	
					document.getElementById("question").style.color = 'RED'
			}
			else if(ques=="Yes")
			{
					document.getElementById("ques2txt").style.display = 'BLOCK'
					// document.getElementById("lbl4").style.display = 'BLOCK'
			}else
			{
				document.getElementById("ques2txt").style.display = 'none'
				// document.getElementById("lbl4").style.display = 'none'	
			}
    
    
    }


    function validate()
    {
    var inpObj = document.getElementById("pref1").value;
    var inpObj1 = document.getElementById("pref2").value;
    var inpObj2 = document.getElementById("pref3").value;
    if (inpObj=="Select") {
    	window.alert("Please select all the fields");
    	document.getElementById("pref1").style.color = 'RED'
    	// document.getElementById("lbl6").style.display = 'none'
			document.getElementById("pref1ans").style.display = 'none'
    	return false;
    }
    if (inpObj1=="Select") {
    	window.alert("Please select all the fields");
    	document.getElementById("pref2").style.color = 'RED'
// document.getElementById("lbl7").style.display = 'none'
			document.getElementById("pref2ans").style.display = 'none'
    	return false;
    }
    	if (inpObj2=="Select") {
    	window.alert("Please select all the fields");
    	document.getElementById("pref3").style.color = 'RED'
    	// document.getElementById("lbl8").style.display = 'none'
			document.getElementById("pref3ans").style.display = 'none'

    	return false;
    }
    var ques = document.getElementById("question").value;
			if (ques=="Select") {

					window.alert("Please select the value");
					document.getElementById("ques2txt").style.display = 'none'
					// document.getElementById("lbl4").style.display = 'none'	
					document.getElementById("question").style.color = 'RED'
					return false;
			}
    }

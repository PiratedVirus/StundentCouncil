    function check()
    {
            var inpObj = document.getElementById("club1").value;
            var inpObj1 = document.getElementById("club2").value;
       
    }
        function myFunction() {
            document.getElementById("club1").style.color = 'BLACK'
            document.getElementById("club2").style.color = 'BLACK'
            var inpObj = document.getElementById("club1").value;
            var inpObj1 = document.getElementById("club2").value;
            console.log(inpObj);
            console.log(inpObj1);
            
            if (inpObj==inpObj1 && inpObj!="Select") {
                window.alert("Uh Oh! I can 'feel' your Over Interest to this club, but my algorithm doesn't allow me to do so !");
                var inpObj = document.getElementById("club1").value = "Select";
            }

            switch (inpObj) { 
              case 'Astronomy': 
                 $('#info').html('This club will provide platform to all interested students in astronomy and aeronautics');
                 $('#info').fadeIn('slow');
                 // document.getElementById("info").style.display = 'BLOCK'               
                 break;

              case 'Design': 
                 $('#info').html('This club will provide a platfrom to all the interested students in event designing, technical designing(website, poster, banners, etc.)');
                 $('#info').fadeIn('slow');

                 // document.getElementById("info").style.display = 'BLOCK'               
                 break;

              case 'Art and Craft': 
                 $('#info').html('This club will include activities that enhance the artistic skills among students. Activities included are wall painting, set designing, decoration and infrastructure in technical artforms');
                 $('#info').fadeIn('slow');

                 // document.getElementById("info").style.display = 'BLOCK'               
                 break;

              case 'Drama': 
                 $('#info').html('This club will include activities that enhance the acting skills in students and provide platform for showcasing them');
                 $('#info').fadeIn('slow');

                 // document.getElementById("info").style.display = 'BLOCK'               
                 break;

              case 'Music and Dance': 
                 $('#info').html('This club will create a platform to develop the Music and Dancing skills among students');
                 $('#info').fadeIn('slow');

                 // document.getElementById("info").style.display = 'BLOCK'               
                 break;

              case 'Vikasa': 
                  $('#info').html('The club activities includes soft skills development programmes, language programmes, debate, elocutions, extempore, group discussion, preparation for competitive exams(GATE, MPSC, UPSC, GRE, CAT) etc. ');
                  $('#info').fadeIn('slow');

                  // document.getElementById("info").style.display = 'BLOCK'               
                 break;

              case 'Writers': 
                 $('#info').html('This club will foster the writing skills in students. The activities include draft writing, paper writing, blogs, poetry, content writing, script writing etc.');
                 $('#info').fadeIn('slow');

                 // document.getElementById("info").style.display = 'BLOCK'               
                 break;

              case 'Samvedena': 
                 $('#info').html('This club is formed to encourage the social activities');
                 $('#info').fadeIn('slow');

                 // document.getElementById("info").style.display = 'BLOCK'               
                 break;

              case 'Science on Street': 
                 $('#info').html('This club includes activites like our Technical event WINGS, different projects undertaken by students.');
                 $('#info').fadeIn('slow');

                 // document.getElementById("info").style.display = 'BLOCK'               
                 break;

              case 'Indoor games': 
                 $('#info').html('This club promotes all indoor games.');
                 $('#info').fadeIn('slow');

                 // document.getElementById("info").style.display = 'BLOCK'               
                 break;

              case 'Outdoor games': 
                 $('#info').html('This club promotes all outdoor games.');
                 $('#info').fadeIn('slow');

                 // document.getElementById("info").style.display = 'BLOCK'               
                 break;

            }
    // -------------------------------------------------------------------------------------------------------------
            switch (inpObj1) { 
             case 'Astronomy': 
                $('#info2').html('Lorem ipsum dolor sit amet ANNNNNNNN.');
                $('#info2').fadeIn('slow');
                // document.getElementById("info2").style.display = 'BLOCK'               
                break;

             case 'Design': 
                $('#info2').html('Lorem ipsum dolor sit amet desing.');
                $('#info2').fadeIn('slow');

                // document.getElementById("info2").style.display = 'BLOCK'               
                break;

             case 'Art and Craft': 
                $('#info2').html('This club will include activities that enhance the artistic skills among students. Activities included are wall painting, set designing, decoration and infrastructure in technical artforms');
                $('#info2').fadeIn('slow');

                // document.getElementById("info2").style.display = 'BLOCK'               
                break;

             case 'Drama': 
                $('#info2').html('This club will include activities that enhance the acting skills in students and provide platform for showcasing them');
                $('#info2').fadeIn('slow');

                // document.getElementById("info2").style.display = 'BLOCK'               
                break;

             case 'Music and Dance': 
                $('#info2').html('This club will create a platform to develop the Music and Dancing skills among students');
                $('#info2').fadeIn('slow');

                // document.getElementById("info2").style.display = 'BLOCK'               
                break;

             case 'Vikasa': 
                 $('#info2').html('The club activities includes soft skills development programmes, language programmes, debate, elocutions, extempore, group discussion, preparation for competitive exams(GATE, MPSC, UPSC, GRE, CAT) etc. ');
                 $('#info2').fadeIn('slow');

                 // document.getElementById("info2").style.display = 'BLOCK'               
                break;

             case 'Writers': 
                $('#info2').html('This club will foster the writing skills in students. The activities include draft writing, paper writing, blogs, poetry, content writing, script writing etc.');
                $('#info2').fadeIn('slow');

                // document.getElementById("info2").style.display = 'BLOCK'               
                break;

             case 'Samvedena': 
                $('#info2').html('This club is formed to encourage the social activities');
                $('#info2').fadeIn('slow');

                // document.getElementById("info2").style.display = 'BLOCK'               
                break;

             case 'Science on Street': 
                $('#info2').html('This club includes activites like our Technical event WINGS, different projects undertaken by students.');
                $('#info2').fadeIn('slow');

                // document.getElementById("info2").style.display = 'BLOCK'               
                break;

             case 'Indoor games': 
                $('#info2').html('This club promotes all indoor games.');
                $('#info2').fadeIn('slow');

                // document.getElementById("info2").style.display = 'BLOCK'               
                break;

             case 'Outdoor games': 
                $('#info2').html('This club promotes all outdoor games.');
                $('#info2').fadeIn('slow');

                // document.getElementById("info2").style.display = 'BLOCK'               
                break;

            }
    
   // console.log(inpObj1);
       
    
   
} 


        




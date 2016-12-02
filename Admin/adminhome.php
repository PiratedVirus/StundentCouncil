
<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title>Welcome  Admin </title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="../Assets/css/nockeckbox.css">

  <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
  <script src="../Assets/js/ajaxsearch.js"></script>

  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      height: 500,
      theme: 'modern',
      plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
      ],
      toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
      image_advtab: true,
      templates: [
        { title: 'Test template 1', content: 'Test 1' },
        { title: 'Test template 2', content: 'Test 2' }
      ],
      content_css: [
        // '//www.tinymce.com/css/codepen.min.css'
      ]
     });
  </script>
    <script type="text/javascript" language="javascript">
      function checkedbox(element) { 
        console.log('checkboxes');
        var checkboxes = document.getElementsByName('chk[]');
        if (element.checked) {
           for (var i = 0; i < checkboxes.length; i++) {
            console.log(i);
             if (checkboxes[i].type == 'checkbox') {
               checkboxes[i].checked = true;
             }
           }
        } else {
           for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
               checkboxes[i].checked = false;
             }
           }
        }
      }
    </script>


</head>
<body>
<div class="navbar-fixed">
  <nav id="admin-menu">
      <div class="nav-wrapper">

        <ul id="slide-out" class="side-nav">
            <li><div class="userView">
              <img class="background" src="../Assets/img/2.jpg">
              <a href="#"><img class="circle" src="../Assets/img/user.png"></a>
              <a href="#"><span  class="black-text name slide-username"> <b>Admin</b></span></a>
              <a href="#"><span class="black-text email"></span></a>
            </div></li>
          
            <li><a href="#combolink">Combo sort</a></li>
            <li><a href="#bracheslink">Branches</a></li>
            <li><a href="#yearlink">Year</a></li>
            <li><a href="#skillink">Skills</a></li>
            <li><a href="#resultlink">Results</a></li>
            <li><div class="divider"></div></li>
            <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
            <li><div class="divider"></div></li>
            <li><a href="../default.html"><b>STUDENT COUNCIL</b></a></li>



            <li><a class="waves-effect" href="#">Events</a></li>
            <li><a class="waves-effect" href="#">Something</a></li>
        </ul>

        <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
        <i class="material-icons">menu</i></a>

        <a href="../default.html" class="brand-logo center">Student Council</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#combolink">Combo sort</a></li>
          <li><a href="#bracheslink">Branches</a></li>
          <li><a href="#yearlink">Year</a></li>
          <li><a href="#skillink">Skills</a></li>
          <li><a href="#resultlink">Results</a></li>
        </ul>


      </div>
  </nav>
</div>


  <div class="container admin-land">
    <div class="row">
      <div class="">
        <h2 class="admin-head center">Welcome Admin !</h2>

                <div class="input-field">

                  <input type="search"  name="search_text" id="search_text" class="form-control" />  
                  <label class="left" for="search_text"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>

                </div>




        <p class="info-admin center">
          Use following filters for specific results.There is a COMBO SORT which sorts Year and Branch together.Branches and Year filters are sperate for sorting indivisiuls.'Skills' filter is very useful, Lorem ipsum dolor sit.To
           view all details without any filters <a href="../core/display.php" target="_blank"> click here</a>
        </p>
      </div>
    </div>

  </div>

    <div class="row">
      <div class="col s12">
        <div  id ="result" ></div>
      </div>
    </div>
    <div id="resultlink">

    
     <?php 
      include 'sorters.php';
      ?>

  </div>

  <form action="" id="combolink" class = "combo" method="POST">
    <hr class="header-holder top-line">
    <div class="container" >
      <h4 class="form-header">Combo Sort</h4>
      <div class="row">
        <div class="form-group combo-year col m3 s12 offset-m2">
          <p>

            <input type="checkbox" name="FE" id="fe">
            <label for="fe">First Year</label>
          </p>
          <p>

            <input type="checkbox" name="SE" id="se">
            <label for="se">Second Year</label>
          </p>
          <p>

            <input type="checkbox" name="TE" id="te">
            <label for="te">Third Year</label>
          </p>
          <p>

            <input type="checkbox" name="BE" id="be">
            <label for="be">Final Year</label>
          </p>
        </div>
        <div class="form-group combo-branch col m6 s12">
          <p>

            <input type="checkbox" name="CSE" id="cse">
            <label for="cse">Computer Science And Engineering</label>
          </p>
          <p>

            <input type="checkbox" name="Mech" id="mech">
            <label for="mech">Mechanical Engineering</label>
          </p>
          <p>

            <input type="checkbox" name="Civil" id="civil">
            <label for="civil">Civil Engineering</label>
          </p>
          <p>

            <input type="checkbox" name="Elect" id="elect">
            <label for="elect">Electrical Engineering</label>
          </p>
          <p>

            <input type="checkbox" name="Entc" id="entc">
            <label for="entc">Elctronics And Telecommunications</label>
          </p>
          <p>

            <input type="checkbox" name="It" id="it">
            <label for="it">Information Technology</label>
          </p>
        </div>
          
          <input type="submit" class="combo-sort center" value="Hunt">
          
      </div>
    </div>
        <hr class="header-holder">

        <!-- <div style="height: 100%;border: 2px solid black" id ="result" ></div> -->



  </form>

    <div class="container edit" id="bracheslink" style="margin-bottom: 50px;"">
      <h5 class="form-header">Branches</h5>
      <div class="row inline-form">

        <form action="" method="POST" name="singular">


          <input type="submit" class="imgbtn col m2 s4"  value="Cse" name="single-cse">

        </form>

        <form action="" method="POST" name="singular">

          <input type="submit" class="imgbtn col m2 s4" value="Mech" name="single-mech">
            
        </form>

        <form action="" method="POST" name="singular">

          <input type="submit" class="imgbtn col m2 s4" value="Civil" name="single-civil">

        </form>

        <form action="" method="POST" name="singular">

          <input type="submit" class="imgbtn col m2 s4" value="EnTC" name="single-entc">

        </form>

        <form action="" method="POST" name="singular">

          <input type="submit" class="imgbtn col m2 s4" value="Elect" name="single-elect">

        </form>

        <form action="" method="POST" name="singular">

          <input type="submit" class="imgbtn col m2 s4" value="IT" name="single-it">

  </form>
      </div>
    </div>
      <hr class="header-holder">

    <div class="container edit" id="yearlink"style="margin-bottom: 50px;color: #9e9e9e;" "="">
      <h5 class="form-header">Year &nbsp;&nbsp;  </h5>

      <div class="row inline-form">
        <form action="" method="POST" name="singular">

          <input type="submit" value="FE" class="imgbtn  col m2 s4 offset-m1" name="single-fe">

        </form>

        <form action="" method="POST" name="singular">

          <input type="submit" value="SE" class="imgbtn  col m2 s4 offset-m1" name="single-se">

        </form>

        <form action="" method="POST" name="singular">

          <input type="submit" value="TE" class="imgbtn  col m2 s4 offset-m1" name="single-te">

        </form>

        <form action="" method="POST" name="singular">

          <input type="submit" value="BE" class="imgbtn  col m2 s4 offset-m1" name="single-be">

        </form>
        
      </div>

    </div>
    <hr class="header-holder">

    <div class="container " id="skillink">
      <h5 class="form-header">Skills</h5>

      <div class="row">
        <form method="post" name="multiple-check">

                      <div class="row ">

                          <div class="col s12">
                              <ul class="tabs tab-holder" style="width: 100%;margin: 60px 0px 20px 0px;">
                                <li class="tab col s3"><a href="#technical">Technical</a></li>
                                <li class="tab col s3"><a href="#Social">Social</a></li>
                                <li class="tab col s3"><a href="#Sports">Sports</a></li>
                                <li class="tab col s3"><a href="#Managment">Management</a></li>
                              </ul>
                          </div>

                          <div id="technical" class="col s12">
                              <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="web" id="web"  />
                                  <label for="web">Web Designing and Developing</label>
                                </p>

                              <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Maintaining this site">
                                <input type="checkbox" name="PHP" id="PHP"  />
                                <label for="PHP">PHP</label>
                              </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="graphics" id="graphics"  />
                                  <label for="graphics">Photoshop / Illustrator </label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="app" id="app"  />
                                  <label for="app">App Development </label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="Video" id="Video Editing"  />
                                  <label for="Video Editing">Video Editing</label>
                                </p>


                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="animations" id="animations"  />
                                  <label for="animations">Animations</label>
                                </p>
                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="Networking" id="Networking"  />
                                  <label for="Networking"> Computer Networking</label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="Autocad" id="Autocad"  />
                                  <label for="Autocad">Autocad</label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="Katia" id="Katia"  />
                                  <label for="Katia">Catia</label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="CNC" id="CNC"  />
                                  <label for="CNC">CNC Programming</label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="proe" id="proe"  />
                                  <label for="proe">PROE / CREO</label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="Hypermesh" id="ansys hypermesh"  />
                                  <label for="ansys hypermesh">ANSYS Hypermesh</label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="KEIL" id="KEIL"  />
                                  <label for="KEIL">KEIL</label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="PROTEUS" id="PROTEUS"  />
                                  <label for="PROTEUS">PROTEUS</label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="Maxwell" id="ANSYS Maxwell"  />
                                  <label for="ANSYS Maxwell">ANSYS Maxwell</label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="FEMM" id="FEMM"  />
                                  <label for="FEMM">FEMM</label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="Arduino" id="Arduino"  />
                                  <label for="Arduino">Arduino</label>
                                </p>

                                <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                                  <input type="checkbox" name="Rassberry" id="Rassberry Pie"  />
                                  <label for="Rassberry Pie">Rassberry Pie</label>
                                </p>







                          </div>

                          <div id="Social" class="col s12">
                        <p class="col m4 s6">
                            <input type="checkbox" name="act" id="act" />
                            <label for="act">Acting</label>
                          </p>

                          <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                            <input type="checkbox" name="Photography" id="Photography"  />
                            <label for="Photography">Photography</label>
                          </p>


                          <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                            <input type="checkbox" name="dance" id="dance"  />
                            <label for="dance">Dance</label>
                          </p>

                          <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                            <input type="checkbox" name="Ankering" id="Ankering"  />
                            <label for="Ankering">Ankering / Hosting</label>
                          </p>

                          <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                            <input type="checkbox" name="Singing" id="Singing"  />
                            <label for="Singing">Singing</label>
                          </p>

                          <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                            <input type="checkbox" name="Drama" id="Drama"  />
                            <label for="Drama">Drama</label>
                          </p>

                          <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                            <input type="checkbox" name="Writing" id="Writing"  />
                            <label for="Writing">Writing</label>
                          </p>

                          <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                            <input type="checkbox" name="Poetry" id="Poetry"  />
                            <label for="Poetry">Poetry</label>
                          </p>
                          <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                            <input type="checkbox" name="Drawing" id="Drawing"  />
                            <label for="Drawing">Drawing</label>
                          </p>
                          <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                            <input type="checkbox" name="decoration / Design" id="decoration / Design"  />
                            <label for="decoration / Design">decoration / Design</label>
                          </p>
                          <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
                            <input type="checkbox" name="Painting" id="Painting"  />
                            <label for="Painting">Painting</label>
                          </p>


                           </div>

                          <div id="Sports" class="col s12">
                              <p class="col m4 s6">
                                <input type="checkbox" name="Cricket" id="Cricket"  />
                                <label for="Cricket">Cricket</label>
                              </p>
                              <p class="col m4 s6">
                                <input type="checkbox" name="Badminton" id="Badminton"  />
                                <label for="Badminton">Badminton</label>
                              </p>
                              <p class="col m4 s6">
                                <input type="checkbox" name="Football" id="Football"  />
                                <label for="Football">Football</label>
                              </p>
                              <p class="col m4 s6">
                                <input type="checkbox" name="Chess" id="Chess"  />
                                <label for="Chess">Chess</label>
                              </p>
                              <p class="col m4 s6">
                                <input type="checkbox" name="Kabbadi" id="Kabbadi"  />
                                <label for="Kabbadi">Kho-Kho</label>
                              </p>
                              <p class="col m4 s6">
                                <input type="checkbox" name="basketball" id="basketball"  />
                                <label for="basketball">Basketball</label>
                              </p>
                              <p class="col m4 s6">
                                <input type="checkbox" name="Vollyball" id="Vollyball"  />
                                <label for="Vollyball">Vollyball</label>
                              </p>


                         </div>

                          <div id="Managment" class="col s12">
                              <p class="col m4 s6">
                                <input type="checkbox" name="Leader" id="Leader"  />
                                <label for="Leader">Leader</label>
                              </p>
                              <p class="col m4 s6">
                                <input type="checkbox" name="Member" id="Member"  />
                                <label for="Member">Member</label>
                              </p>
                          </div>

                      </div>




                <input type="submit" name="check" class="combo-sort" value="Hunt">

        </form>

      </div>
      <hr class="header-holder">

    </div>
      
    <form action="" method="POST">

    <input type="submit" name="notify" class="btn-large combo-sort" value="Notify for SAT">

      
    </form>
    
       <script src="../Assets/js/materialize.js"></script>
       <script src="../Assets/js/init.js"></script>
      
    
  </body>
  </html>
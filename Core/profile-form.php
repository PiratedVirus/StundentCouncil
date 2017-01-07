  <!DOCTYPE html(lang='en')>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
   <meta name="theme-color" content="#009688 ">
   <meta name="msapplication-navbutton-color" content="#009688 ">
   <meta name="apple-mobile-web-app-status-bar-style" content="#009688 ">
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

   <title>Student Council</title>

   <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
   <script src="../Assets/js/analytics.js"></script>
   <script src="../Assets/js/dobvailator.js"></script>
   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
   <script>
   tinymce.init({
     selector: 'textarea',
     height: 200,
     menubar: false,
     plugins: [
       'advlist autolink lists link image charmap print preview anchor',
       'searchreplace visualblocks code fullscreen',
       'insertdatetime media table contextmenu paste code'
     ],
     toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
   });
   </script>

   

 </head>
 <body>

 <nav id="profile-menu" class="trans-menu">
     <div class="nav-wrapper">

       <ul id="slide-out" class="side-nav">
           <li><div class="userView">
             <img class="background" src="../Assets/img/b (5).jpg">
             <a href="#"><img class="circle" src="../Assets/img/userios.png"></a>
             <a href="#"><span  class="white-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
             <a href="#"><span class="white-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
           </div></li>
           <li><a href="../home"><img class="slideicon" src="../Assets/img/home.png"  alt="">Home</a></li>
           <li><a href="../view"><img class="slideicon" src="../Assets/img/eye.png"  alt="">View Profile</a></li>
           <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
           <li><div class="divider"></div></li>

           <li><a href="http://www.scouncilgeca.com"><b> STUDENT COUNCIL</b></a></li>
           <li><a href="http://www.scouncilgeca.com#team-link">Team</a></li>
           <li><a href="http://www.scouncilgeca.com#contact-link">Contact Us</a></li>

       </ul>

       <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
       <i class="material-icons">menu</i></a>

       <a href="http://geca.ac.in" target="_blank" class="brand-logo center downlift"><img src="../Assets/img/final_small.png"></a>

       <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="../logout.php?logout">Log out</a></li>
         <li><a href="http://www.scouncilgeca.com#team-link">Team</a></li>
         <li><a href="http://www.scouncilgeca.com#contact-link">Contact Us</a></li>
       </ul>


     </div>
  </nav>

 <div class="container" style="padding-top: 50px;">
 	<div class="row">
 	    <form name='form' id="updateform" method="POST" action="success" class="col s12">

 		    <?php

 		      require_once 'dbconnect.php';
 		      ob_start();
 		      session_start();

          $get = mysqli_query($conn,"SELECT * FROM skills WHERE userId = '".$_SESSION['stud_id']."'");
          $arr = mysqli_fetch_array($get);

          $getuser = mysqli_query($conn,"SELECT * FROM users WHERE userId = '".$_SESSION['stud_id']."'");
          $arruser = mysqli_fetch_array($getuser);

 		    ?>



 		      <div class="row">

 		    	<div class="input-field col s12">
 		    	  <input disabled  id="icon_prefix" type="text" name="uname" id="disabled" style="text-transform: capitalize;" value="<?php echo $_SESSION['stud_name'] ?>" class="validate">
 		    	  <label for="icon_prefix">Name</label>
 		    	</div>


 		        <div class="input-field col s6 ">
 		          <input disabled  id="icon_prefix" type="text" name="enrollment" id="disabled" value="<?php echo $_SESSION['stud_id'] ?>" class="validate uppercase">
 		          <label for="icon_prefix">Enrollment Number</label>
 		        </div>

  				<!-- ++++++++++ Unique values ends here  +++++++ -->
 				<!-- Never modify names of any of these inputs.They are further linked in testing.php -->
 				<!-- Not passing entries of Name and Enrollment number for editing, since they r unique -->
 				<!-- consider skills as BRANCH in whole project -->


 		        <div class="input-field col s6">
 		          <input disabled id="icon_prefix" type="text" name="branch" value="<?php echo $_SESSION['stud_skills'] ?>" class="branch-edit validate">
 		          <label for="icon_prefix">Branch</label>
 		        </div>

 		        <div class="input-field col s12">
 		          <input  required="requried" id="icon_prefix" type="email" name="cemail" value="<?php echo $_SESSION['stud_email'] ?>" class="validate">
 		          <label for="icon_prefix">Email</label>
              <div class="errorTxt11"></div>

 		        </div>



 		        <div class="input-field col s12 m6">
 		          <input  required="requried"  id="icon_telephone" maxlength="10" type="tel" name="mobile" value="<?php echo $_SESSION['stud_mobile'] ?>" class="validate">
 		          <label for="icon_telephone">Mobile Number</label>
              <div class="errorTxt12"></div>

 		        </div>

            <div class="input-field col m4 s8 ">
              <label for="birthdate">Birth Date</label>
              <input requried required="requried" id="birthdate" type="text" name="dob" value="<?php echo $_SESSION['stud_dob'] ?>" class="datepicker tooltipped" data-position="top" data-delay="40" data-tooltip="Verify to Proceed">
              <div class="errorTxt20">Verify to Proceed</div>
            </div>

            <div class="input-field col m2 s4" >
              <input type="button"  value="Verify" class="btn waves-effect waves-light tooltipped dobchkbtn" data-position="top" data-delay="50" data-tooltip="Verify to Proceed">
            </div>



            <div class="input-field col s12 m6">
              <select required  required="requried" id="year" type="text" name="year" class="year">
                <option value="" disabled selected="selected" >Select Year</option>
                <option value="First Year" >First Year</option>
                <option value="Second Year" >Second Year</option>
                <option value="Third Year" >Third Year</option>
                <option value="Final Year" >Final Year</option>
              </select>
              <label for="">Year of Study</label>

            </div>

            <div class="input-field col m6 s12">
              <select required  required="requried" id="bloodgroup" type="text" name="bloodgroup" class="bloodgroup">
                <option value="" disabled selected="selected" >Select Blood Group</option>
                <option value="A+" >A +</option>
                <option value="A-" >A -</option>
                <option value="B+" >B +</option>
                <option value="B-" >B -</option>
                <option value="O+" >O +</option>
                <option value="O-" >O -</option>
                <option value="AB+" >AB +</option>
                <option value="AB-" >AB -</option>
              </select>
              <label for="">Blood Group</label>
            </div>

            <div class="input-field col s12 m6">
              <input  required="requried" id="address" type="text" name="address" value="<?php echo $_SESSION['stud_address'] ?>" class="address">
              <label for="icon_prefix">Address</label>

            </div>


 		        <div class="input-field col m6 s12">
 		          <input  required="requried" id="state" type="text" name="state" value="<?php echo $_SESSION['stud_state'] ?>" class="state">
 		          <label for="icon_prefix">State</label>
 		        </div>








 		                <div class="row" id="redirect">

 		        	          <div class="col s12 push">
 		        		            <ul class="tabs tab-holder" style="width: 100%;margin: 60px 0px 20px 0px;">
 		        		              <li class="tab col s3"><a href="#technical" id="techchk">Technical</a></li>
 		        		              <li class="tab col s3"><a href="#Social" id="socialchk">Cultural</a></li>
 		        		              <li class="tab col s3"><a href="#Sports" id="sportschk">Sports</a></li>
 		        		              <li class="tab col s3"><a href="#Managment" id="otherchk">other</a></li>
 		        		            </ul>
 		        	          </div>
                        <script type="text/javascript">

                        </script>

 		        	          <div id="technical" class="col s12" >
 		        	          		<p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Developing websites like this">
 		        	          	      <input type="checkbox" name="web" id="web" <?php if ($arr['web'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="web">Web Designing and Developing</label>
 		        	          	    </p>

 		        	          	  <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Maintaining this site">
 		        	          	    <input type="checkbox" name="PHP" id="PHP" <?php if ($arr['PHP'] == '1') echo "checked='checked'"; ?>  />
 		        	          	    <label for="PHP">PHP</label>
 		        	          	  </p>

 		        	          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Posters for events">
 		        	          	      <input type="checkbox" name="graphics" id="graphics" <?php if ($arr['photoshop'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="graphics">Photoshop / Illustrator </label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="New Era of Apps in College">
 		        	          	      <input type="checkbox" name="app" id="app" <?php if ($arr['app'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="app">App Development </label>
 		        	          	    </p>

                              <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editing Videos for college">
                                <input type="checkbox" name="Video" id="Video Editing" <?php if ($arr['Video'] == '1') echo "checked='checked'"; ?> />
                                <label for="Video Editing">Video Editing</label>
                              </p>


 		        	          	    <p class="col m4 s6 ">
 		        	          	      <input type="checkbox" name="msoffice" id="msoffice" <?php if ($arr['msoffice'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="msoffice">MS Office</label>
 		        	          	    </p>


 		        	          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="For College Team">
 		        	          	      <input type="checkbox" name="animations" id="animations" <?php if ($arr['animation'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="animations">Animations</label>
 		        	          	    </p>
 		        	          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Arranging Internet at various events in clg">
 		        	          	      <input type="checkbox" name="Networking" id="Networking" <?php if ($arr['networking'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="Networking"> Computer Networking</label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Mechanical">
 		        	          	      <input type="checkbox" name="Autocad" id="Autocad" <?php if ($arr['autocad'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="Autocad">Autocad</label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Mechanical">
 		        	          	      <input type="checkbox" name="Katia" id="Katia" <?php if ($arr['katia'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="Katia">Catia</label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Mechanical">
 		        	          	      <input type="checkbox" name="CNC" id="CNC" <?php if ($arr['CNC'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="CNC">CNC Programming</label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Mechanical">
 		        	          	      <input type="checkbox" name="proe" id="proe" <?php if ($arr['PROE'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="proe">PROE / CREO</label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Mechanical">
 		        	          	      <input type="checkbox" name="Hypermesh" id="ansys hypermesh" <?php if ($arr['Hypermesh'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="ansys hypermesh">ANSYS Hypermesh</label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6">
 		        	          	      <input type="checkbox" name="KEIL" id="KEIL" <?php if ($arr['KEIL'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="KEIL">KEIL</label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6">
 		        	          	      <input type="checkbox" name="PROTEUS" id="PROTEUS" <?php if ($arr['PROTEUS'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="PROTEUS">PROTEUS</label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6">
 		        	          	      <input type="checkbox" name="Maxwell" id="ANSYS Maxwell" <?php if ($arr['Maxwell'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="ANSYS Maxwell">ANSYS Maxwell</label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6">
 		        	          	      <input type="checkbox" name="FEMM" id="FEMM" <?php if ($arr['FEMM'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="FEMM">FEMM</label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6">
 		        	          	      <input type="checkbox" name="Arduino" id="Arduino" <?php if ($arr['Arduino'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="Arduino">Arduino</label>
 		        	          	    </p>

 		        	          	    <p class="col m4 s6">
 		        	          	      <input type="checkbox" name="Rassberry" id="Rassberry Pie" <?php if ($arr['Rassberry'] == '1') echo "checked='checked'"; ?> />
 		        	          	      <label for="Rassberry Pie">Rassberry PI</label>
 		        	          	    </p>
                                
                                <div class="col center update-bultton">

                                <button  class="btn waves-effect waves-light" id ="addother" onclick="showOthertech()" name="addother" style="margin-top: 50px;">Other </button>

                              </div>

                              <div class="row">
                                <div hidden class="input-field col s12 m6 othertech">
                                  <input  id="othertech" type="text" name="othertech">
                                  <label for="icon_prefix">Other in Technical</label>

                                </div>


                              </div>

                            <div class="input-feild col s12 center">
                              
                              <a class="center" href="#socialchk">Next</a>
                            </div>

                      <div class="input-field col s12">
                        <hr class="teal-line">
                        <p class="edit-head">Achivements in Technical</p>
                        <div style="color: #9e9e9e;" class="errorTxt25">You can upload your certificates, photos too! Just give us link.. (In case of Google Drive, Dropbox; first create a sharable link and then paste here.) </div>
                        <textarea name="high_tech"><?php  $str = $arr['hightech']; echo html_entity_decode($str);?></textarea>
 		        					</div>


 		        	          </div>

 		        	          <div id="Social" class="col s12">
 		        					<p class="col m4 s6">
 		        				      <input type="checkbox" name="act" id="act" <?php if ($arr['acting'] == '1') echo "checked='checked'"; ?> />
 		        				      <label for="act">Acting</label>
 		        				    </p>

 		        				    <p class="col m4 s6">
 		        				      <input type="checkbox" name="Photography" id="Photography" <?php if ($arr['Photo'] == '1') echo "checked='checked'"; ?> />
 		        				      <label for="Photography">Photography</label>
 		        				    </p>


 		        				    <p class="col m4 s6">
 		        				      <input type="checkbox" name="dance" id="dance" <?php if ($arr['dance'] == '1') echo "checked='checked'"; ?> />
 		        				      <label for="dance">Dance</label>
 		        				    </p>

 		        				    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip=" Hosting in various events">
 		        				      <input type="checkbox" name="Ankering" id="Ankering" <?php if ($arr['ankering'] == '1') echo "checked='checked'"; ?> />
 		        				      <label for="Ankering">Anchoring / Hosting</label>
 		        				    </p>

 		        				    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip=" Fairwell and Intro in events">
 		        				      <input type="checkbox" name="Singing" id="Singing" <?php if ($arr['singing'] == '1') echo "checked='checked'"; ?> />
 		        				      <label for="Singing">Singing</label>
 		        				    </p>

 		        				    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Representing CLG">
 		        				      <input type="checkbox" name="Drama" id="Drama" <?php if ($arr['drama'] == '1') echo "checked='checked'"; ?> />
 		        				      <label for="Drama">Drama</label>
 		        				    </p>

 		        				    <p class="col m4 s6">
 		        				      <input type="checkbox" name="Writing" id="Writing" <?php if ($arr['writing'] == '1') echo "checked='checked'"; ?> />
 		        				      <label for="Writing">Writing</label>
 		        				    </p>

 		        				    <p class="col m4 s6">
 		        				      <input type="checkbox" name="Poetry" id="Poetry" <?php if ($arr['poetry'] == '1') echo "checked='checked'"; ?> />
 		        				      <label for="Poetry">Poetry</label>
 		        				    </p>
 		        				    <p class="col m4 s6">
 		        				      <input type="checkbox" name="Drawing" id="Drawing" <?php if ($arr['drawing'] == '1') echo "checked='checked'"; ?> />
 		        				      <label for="Drawing">Drawing</label>
 		        				    </p>
 		        				    <p class="col m4 s6">
 		        				      <input type="checkbox" name="decoration / Design" id="decoration / Design" <?php if ($arr['decoration'] == '1') echo "checked='checked'"; ?> />
 		        				      <label for="decoration / Design">Decoration / Design</label>
 		        				    </p>
                        <p class="col m4 s6">
                          <input type="checkbox" name="Painting" id="Painting" <?php if ($arr['painting'] == '1') echo "checked='checked'"; ?> />
                          <label for="Painting">Painting</label>
                        </p>

                        <p class="col m4 s6">
                          <input type="checkbox" name="sandart" id="sandart" <?php if ($arr['sandart'] == '1') echo "checked='checked'"; ?> />
                          <label for="sandart">Sand Art</label>
                        </p>


                        <p class="col m4 s6">
                          <input type="checkbox" name="artncraft" id="artncraft" <?php if ($arr['artncraft'] == '1') echo "checked='checked'"; ?> />
                          <label for="artncraft">Art & Craft</label>
                        </p>

                        <div class="col center">
                          
                        <button  class="btn waves-effect waves-light" id ="addother" onclick="showOthercult()" name="addother" style="margin-top: 50px;">Other </button>
                        </div>

                        <div hidden class="input-field col s12 m6 othercult">
                          <input  id="othercult" type="text" name="othercult">
                          <label for="icon_prefix">Other in Cultural</label>

                        </div>
                          
                          



                        <div class="input-feild col s12 center">
                          
                          <a class="center" href="#sportschk">Next</a>
                        </div>

 		        				    <div class="input-field col s12">
                          <hr class="teal-line">
                          <p class="edit-head">Achivements in Cultural</p>
                          <div style="color: #9e9e9e;" class="errorTxt25">You can upload your certificates, photos too! Just give us link.. (In case of Google Drive, Dropbox; first create a sharable link and then paste here.) </div>
                          <textarea name="high_cult"><?php  $str = $arr['highcult']; echo html_entity_decode($str);?></textarea>
                        </div>




 		        	           </div>


 		        	          <div id="Sports" class="col s12">
 		        		          	<p class="col m4 s6">
 		        		          	  <input type="checkbox" checked="checked" name="Cricket" id="Cricket"  />
 		        		          	  <label for="Cricket">Cricket</label>
 		        		          	</p>
 		        		          	<p class="col m4 s6">
 		        		          	  <input type="checkbox" name="Badminton" id="Badminton" <?php if ($arr['badminton'] == '1') echo "checked='checked'"; ?> />
 		        		          	  <label for="Badminton">Badminton</label>
 		        		          	</p>
 		        		          	<p class="col m4 s6">
 		        		          	  <input type="checkbox" name="Football" id="Football" <?php if ($arr['football'] == '1') echo "checked='checked'"; ?> />
 		        		          	  <label for="Football">Football</label>
 		        		          	</p>
 		        		          	<p class="col m4 s6">
 		        		          	  <input type="checkbox" name="Chess" id="Chess" <?php if ($arr['chess'] == '1') echo "checked='checked'"; ?> />
 		        		          	  <label for="Chess">Chess</label>
 		        		          	</p>
 		        		          	<p class="col m4 s6">
 		        		          	  <input type="checkbox" name="Kabbadi" id="Kabbadi" <?php if ($arr['kabbadi'] == '1') echo "checked='checked'"; ?> />
 		        		          	  <label for="Kabbadi">Kho-Kho</label>
 		        		          	</p>
 		        		          	<p class="col m4 s6">
 		        		          	  <input type="checkbox" name="basketball" id="basketball" <?php if ($arr['basketball'] == '1') echo "checked='checked'"; ?> />
 		        		          	  <label for="basketball">Basketball</label>
 		        		          	</p>
                            <p class="col m4 s6">
                              <input type="checkbox" name="Vollyball" id="Vollyball" <?php if ($arr['vollyball'] == '1') echo "checked='checked'"; ?> />
                              <label for="Vollyball">Vollyball</label>
                            </p>

 		        		          	<p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Just Kidding  :p">
 		        		          	  <input disabled type="checkbox" name="Pokemon GO" id="Pokemon GO" checked />
 		        		          	  <label for="Pokemon GO"><span style="color: teal;" ><b>Pokemon GO</b></span></label>
 		        		          	</p>


                            <button  class="btn waves-effect waves-light" id ="addother" onclick="showOthersports()" name="addother" style="margin-top: 50px;">Other </button>

                            <div hidden class="input-field col s12 m6 othersports">
                              <input  id="othersports" type="text" name="othersports">
                              <label for="icon_prefix">Other in Sports</label>

                            </div>


                            <div class="input-feild col s12 center">
                              
                              <a class="center" href="#otherchk">Next</a>
                            </div>

                            <div class="input-field col s12">
                              <hr class="teal-line">
                              <p class="edit-head">Achivements in Sports</p>
                              <div style="color: #9e9e9e;" class="errorTxt25">You can upload your certificates, photos too! Just give us link.. (In case of Google Drive, Dropbox; first create a sharable link and then paste here.) </div>
                              <textarea name="high_sports"><?php  $str = $arr['highsports']; echo html_entity_decode($str);?></textarea>
                            </div>





 		        	         </div>

 		        	          <div id="Managment" class="col s12">
 		        		          	<p class="col m4 s6">
 		        		          	  <input type="checkbox" name="Leader" id="Leader" <?php if ($arr['Leader'] == '1') echo "checked='checked'"; ?> />
 		        		          	  <label for="Leader">Leadership</label>
 		        		          	</p>
                            <p class="col m4 s6">
                              <input type="checkbox" name="communication" id="communication" <?php if ($arr['communication'] == '1') echo "checked='checked'"; ?> />
                              <label for="communication">Communication Skill</label>
                            </p>
                            <p class="col m4 s6">
                              <input type="checkbox" name="otherlang" id="otherlang" <?php if ($arr['otherlang'] == '1') echo "checked='checked'"; ?> />
                              <label for="otherlang">Other Languages</label>
                            </p>

                            <p class="col m4 s6">
                              <input type="checkbox" name="mangemenet" id="mangemenet" <?php if ($arr['mangemenet'] == '1') echo "checked='checked'"; ?> />
                              <label for="mangemenet">Management Skills</label>
                            </p>


 		        		          	<p class="col m4 s6">
 		        		          	  <input type="checkbox" name="marketing" id="marketing" <?php if ($arr['marketing'] == '1') echo "checked='checked'"; ?> />
 		        		          	  <label for="marketing">Marketing Skills</label>
 		        		          	</p>

                            <button  class="btn waves-effect waves-light" id ="addother" onclick="showOtherother()" name="addother" style="margin-top: 50px;">Other </button>

                            <div hidden class="input-field col s12 m6 otherother">
                              <input  id="otherother" type="text" name="otherother">
                              <label for="icon_prefix">Other in Other</label>

                            </div>

 		        	          </div>

 		                </div>

            <hr class="teal-line">
            <p class="edit-head">Clubs</p>
            <div class="input-field col s12">

                  <select name="club1" id="club1" onchange="myFunction()" required>
                            <option value="" disabled selected>Choose your Preference</option>
                            <option value="Astronomy"  data-icon="../Assets/img/technology-1.png" class="circle" >Astronomy Club</option>
                            <option value="Design"  data-icon="../Assets/img/design-tool.png" class="circle">Design Team</option>
                            <option value="Art and Craft"  data-icon="../Assets/img/palette.png" class="circle">Art and Craft Club</option>
                            <option value="Drama"  data-icon="../Assets/img/drama.png" class="circle">Drama Club</option>
                            <option value="Music and Dance"  data-icon="../Assets/img/dancer.png" class="circle">Music and Dance Club</option>
                            <option value="Vikasa"  data-icon="../Assets/img/vikasa.png" class="circle">Vikasa Club</option>
                            <option value="Writers"  data-icon="../Assets/img/pen.png" class="circle">Writers' Club</option>
                            <option value="Samvedena"  data-icon="../Assets/img/samvedena.png" class="circle">SAMVEDENA Club</option>  
                            <option value="Science on Street"  data-icon="../Assets/img/science.png" class="circle">Science on Street Club</option>  
                            <option value="Indoor games"  data-icon="../Assets/img/indoor.png" class="circle">Indoor Games Club</option>  
                            <option value="Outdoor games"  data-icon="../Assets/img/pikachu.png" class="circle">Outdoor Games Club</option>  
                       </select>
                  <label for="club1">Preference 1</label>
                  <div class="small-txt gray-text" id="info" hidden><p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p></div>
            </div>



            <div class="input-field col s12">
                      <select name="club2" id="club2" onchange="myFunction()" required>
                            <option value="" disabled selected>Choose your Preference</option>
                            <option value="Astronomy"  data-icon="../Assets/img/technology-1.png" class="circle" >Astronomy Club</option>
                            <option value="Design"  data-icon="../Assets/img/design-tool.png" class="circle">Design Team</option>
                            <option value="Art and Craft"  data-icon="../Assets/img/palette.png" class="circle">Art and Craft Club</option>
                            <option value="Drama"  data-icon="../Assets/img/drama.png" class="circle">Drama Club</option>
                            <option value="Music and Dance"  data-icon="../Assets/img/dancer.png" class="circle">Music and Dance Club</option>
                            <option value="Vikasa"  data-icon="../Assets/img/vikasa.png" class="circle">Vikasa Club</option>
                            <option value="Writers"  data-icon="../Assets/img/pen.png" class="circle">Writers' Club</option>
                            <option value="Samvedena"  data-icon="../Assets/img/samvedena.png" class="circle">SAMVEDENA Club</option>  
                            <option value="Science on Street"  data-icon="../Assets/img/science.png" class="circle">Science on Street Club</option>  
                            <option value="Indoor games"  data-icon="../Assets/img/indoor.png" class="circle">Indoor Games Club</option>  
                            <option value="Outdoor games"  data-icon="../Assets/img/pikachu.png" class="circle">Outdoor Games Club</option>  
                       </select>
                  <label for="club2">Preference 2</label>
                  <div class="small-txt gray-text" id="info2" hidden><p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p></div>

            </div>


            <div class="input-field col s12" style="margin-bottom: 50px;">
            <hr class="teal-line">
              <h6 style="padding-top: 15px;" class="edit-head">Member Of</h6>
 		          <p class="col m4 s6">
 		            <input type="checkbox" name="SAT" id="SAT" <?php if ($arr['sat'] == '1') echo "checked='checked'"; ?> />
 		            <label for="SAT">SAT</label>
 		          </p>

 		          <p class="col m4 s6">
 		            <input type="checkbox" name="TNP" id="TNP" <?php if ($arr['tnp'] == '1') echo "checked='checked'"; ?> />
 		            <label for="TNP">TNP</label>
 		          </p>

 		          <p class="col m4 s6">
 		            <input type="checkbox" name="BAJA" id="BAJA" <?php if ($arr['baja'] == '1') echo "checked='checked'"; ?> />
 		            <label for="BAJA">BAJA</label>
 		          </p>

              <p class="col m4 s6">
                <input type="checkbox" name="ROBOCON" id="ROBOCON" <?php if ($arr['robocon'] == '1') echo "checked='checked'"; ?> />
                <label for="ROBOCON">ROBOCON</label>
              </p>

 		          <p class="col m4 s6">
 		            <input type="checkbox" name="Supra" id="Supra" <?php if ($arr['supra'] == '1') echo "checked='checked'"; ?> />
 		            <label for="Supra">SUPRA</label>
 		          </p>

              <p class="col m4 s6">
                <input type="checkbox" name="E-CELL" id="E-CELL" <?php if ($arr['ecell'] == '1') echo "checked='checked'"; ?> />
                <label for="E-CELL">E-CELL</label>
              </p>


              <p class="col m4 s6">
                <input type="checkbox" name="firodia" id="firodia" <?php if ($arr['firodia'] == '1') echo "checked='checked'"; ?> />
                <label for="firodia">Firodiya</label>
              </p>

 		          <p class="col m4 s6">
 		            <input type="checkbox" name="NONE" id="NONE"  />
 		            <label for="NONE">NONE</label>
 		          </p>

 		        </div>

<!--  		        <div class="input-field col s12" style="margin-bottom: 50px;">
 		          <input  required="requried" id="future" name="future" type="text" value="<?php echo $arruser['future'] ?>" class="future">
 		          <label for="future">After GECA (PG / Job..) </label>
 		        </div> -->

            <div class="input-field col s12">
                <select multiple required required="requried" id="future" name="future[]" class="future">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="GATE">GATE </option>
                  <option value="CAT">CAT </option>
                  <option value="UPSC / MPSC">UPSC / MPSC </option>
                  <option value="Masters">Masters </option>
                  <option value="Job">Job </option>
                  <option value="Bussiness">Bussiness </option>
                  <option value="Other">Other </option>
                  <!-- <option value="Option">Option </option> -->
                </select>
                <label for="future">After GECA </label>
            </div>

            <div class="input-field col s12" style="margin-bottom: 30px;">
              <input id="sugg" name="sugg" type="text" value="<?php echo $arruser['sugg'] ?>" class="sugg">
              <label for="sugg">Suggestions regarding anything</label>
            </div>

            <hr class="header-holder">


 			<div class="center update-bultton">

 		        <button disabled class="btn waves-effect waves-light" id ="btn-dis" type="submit" name="update" style="
 			    margin-top: 50px;">UPDATE
 		        </button>
 			</div>


 		      </div>
 	    </form>
 	</div>
 </div>
 <hr class="header-holder">

 <!-- Modal Structure -->
 <div id="modal1" class="modal bottom-sheet">
   <div class="modal-content">
     <h4 class="center" style="color: #E57373;">Just a Sec!</h4>
     <p class="center gray"> Good at something, huh? then you gonna need us. Let us know, we'll take you to a whole new level. Please fill this carefully, your support will change our college... We are still working hard to serve you more.</p>
   </div>
   <div class="modal-footer center">
     <a href="#!" class=" modal-action modal-close waves-effect waves-light btn-flat center">I UNDERSTAND, TAKE ME IN</a>
   </div>
 </div>

 <footer class="page-footer white">
   <div class="container">
     <div class="row">
       <div class="col l6 s12">
         <h5 class="black-text main-footer">The Student Council</h5>          
         <p class="black-text footer-geca">Goverment College of Engineering, Aurangabad<br/>2016-17</p>
         <p class="black-text text-lighten-4">&copy; All Rights Reserved  </p>
       </div>
       <div class="col l6 s12 center footer-links">
         <h5 class="black-text"> </h5>          
         <ul>
             <p>A Concept of <b class="gray">Nikhil Badave</b>, Cultural Secretary </p>           
         </ul>
       </div>
     </div>
   </div>
   <div class="footer-copyright">
     <div class="container center">
       <p class="black-text"><i class="material-icons">code</i>with<i class="material-icons" style="color: #f44336">favorite</i>by <span class="ftr"><a class="ftr" href="https://github.com/piratedvirus">Saurabh Kulkarni</a> </span>, SE CSE</p>

     </div>
   </div>
 </footer>



 <script src="../Assets/js/materialize.min.js"></script>
 <script src="../Assets/js/init.js"></script>
 <script src="../Assets/js/club.js"></script>

 <script>

 $(document).ready(function(){
  $('select').material_select();
  $('#modal1').openModal();

 });

var socialCheck;

 $('#socialchk').click(function() {
   socialCheck = 'clicked';
 });

function showOthertech(){
  $('.othertech').css('display','block');
}

function showOthercult(){
  $('.othercult').css('display','block');
}

function showOthersports(){
  $('.othersports').css('display','block');
}

function showOtherother(){
  $('.otherother').css('display','block');
}

 function displayToast(){
  var crosscheck = socialCheck;
  if( crosscheck != 'clicked'){
    Materialize.toast('Seems like you forget something ! There is more out there !', 2500,'rounded',function(){
      // alert('Your toast was dismissed');
      window.location = "#socialchk";
    });
  }
 }

   var options = [
     {selector: '.push', offset: 950, callback: function(el) {
         displayToast();

     } }, 

   ];

   Materialize.scrollFire(options);
 </script>




 </body>
 </html>

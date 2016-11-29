  <!DOCTYPE html(lang='en')>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
   <title>Student Council</title>
 </head>
 <body>

 <nav id="profile-menu" class="trans-menu">
     <div class="nav-wrapper">

       <ul id="slide-out" class="side-nav">
           <li><div class="userView">
             <img class="background" src="../Assets/img/2.jpg">
             <a href="#"><img class="circle" src="../Assets/img/user.png"></a>
             <a href="#"><span  class="black-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
             <a href="#"><span class="black-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
           </div></li>
           <li><a href="#!"><img class="slideicon" src="../Assets/img/eye.png"  alt="">View Profile</a></li>
           <li><a href="Core/edit.php"><img class="slideicon" src="../Assets/img/editpro.png"  alt="">Edit Profile</a></li>
           <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
           <li><div class="divider"></div></li>

           <li><a href="../default.html"><b> STUDENT COUNCIL</b></a></li>
           <li><a href="../default.html#team-link">Team</a></li>
           <li><a href="../default.html#contact-link">Contact Us</a></li>

       </ul>

       <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
       <i class="material-icons">menu</i></a>

       <a href="http://geca.ac.in" target="_blank" class="brand-logo center downlift"><img src="../Assets/img/final_small.png"></a>

       <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="../logout.php?logout">Log out</a></li>
         <li><a href="default.html#team-link">Team</a></li>
         <li><a href="default.html#contact-link">Contact Us</a></li>
       </ul>


     </div>
   </nav>

 <div class="container" style="padding-top: 50px;">
 	<div class="row">
 	    <form name='form' id="updateform" method="POST" action="testing.php" class="col s12">

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

            <div class="input-field col m6 s12">
              <label for="birthdate">Birth Date</label>
              <input requried required="requried" id="birthdate" type="date" name="dob" value="<?php echo $_SESSION['stud_dob'] ?>" class="datepicker">
            </div>



            <div class="input-field col s12 m6">
              <select required  required="requried" id="icon_prefix" type="text" name="year" class="year">
                <option value="" disabled selected="selected" >Select Year</option>
                <option value="First Year" >First Year</option>
                <option value="Second Year" >Second Year</option>
                <option value="Third Year" >Third Year</option>
                <option value="Final Year" >Final Year</option>
              </select>
              <label for="">Year of Study</label>

            </div>


 		        <div class="input-field col m6 s12">
 		          <input  required="requried" id="icon_prefix" type="text" name="state" value="<?php echo $_SESSION['stud_state'] ?>" class="state">
 		          <label for="icon_prefix">State</label>
 		        </div>



 		                <div class="row ">

 		        	          <div class="col s12">
 		        		            <ul class="tabs tab-holder" style="width: 100%;margin: 60px 0px 20px 0px;">
 		        		              <li class="tab col s3"><a href="#technical">Technical</a></li>
 		        		              <li class="tab col s3"><a href="#Social">Cultural</a></li>
 		        		              <li class="tab col s3"><a href="#Sports">Sports</a></li>
 		        		              <li class="tab col s3"><a href="#Managment">other</a></li>
 		        		            </ul>
 		        	          </div>

 		        	          <div id="technical" class="col s12">
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
 		        	          	      <label for="Rassberry Pie">Rassberry Pie</label>
 		        	          	    </p>

 		        					<div class="input-field col s12">
 		        					  <input id="high-tech" name="high_tech" type="text" length="300" value="<?php echo $arr['hightech'] ?>" maxlength="300" class="high-tech">
 		        					  <label for="high-tech">Achivements in Technical</label>
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

 		        				    <div class="input-field col s12">
 		        				      <input id="high-cult" name="high_cult" type="text" length="300" value="<?php echo $arr['highcult'] ?>" maxlength="300" class="high-cult">
 		        				      <label for="high-cult">Achivements in Cultural</label>
 		        				    </div>

 		        	           </div>


 		        	          <div id="Sports" class="col s12">
 		        		          	<p class="col m4 s6">
 		        		          	  <input type="checkbox" checked="checked" name="Cricket" id="Cricket" <?php if ($arr['cricket'] == '1') echo "checked='checked'"; ?> />
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

 		        		          	<div class="input-field col s12">
 		        		          	  <input id="high-sport" name="high_sports" type="text" length="300" value="<?php echo $arr['highsports'] ?>" maxlength="300" class="high-sport">
 		        		          	  <label for="high-sport">Achivements in Sports</label>
 		        		          	</div>

 		        	         </div>

 		        	          <div id="Managment" class="col s12">
 		        		          	<p class="col m4 s6">
 		        		          	  <input type="checkbox" name="Leader" id="Leader" <?php if ($arr['Leader'] == '1') echo "checked='checked'"; ?> />
 		        		          	  <label for="Leader">Leader</label>
 		        		          	</p>
 		        		          	<p class="col m4 s6">
 		        		          	  <input type="checkbox" name="Member" id="Member" <?php if ($arr['Member'] == '1') echo "checked='checked'"; ?> />
 		        		          	  <label for="Member">Member</label>
 		        		          	</p>
 		        	          </div>

 		                </div>
 		        <div class="input-field col s12" style="margin-bottom: 50px;">
 		          <h6 class="edit-head">Member Of</h6>
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
 		            <input type="checkbox" name="NONE" id="NONE"  />
 		            <label for="NONE">NONE</label>
 		          </p>

 		        </div>

<!--  		        <div class="input-field col s12" style="margin-bottom: 50px;">
 		          <input  required="requried" id="future" name="future" type="text" value="<?php echo $arruser['future'] ?>" class="future">
 		          <label for="future">After GECA (PG / Job..) </label>
 		        </div> -->

            <div class="input-field col s12">
                <select multiple required="requried" id="future" name="future[]" class="future">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="GATE">GATE </option>
                  <option value="CAT">CAT </option>
                  <option value="UPSC / MPSC">UPSC / MPSC </option>
                  <option value="Masters">Masters </option>
                  <option value="Job">Job </option>
                  <option value="Bussiness">Bussiness </option>
                  <option value="Other">Other </option>
                  <option value="Option">Option </option>
                </select>
                <label for="future">After GECA (PG / Job..) </label>
            </div>

            <div class="input-field col s12" style="margin-bottom: 30px;">
              <input id="sugg" name="sugg" type="text" value="<?php echo $arruser['sugg'] ?>" class="sugg">
              <label for="sugg">Suggestions</label>
            </div>

            <hr class="header-holder">
      <div class="input-feild">
              <h6 class="edit-head" style="padding-bottom: 30px">I want to become part of</h6>

              <div class="col m2 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Priority ">                    

                <input type="number" name='rank_wings' class="center" value="<?php echo $arr['rankwings'] ?>" id="rank"  min="1" max="3" placeholder="Rank" maxlength="1" >
              </div>

              <div class="col m2 s6 event center teal-text">
                <h6 style="position: relative;top: 15px;">WINGS</h6>
              </div>

              <div class="col m8 s12">
                <input type="text" name="why_wings" class="details-rank" value="<?php echo $arr['whywing'] ?>" placeholder="Why you prefer Wings ?">
              </div>

<!-- ----------------------------------------------------------------------------------------------------------------------------------------------- -->

              <div class="col m2 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip=" Priority ">
                <input type="number" name='rank_gahter' class="center" id="rank" value="<?php echo $arr['rankgather'] ?>" min="1" max="3" placeholder="Rank" maxlength="1" >
              </div>

              <div class="col m2 s6 event center teal-text">
                <h6 style="position: relative;top: 15px;">GATHERING</h6>
              </div>

              <div class="col m8 s12">
                <input type="text" name="why_gather" class="details-rank" id="ranker" value="<?php echo $arr['whygather'] ?>" placeholder="Why you prefer GATHERING ?">
              </div>

<!-- ----------------------------------------------------------------------------------------------------------------------------------------------- -->

              <div class="col m2 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Priority ">
                <input type="number" name='rank_sport' class="center" id="rank" min="1" value="<?php echo $arr['ranksport'] ?>" max="3" placeholder="Rank" maxlength="1" >
              </div>

              <div class="col m2 s6 event center teal-text">
                <h6 style="position: relative;top: 15px;">SPORTS WEEK</h6>
              </div>

              <div class="col m8 s12">
                <input type="text" name="why_sport" class="details-rank" id="ranker" value="<?php echo $arr['whysport'] ?>" placeholder="Why you prefer SPORTS WEEK ?">
              </div>

<!-- ----------------------------------------------------------------------------------------------------------------------------------------------- -->

        </div>


           


 			<div class="center update-button">

 		        <button class="btn waves-effect waves-light" type="submit" name="update" style="
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
     <h4 class="center gray">Just a Sec !</h4>
     <p class="center gray"> Please fill this carefully, your support is gonna change clg... We are still working hard to add more functionlity to this site... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, fugit.</p>
   </div>
   <div class="modal-footer">
     <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
   </div>
 </div>

 <footer class="page-footer white">
   <div class="container">
     <div class="row">
       <div class="col l6 s12">
         <h5 class="black-text main-footer">The Student Counsil</h5>          
         <p class="black-text footer-geca">Goverment College Of Engeering, Aurangabad<br/>2016-17</p>
         <p class="black-text text-lighten-4">&copy; All Rights Reserved  </p>
       </div>
       <div class="col l6 s12 center footer-links">
         <h5 class="black-text"> </h5>          
         <ul>
             <p>A Concept of <b class="gray">Nikhil Badave</b>, Cultural Secretory </p>           
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

 <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
 <script>
   $(document).ready(function(){
    $('select').material_select();
    $('#modal1').openModal();

   });
 </script>
 <script src="../Assets/js/materialize.js"></script>
 <script src="../Assets/js/init.js"></script>

 </body>
 </html>

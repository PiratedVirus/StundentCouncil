<?php require_once 'Core/new.php'; ?>
<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

   <title>Sign Up</title>

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
   <link rel="stylesheet" href="Assets/css/base.css">
   <script src="Assets/js/jquery-1.11.3-jquery.min.js"></script>


   <script type="text/javascript">
     $(document).ready(function()
     {    
      $("#new-enroll").keyup(function()
      {   
        var name = $(this).val(); 
        
        if(name.length > 10)
        {   
          $(".errorTxt0").html('checking...');
          
          $.ajax({
            
            type : 'POST',
            url  : 'core/enrollcheck.php',
            data : $(this).serialize(),
            success : function(data)
                  {
                       $(".errorTxt0").html(data);
                    }
            });
            return false;
          
        }
        else
        {
          $(".errorTxt0").html('');
        }
      });
      
     });
   </script>
</head>

<style type="text/css">
  .input-field div.error,.errorTxt0{
    position: relative;
    top: -1rem;
    left: 0rem;
    font-size: 0.8rem;
    color:#FF4081;
    -webkit-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%);
  }
  .input-field label.active{
      width:100%;
  }
  .left-alert input[type=text] + label:after, 
  .left-alert input[type=password] + label:after, 
  .left-alert input[type=email] + label:after, 
  .left-alert input[type=url] + label:after, 
  .left-alert input[type=time] + label:after,
  .left-alert input[type=date] + label:after, 
  .left-alert input[type=datetime-local] + label:after, 
  .left-alert input[type=tel] + label:after, 
  .left-alert input[type=number] + label:after, 
  .left-alert input[type=search] + label:after, 
  .left-alert textarea.materialize-textarea + label:after{
      left:0px;
  }
  .right-alert input[type=text] + label:after, 
  .right-alert input[type=password] + label:after, 
  .right-alert input[type=email] + label:after, 
  .right-alert input[type=url] + label:after, 
  .right-alert input[type=time] + label:after,
  .right-alert input[type=date] + label:after, 
  .right-alert input[type=datetime-local] + label:after, 
  .right-alert input[type=tel] + label:after, 
  .right-alert input[type=number] + label:after, 
  .right-alert input[type=search] + label:after, 
  .right-alert textarea.materialize-textarea + label:after{
      right:70px;
  }
  </style>

<body>

<nav id="subpages">
      <div class="nav-wrapper">
      <a href="default.html" class="brand-logo hide-on-med-and-down">Student Council</a><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <a href="http://geca.ac.in" target="_blank" class="brand-logo center"><img src="Assets/img/final_small.png"></a>

              <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Log In</a></li>
                <li><a href="default.html#team-link">Team</a></li>
                <li><a href="default.html#contact-link">Contact Us</a></li>
              </ul>
              <ul id="mobile-demo" class="side-nav">
              <li><a href="index.php">Log In</a></li>
              <li><a href="default.html#team-link">Team</a></li>
              <li><a href="default.html#contact-link">Contact Us</a></li>
              </ul>
            </div>
    </nav>
  
  

<div class="container new-form">
 <div class="row">
    <form class="col m6 s12 offset-m3 formValidate" id="formValidate" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

     <div class="col s12">


            <?php if ( isset($errMSG) ) { ?>

            <div class="form-group" style="color: green;">
                <div class="alert<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
                    <span class="info-sign"></span> <?php echo $errMSG; ?>
                </div>
            </div>
                <?php } ?>


            <div class="input-field">
                <input type="text" name="enroll" id="new-enroll" data-error=".errorTxt0" length="11" maxlength="11" value="<?php echo $enroll ?>" />
                <label for="new-enroll">Enrollment Number</label>
                <div class="errorTxt0"></div>
            </div>


            <div class="input-field">
                <input type="text" name="uname" id="new-name" style="text-transform: capitalize;" data-error=".errorTxt1" maxlength="50" value="<?php echo $name ?>" />
                <label for="uname">Name</label>
                <div class="errorTxt1"></div>
            </div>


            <div class="input-field">
                <input type="email" name="cemail" id="new-email"  value="<?php echo $email ?>" />
                <label for="new-email" data-error = "<?php echo $idError; ?>">Email</label>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>


            <div class="input-field">
              <label for="password">Password</label>
              <input  id="password" type="password" name="password" data-error=".errorTxt3">
              <div class="errorTxt3"></div>
            </div>

            <div class="input-field">
              <label for="cpassword">Confirm Password</label>
              <input id="cpassword" type="password" name="cpassword" data-error=".errorTxt4">
              <div class="errorTxt4"></div>
            </div>


            <div class="input-field">
                <input type="text" name="skill" id="new-branch" class="branch" value="<?php echo $skill ?>" />
                <label for="new-branch" data-error = "<?php echo $idError; ?>">Branch</label>
                <span class="text-danger"><?php echo $skillError; ?></span>
            </div>

            <div class="input-field gender">
                <span id="male-radio">
                    <input type="radio" name="gender" value="Male" class="with-gap" id="male" />
                    <label for="male">Male</label>
                </span>
                <span>
                    <input type="radio" name="gender" value="Female" class="with-gap" id="female" />
                    <label for="female">Female</label>
                </span>

            </div>



             <button type="submit" class="btn waves-effect waves-light new-submit" name="btn-signup">Sign Up</button>
        </div>
    </form>
    </div>
</div>
<div class="center-align">
     <a href="index.php">Log in here</a>
</div>

<footer class="page-footer white">

  <div class="footer-copyright">
    <div class="container center">
      <p class="black-text"><i class="material-icons">code</i>with<i class="material-icons" style="color: #f44336">favorite</i>by <span class="ftr"><a class="ftr" href="https://github.com/piratedvirus">Saurabh Kulkarni</a> </span>, SE CSE</p>
    </div>
  </div>
</footer>

<script src="Assets/js/materialize.js"></script>
<script src="Assets/js/init.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>


<script type="text/javascript">
$("#formValidate").validate({
    rules: {
        uname: {
            required: true,
            minlength: 5
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
   equalTo: "#password"
 },
 curl: {
            required: true,
            url:true
        },
        crole:"required",
        ccomment: {
   required: true,
   minlength: 15
        },
        cgender:"required",
 cagree:"required",
    },
    //For custom messages
    messages: {
        uname:{
            required: "Enter a username",
            minlength: "Minimum of 5 characters"
        },
        curl: "Enter your website",
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
</script>

</body>
</html>
<?php ob_end_flush(); ?>

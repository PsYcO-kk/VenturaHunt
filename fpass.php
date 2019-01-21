<?php
    error_reporting(0);
    include_once 'config.php';
    include('popup-contactform.php');
    try{
        session_start();
    }
    catch(Exception $e)
    {
        
    }

    if(isset($_SESSION['username'])) {
        header("location: home.php");
    }

    $error = false;

    if ( isset($_POST['btn-signup']) ) {
  
        // clean user inputs to prevent sql injections 
        $email = trim($_POST['email']);
        $email = strip_tags($email);
        $email = htmlspecialchars($email);
  
        $username = trim($_POST['username']);
        $username = strip_tags($username);
        $username = htmlspecialchars($username);
  
        $mobileno = trim($_POST['mobileno']);
        $mobileno = strip_tags($mobileno);
        $mobileno = htmlspecialchars($mobileno);
  
        // basic username validation
        if (empty($username)) {
            $error = true;
            $usernameError = "Please enter your full name.";
        } else if (strlen($username) < 3) {
            $error = true;
            $usernameError = "Name must have atleat 3 characters.";
        } else if (!preg_match("/^[a-zA-Z ]+$/",$username)) {
            $error = true;
            $usernameError = "Name must contain alphabets and space.";
        }
    
        //basic mob validation
        if(!preg_match("/^[1-9][0-9]*$/", $mobileno)) {
            $mobilenoError="Please enter a valid number";
        }
	  
        //basic email validation
        if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
            $error = true;
            $emailError = "Please enter valid email address.";
        } 
   
        // if there's no error, continue to signup
        if( !$error ) { 
            $hash = md5( mt_rand() );
            $password = hash('sha256', $password); // password hashing using SHA256
            $sel=mysqli_query($dbcon, "select * from profile where username='$username' ");
            $arr=mysqli_fetch_array($sel);
            if(($arr['email']==$email) and $arr['mobileno']==$mobileno and $arr['username']=$username){
                $res1 = mysqli_query($dbcon, "update login set hash='$hash' where username='$username'");
            }
    
            if ($res1) {
                $errTyp = "success";
   
                $to      = $email; // Send email to our user
                $subject = 'Password Change Request'; // Give the email a subject 
                $message =  '
                    <html>
                        <body style="background-color:#f1f1f1;">
                            <h2 style=" border-radius:2px;margin-top:6%;text-align:center; color:#191970;margin-bottom:-1.2%; padding-bottom:5px;padding-top:5px;background-color:#6495ED;margin-left:20%;margin-right:20%;">VenturaHunt 2.0</h2>
                            <div style="background-color:#98FB98; margin-left:20%;margin-right:20%; border-radius:4px;">
                                <p style="font-family: \'Abel\', sans-serif;font-size:15px;   background-color:#98FB98; margin-left:2%;margin-right:2%;padding-top:12px; padding-left:1.6%;">
                                    <br/>Hi <b><i>'.$username.',</b></i><br/><br/>
                                </p>
                                <p style="font-family: \'Abel\', sans-serif;font-size:15px;background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
                                    This email has been send to you in response of your password change request.<br/>
                                </p>
                                <p style="font-family: \'Abel\', sans-serif;font-size:15px; background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
                                    Please verify your request by pressing the button below.<br/><br/>
                                </p>
                                <p style="font-family: \'Abel\', sans-serif;font-size:15px; border-radius:2px; background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
                                    <a href="http://venturahunt.000webhostapp.com/cpassword.php?username='.$username.'&hash='.$hash.'" style="margin-left:35%;  padding: 4px 10px;background: #6495ED; border: solid 1px #20538D; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);  text-decoration: none;color: #FFF; border-radius:4px;">Confirm Your Request</a><br/><br/>
                                </p>
                                <p style="font-family: \'Abel\', sans-serif;font-size:15px;  background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
                                    Or, just open this link to change your password:<br/>
                                </p>
                                <p style="font-family: \'Abel\', sans-serif;font-size:15px;  background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
                                    http://venturahunt.000webhostapp.com/cpassword.php?username='.$username.'&hash='.$hash.'
                                </p>
                                <p style="padding-bottom:3px; font-family: \'Abel\', sans-serif;font-size:15px;  background-color:#98FB98;padding-left:1.6%; margin-left:2%;margin-right:2%;">
                                    <br/><br/>Regards,<br/>
                                </p>
                                <p style="font-family: \'Abel\', sans-serif;font-size:15px;  background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
                                    Team VenturaHunt<br/>
                                </p>
                            </div>
                            <p style="margin-top:2%;background-color:#F5DEB3; border-radius:2px;padding-left:1.6%; font-family: \'Abel\', sans-serif;font-size:12px;  margin-left:20%;margin-right:20%;">
                                Contact us in case you have not requested for password change. 
                            </p>
                        </body>
                    </html>
                '; // Our message above including the link
             
                $headers = 'From:no-reply@venturahunt.com' . "\r\n"; // Set from headers
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                mail($to, $subject, $message, $headers); // Send our email
	
                $errMSG = "Your Password Change Request has been submitted Successfully, Please verify your request by opening the URL send to your EMAIL ID .";
	
                unset($username);
                unset($email);
   
            } else {
                $errTyp = "danger";
                $errMSG = "Something went wrong, try again later..."; 
            } 
    
        }
    
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Account Recovery</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/sl-slide.css">
    <link rel="stylesheet" href="assets/css/logo.css">

    <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script> 
        function enableBtn(){
            document.getElementById("submit").disabled = false;
        }
   </script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    <script src="https://use.fontawesome.com/759b0dfb0d.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Abel|PT+Serif|Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Dancing+Script|Josefin+Slab:600" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/popup-contact.css">

   <style type="text/css">
        .caption-style-1{
            list-style-type: none;
            margin: 0px;
            padding: 0px;
        }

        .caption-style-1 li{
            float: left;
            padding: 0px;
            position: relative;
            overflow: hidden;
        }

        .caption-style-1 li:hover .caption{
            opacity: 1;

        }

        .caption-style-1 img{
            margin: 0px;
            padding: 0px;
            float: left;
            z-index: 4;
        }

        .caption-style-1 .caption{
            cursor: pointer;
            position: absolute;
            opacity: 0;
            -webkit-transition:all 0.45s ease-in-out;
            -moz-transition:all 0.45s ease-in-out;
            -o-transition:all 0.45s ease-in-out;
            -ms-transition:all 0.45s ease-in-out;
            transition:all 0.45s ease-in-out;

        }

        .caption-style-1 .blur{
            background-color: rgba(0,0,0,0.65);
            height: 160px;
            width: 160px;
            -moz-border-radius: 80px; -webkit-border-radius: 80px; border-radius: 80px;
            z-index: 5;
            position: absolute;
        }

        .caption-style-1 .caption-text h1{
            text-transform: uppercase;
            font-size: 24px;
        }

        .caption-style-1 .caption-text{
            z-index: 10;
            color: #fff;
            position: absolute;
            width: 180px;
            height: 180px;
            text-align: center;
            top:60px;
        }

        /** Nav Menu */
        ul.nav-menu{
            padding: 0px;
            margin: 0px;
            list-style-type: none;
            margin: 0px auto;
        }

        ul.nav-menu li{
            display: inline;
            margin-right: 10px;
            padding:10px;
            border: 1px solid #ddd;
        }

        ul.nav-menu li a{
            color: #eee;
            text-decoration: none;
            text-transform: uppercase;
        }

        ul.nav-menu li a:hover, ul.nav-menu li a.active{
            color: #2c3e50;
        } 

        /** content **/
        .content{
            margin-top: 10px;
            margin-left: 10px;
            width: 0px;
        }

        .content h1, .content h2{
            font-family: "Source Sans Pro",sans-serif;
            color: #ecf0f1;
            padding: 0px;
            margin: 0px;
            font-weight: normal;
        }

        .content h1{
            font-weight: 900;
            font-size: 64px;
        }

        .content h2{
            font-size:26px;
        }

        .content p{
            color: #ecf0f1;
            font-family: "Lato";
            line-height: 28px;
            font-size: 15px;
            padding-top: 50px;
        }

        p.credit{
            padding-top: 10px;
            font-size: 12px;
        }

        p a{
            color: #ecf0f1;
        }
	</style>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">

    <!--Header navbar-->
    <nav class="navbar navbar-inverse navbar-fixed-top  " >
	    <div class="navbar-inner ">
			<a class="navbar-brand  router-link-active" href="">
                <div class="cd-logo header-footer-sprite"  style="height:90px; width:120px;">
                    <img src="images/logo.png" class="img-rounded img-responsive" style="margin-top:5px;width:120px;height:90px;"/>
                </div>
            </a>

            <div class="container" style="margin-top:-98px;">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
                <div class="nav-collapse collapse pull-right" style="font-family: 'Abel', sans-serif;font-size:15px; ">
                    <ul class="nav">
                        <li class="active" style="padding:8px; font-weight:;"><a href="index.php"><i class="fa fa-home "></i></a></li>
                        <li  style="padding:8px; font-weight:bold;"><a data-toggle="modal" href="#notification"  ><i class="fa fa-bell"></i></a></li>
                        <li  style="padding:8px; font-weight:;"><a data-toggle="modal" href="#guideline" >Guidelines</a></li>
                        <li class="dropdown"  style="padding:8px; font-weight:;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
								<li><a href="index.php">Login</a></li>
                                <li><a href="register.php">Sign Up</a></li>
								<li class="divider"></li>
								<li><a  href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'>Contact Us</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" href="#privacy">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="login"  style="padding:8px; font-weight:bold;">
                            <a data-toggle="modal" href="#loginForm"><i class="fa fa-sign-in"></i></a>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </nav>
    <!-- /header -->

	<section class="title" style="margin-top:37px;">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Account Recovery</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                        <li class="active">Account Recovery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div id="login-form">
            <form method="post"  class="center" action="fpass.php" autocomplete="off">
                <div class="col-md-12">
                    <div class="form-group">
                        <hr />
                    </div>            

                    <?php
                        if ( isset($errMSG) ) {    
                    ?>
                        <div class="form-group">
                            <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
                                <i class="icon-info-sign"></i>  <?php echo $errMSG; ?>
                            </div>
                        </div>
                    <?php } ?>
                        
                    <div class="form-group ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-secret fa-2x"></i></span>
                            <input type="text" name="username" class="form-control"  style="width:300px;" placeholder="Please Enter Your Username" maxlength="50" value="<?php echo $username ?>" />
                        </div>
                        <?php if(isset($usernameError))  { ?>
                            <span class="alert-box alert"><?php echo $usernameError ?></span>
                        <?php } ?>
                    </div>
            
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa-2x"></i></span>
                            <input type="email" name="email" class="form-control"  style="width:300px;" placeholder="Please Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
                        </div>
                        <?php if(isset($emailError))  { ?>
                            <span class="alert-box alert"><?php echo $emailError ?></span>
                        <?php } ?>
                    </div>

                    <div class="form-group ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-mobile fa-3x"></i></span>&nbsp;&nbsp;
                            <input type="text" name="mobileno" class="form-control"  style="width:300px;" placeholder="Please Enter Your Mobile Number" maxlength="50" value="<?php echo $mobileno ?>" />
                        </div>
                        <?php if(isset($mobilenoError))  { ?>
                            <span class="alert-box alert"><?php echo $mobilenoError ?></span>
                        <?php } ?>
                    </div>			 
			
                    <div style="margin-left:440px;" class="g-recaptcha " data-sitekey="6Le_O4kUAAAAABTjK6hxMYIk8wRCnCnAPXHsHgzQ" data-callback="enableBtn"></div> 

                    <div class="form-group">
                        <hr />
                    </div>

                    <div class="control-group">
                        <!-- Button -->
                        <button type="submit" class="btn btn-success btn-large btn-block-inline" maxlength="50" id="submit" name="btn-signup" disabled>Submit</button>
                    </div>
          
                    <div class="form-group">
                        <hr />
                    </div>
              
                    <div class="form-group">
                        <h4>Or try,</h4><a href="index.php"> Signing in Here...</a>
                    </div>
        
                </div>
            </form>
        </div> 
    </div>

    <!--Bottom-->
    <?php include 'bottom.php'; ?>
    <!--/Bottom-->

    <!--Footer-->
    <?php include 'footer.php'; ?>
    <!--/Footer-->


    <!--  Login form -->
    <div class="modal hide fade in" id="loginForm" aria-hidden="false">
        <div class="modal-header">
            <i class="icon-remove"style=" background-color:#FF6347;" data-dismiss="modal" aria-hidden="true"></i>
            <h4>Login Form</h4>
        </div>
        <!--Modal Body-->
        <div class="modal-body">
            <form class="form-inline" action="login.php" method="post" id="btn-login">
		 
                <input type="text" name="username" class="input-small" placeholder="Username" required>
			
                <input type="password" name="password" class="input-small" placeholder="Password"required>
                <label class="checkbox">
                    <input type="checkbox"> Remember me
                </label>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <a href="#">Forgot your password?</a>
        </div>
        <!--/Modal Body-->
    </div>
    <!--  /Login form -->

    <!-- Guidelines -->
    <?php include 'guidelines.php'; ?>
    <!-- /Guidelines -->

    <!-- Privacy Policy -->
    <?php include 'privacy-policy.php'; ?>
    <!-- /Privacy Policy -->

    <!--  Notification -->
    <div class="modal hide fade in" id="notification" aria-hidden="false">
        <div class="modal-header">
            <i class="icon-remove" style=" background-color:#FF6347;"data-dismiss="modal" aria-hidden="true"></i>
            <h3 style="margin-left:150px; " class="" >Notifications</h3>
        </div>
        <!--Modal Body-->
        <div class="span4"></div>
        <div class="modal-body well span4">
        <?php
            $notifications = mysqli_query($dbcon, 'select * from notifications');
        ?>
            <!-- Leaderboard Page Contents -->
            <div class="row " style="margin-left:10px;"id="leaderboardContent">
                <div class="ten column centered">	
                    <table class="twelve">
                        <thead>
                            <tr class="title" >
                                <th>Date</th>
                                <th class="pull-left" style="margin-left:-20px;">|</th>
                                <th class="pull-left">Notification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($notifications)) { ?>
                                <tr>
                                    <td style="width: 7em;"><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['notification'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!--/Modal Body-->
    </div>
    <!--  /Notification -->

    <script src="assets/js/vendor/jquery-1.9.1.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="text/javascript"> 
        //Disable right click script 
        var message="Sorry, right-click has been disabled"; 
        function clickIE() {
            if (document.all) {
                (message);
                return false;
            }
        } 
        function clickNS(e) {
            if (document.layers||(document.getElementById&&!document.all)) { 
                if (e.which==2||e.which==3) {
                    (message);
                    return false;
                }
            }
        } 
        if (document.layers) {
            document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;
        } 
        else{
            document.onmouseup=clickNS;document.oncontextmenu=clickIE;
        } 
        document.oncontextmenu=new Function("return false") 
    </script>
  
    <script type="text/javascript">
        var LHCChatOptions = {};
        LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500,domain:'localhost/t/'};
        (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
        var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
        po.src = '//localhost/lhc_web/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>

    <script>
        var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

    <?php require_once('contactform-code.php'); ?>
	
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-84943216-1', 'auto');
        ga('send', 'pageview');
    </script>

</body>
</html>
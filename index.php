<?php 
    include('config.php'); 
    include('popup-contactform.php');
	error_reporting(0);
	try{
        session_start();
        if(isset($_SESSION['username'])) {
            header("location: home.php");
        }
	}
	catch(Exception $e)
	{
	}
	if(isset($_SESSION['loginerror']))
    {
        $loginerror=$_SESSION['loginerror'];
        unset($_SESSION['loginerror']);
        session_destroy();
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
    <title>VenturaHunt 2.0 || HuntThePiece</title>
    <meta name="description" content="VenturaHunt 2.0 is an online Treasure Hunt, a cryptic event organised by SIAM (Society for Industrial and Applied Mathematics) IIT(ISM) Student Chapter.">
	<meta name="keywords" content="VenturaHunt, Venturahunt 2.0, Venturahunt IIT DHANBAD, treasure hunt, online treasure hunt, IIT(ISM) dhanbad, Indian Institute of Technology Dhanbad, ISM Dhanbad, IIT Dhanbad, Ventura Hunt, Game, Contest">
    <meta name="viewport" content="width=device-width">
    
    <!-- stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">

    <script src="https://use.fontawesome.com/759b0dfb0d.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

    <script>
        $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");;
        });
	</script>

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/sl-slide.css">
    <link rel="stylesheet" href="assets/css/logo.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|PT+Serif|Slabo+27px" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Dancing+Script|Josefin+Slab:600" rel="stylesheet"> 
    <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- fav and touch icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  <!-- Custom Modernizr for Foundation -->
    <script src="javascripts/foundation/modernizr.foundation.js"></script>

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

        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(images/pre.gif) center no-repeat #fff;
        }

        #cd-timeline {
            position: relative;
            padding: 2em 0;
            margin-top: 2em;
            margin-bottom: 2em;
        }

        #cd-timeline::before {
            /* this is the vertical line */
            content: '';
            position: absolute;
            top: 0;
            height: 100%;
            width: 4px;
            background: #d7e4ed;
            left: 50%;
            margin-left: -2px;
        }

        .cd-container::after {
            content: '';
            display: table;
            clear: both;
        }

        .cd-container {
            width: 90%;
            max-width: 1170px;
            margin: 0 auto;
        }

        .cd-timeline-block:first-child {
            margin-top: 0;
        }

        .cd-timeline-block {
            position: relative;
            margin: 4em 0;
        }

        .cd-timeline-content {
            margin-left: 0;
            padding: 1.6em;
            width: 42%;
            position: relative;
            background: white;
            border-radius: 0.25em;
            padding: 1em;
            box-shadow: 0 3px 0 #d7e4ed;
        }

        .cd-timeline-content .cd-date {
            position: absolute;
            width: 100%;
            left: 122%;
            top: 6px;
            font-size: 16px;
            font-size: 1rem;
        }

        .cd-timeline-block:nth-child(even) .cd-timeline-content .cd-date {
            left: auto;
            right: 122%;
            text-align: right;
        }

        .cd-timeline-block:nth-child(even) .cd-timeline-content {
            float: right;
        }

        .cd-timeline-block:after {
            content: "";
            display: table;
            clear: both;
        }

        .cd-timeline-img {
            width: 60px;
            height: 60px;
            left: 50%;
            margin-left: -30px;
            -webkit-transform: translateZ(0);
            -webkit-backface-visibility: hidden;
        }

        .cd-timeline-img {
            position: absolute;
            top: 0;
            border-radius: 50%;
            box-shadow: 0 0 0 4px white, inset 0 2px 0 rgba(0, 0, 0, 0.08), 0 3px 0 4px rgba(0, 0, 0, 0.05);
            background: #105a8b;
        }

        .cd-timeline-img img,.cd-timeline-img svg {
            display: block;
            width: 24px;
            height: 24px;
            position: relative;
            left: 50%;
            top: 50%;
            margin-left: -12px;
            margin-top: -12px;
            vertical-align: middle;
        }

        .cssanimations .cd-timeline-img.is-hidden,.cssanimations .cd-timeline-content.is-hidden {
            visibility: hidden;
        }

        .cssanimations .cd-timeline-img.bounce-in,.cssanimations .cd-timeline-content.bounce-in {
            visibility: visible;
            animation: cd-bounce-1 0.6s;
        }
        
        @keyframes cd-bounce-1 {
            0% {
                opacity: 0;
                transform: scale(0.5);
            }
            60% {
                opacity: 1;
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        #mobile-view-alert {
            display: none;
        }

        @media screen and (max-width: 979px) {
            #mobile-view-alert {
                display: block;
            }
        }
	</style>

	<link rel="stylesheet" href="assets/css/popup-contact.css">
</head>

<body  onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
    <div class="se-pre-con"></div>
	<div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Page Layout HTML here -->
    
    <h3 id="mobile-view-alert">Switch to Desktop version for better experience.</h3>

    <!--Header navbar-->
    <nav class="navbar navbar-inverse navbar-fixed-top "  >
	    <div class="navbar-inner ">
			<a class="navbar-brand  router-link-active" href="">
                <div class="cd-logo header-footer-sprite" style="height:90px; width:120px;">
					<img src="images/logo.png" class="img-rounded img-responsive" style="margin-top:5px;width:110px;height:90px;"/>
				</div>
			</a>

            <div class="container" style="margin-top:-95px;">
                
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
                <div class="nav-collapse collapse pull-right" style="font-family: 'Abel', sans-serif;font-size:15px; ">
                    <ul class="nav" >
                        <li style="margin-top:10px;margin-left:-450px;color:white;"><a target="blank" href="http://www.iitism.ac.in/">Indian Institute of Technology Dhanbad <i><span style="font-family: 'Josefin Slab', serif;">Presents</span></i></a></li>
                        <li class="active" style="padding:2px; font-weight:bold;"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li  style="padding:2px; font-weight:bold;"><a data-toggle="modal" href="#notification"  ><i class="fa fa-bell" aria-hidden="true"></i></a></li>
                        <li  style="padding:2px; font-weight:;"><a data-toggle="modal" href="#guideline">Guidelines</a></li>
                        <li class="dropdown"  style="padding:2px; font-weight:;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
								<li><a data-toggle="modal" href="#loginForm">Login</a></li>
                                <li><a href="register.php">Sign Up</a></li>
								<li class="divider"></li>
								<li><a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'>Contact Us</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" href="#privacy">Privacy Policy</a></li>
                             
                            </ul>
                        </li>
                        <li class="login"  style="padding:2px; font-weight:bold;">
                            <a data-toggle="modal" href="#loginForm"><i class="fa fa-sign-in"></i></a>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </nav>
    <!-- /header -->

    <div class="fb-like"  style ="position:fixed;float:right;"data-href="https://www.facebook.com/venturahunt/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    
    <!--Slider-->
    <section id="slide-show" style="margin-top:-40px;">
        <div id="slider" class="sl-slider-wrapper" >
            <!--Slider Items-->    
            <div class="sl-slider">
                <!--Slider Item1-->
                <div  class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner" style="background-color:#37474F;">
                        <div class="container">
                            <img class="pull-right" src="images/sample/slider/img1.png" style="height:600;width:520;" alt="text"  />
                            <h2>The Game is On!</h2>
                            <h3 class="gap">Find Your Fire</h3>
                            <a class="btn btn-large btn-transparent" data-toggle="modal" href="#loginForm"  >Get Started</a>
                        </div>
                    </div>
                </div>
                <!--/Slider Item1-->

                <!--Slider Item2-->
                <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner"  style="background-color:#EF6C00;">
                        <div class="container">
                            <img class="pull-right" src="images/sample/slider/img2.png" style="margin-top:20px;"alt="" />
                            <h2>Thrill &amp; Adventure </h2>
                            <h3 class="gap">Aye! Aye! Captain</h3>
                        <!--  <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <!--Slider Item2-->

                <!--Slider Item3-->
                <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner"  style="background-color:#22a0ae;">
                        <div class="container">
                            <img class="pull-right img-fluid" src="images/sample/slider/img3.png" alt="" />
                            <h2>Catch Your Venture</h2>
                            <h3 class="gap">Focus &amp; Win!</h3>
                            <!-- <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <!--Slider Item3-->
            </div>
            <!--/Slider Items-->

            <!--Slider Next Prev button-->
            <nav id="nav-arrows" class="nav-arrows">
                <span class="nav-arrow-prev"><i class="fa fa-angle-left"></i></span>
                <span class="nav-arrow-next"><i class="fa fa-angle-right"></i></span> 
            </nav>
            <!--/Slider Next Prev button-->

        </div>
        <!-- /slider-wrapper -->           
    </section>
    <!--/Slider-->

    <section class="main-info">
        <div class="container">
            <div class="row-fluid">
                <div class="" style="text-align:center;">
                    <h4 >No thief, however skillful, can rob one of knowledge, and that is why knowledge is the best and safest treasure to acquire.</h4>
                    <p class="no-margin">L. Frank Baum, The Lost Princess of Oz</p>
                </div>
            </div>
            <!-- <div class="row-fluid" >
                <div class="span9" style="text-align:center;">
                    <a class="btn btn-success btn-large pull-right" href="" disabled>Play Now</a>
                </div>
            </div> -->
        </div>
    </section>



    <!--Services-->
    <section id="services">
        <div class="container">
            <div class="center gap">
                <h3>What is VenturaHunt ?</h3>
                <p class="lead">An Online Treasure Hunt !</p>
            </div>

            <div class="row-fluid">
                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-quote-left fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Introduction</h4>
                            <p style="font-family: 'Josefin Slab', serif;; font-size:15px;">VenturaHunt is an online treasure hunt which you can be more precisely express as a cryptic hunt organised by SIAM (Society for Industrial and Applied Mathematics) IIT(ISM) Student Chapter.</p>
                        </div>
                    </div>
                </div>            

                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-quote-left fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">What actually will be happening?</h4>
                            <p style="font-family: 'Josefin Slab', serif;; font-size:15px;">
                                Here, you will be on the lookout, brainstorming for clues and solving the riddles. It is a test of your problem solving skills, your comprehension and your patience. At last it will be a test of whether or not you have the UNAGI in you.
                            </p>
                        </div>
                    </div>
                </div>            

                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-quote-left fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">What will I get?</h4>
                            <p style="font-family: 'Josefin Slab', serif;; font-size:15px;">
                                Your thirst for mysteries and mind games shall be quenched as you connect all the dots of the riddles. Your logicality shall be put to test while you sit in your Mind Palace looking for answers. 
                                Explore, dissect and win every level to reach to the top where the real mystery awaits and the Sherlock in you shall behold the glory. Hail Hydra!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="gap"></div>
            </div>
        </div>
    </section>
    <!--/Services-->

    <section id="cd-timeline" class="cd-container cssanimations well">
        <!-- single timeline event -->
        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-picture">
                <img src="event-calender.png" />
            </div>
            <div class="cd-timeline-content">
                <h2>Registration Starts</h2>
                <p></p>
                <span class="cd-date">Thursday, 17 January 2019</span>
            </div>
        </div>

        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-picture">
                <img src="event-calender.png" />
            </div>
            <div class="cd-timeline-content">
                <h2>Arena Opens</h2>
                <p>Online Hunt will Start</p>
                <span class="cd-date">Friday, 25 January 2019</span>
            </div>
        </div>

        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-picture">
                <img src="event-calender.png" />
            </div>
            <div class="cd-timeline-content">
                <h2>Arena Close</h2>
                <p>Online Hunt will End</p>
                <span class="cd-date">Sunday, 27 January 2019</span>
            </div>
        </div>
        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-picture">
                <img src="event-calender.png" />
            </div>
            <div class="cd-timeline-content">
                <h2>Prize Distribution</h2>
                <p>Prize distribution starts and also feedback form will open.</p>
                <span class="cd-date">Sunday, 27 January 2019 Onwards</span>
            </div>
        </div>
    
        <div style="height: 2em"></div>
    </section>


    <section id="clients" class="main">
        <div class="container">
            <div class="row-fluid">

                <div class="span2">
                    <div class="clearfix">
                        <h4 class="pull-left">OUR UPHOLDERS</h4>
                        <div class="pull-right">
                            <a class="prev" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left fa-2x" ></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right fa-2x"></i></a>
                        </div>
                    </div>
                    <p><font color="#A9A9A9">"We must find time to STOP & THANK the people who make a difference in our lives."</font><br/></p><h6><i>-John F. Kennedy</i></h6>
                </div>

                <div class="span10">
                    <div id="myCarousel" class="carousel slide clients">
                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="active item">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <li class="span3"><a target="blank" href="http://www.iitism.ac.in/"><img title="Indian Institute of Technology (ISM), Dhanbad" style="height:160px;width:160px;" src="images/sample/clients/client2.png"></a></li>
                                        <li class="span3"><a target="blank" href="https://www.facebook.com/SIAMISMpage/"><img title="SIAM IIT-ISM DHANBAD" style="height:160px;width:160px;" src="images/sample/clients/siam.png"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- <div class="item">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <li class="span3"><a target="blank" href="https://www.facebook.com/SIAMISMpage/"><img title="SIAM IIT-ISM DHANBAD" style="height:160px;width:160px;" src="images/sample/clients/siam.png"></a></li> 
                                        <li class="span3"><a target="blank" href="http://www.iitism.ac.in/"><img  title="Indian Institute of Technology (ISM), Dhanbad"style="height:160px;width:160px;" src="images/sample/clients/client2.png"></a></li>
                                    </ul>
                                </div>
                            </div> -->

                            <!-- <div class="item">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <li class="span3"><a target="blank" href="https://www.facebook.com/SIAMISMpage/"><img title="SIAM IIT-ISM DHANBAD" style="height:160px;width:160px;" src="images/sample/clients/siam.png"></a></li>
                                        <li class="span3"><a target="blank" href="http://www.iitism.ac.in/"><img  title="Indian Institute of Technology (ISM), Dhanbad" style="height:160px;width:160px;" src="images/sample/clients/client2.png"></a></li>
                                    </ul>
                                </div>
                            </div> -->
                            
                            <!-- <div class="item">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <li class="span3"><a target="blank" href="http://www.iitism.ac.in/"><img  title="Indian Institute of Technology (ISM), Dhanbad" style="height:160px;width:160px;" src="images/sample/clients/client2.png"></a></li>
                                        <li class="span3"><a target="blank" href="https://www.facebook.com/SIAMISMpage/"><img title="SIAM IIT-ISM DHANBAD" style="height:160px;width:160px;" src="images/sample/clients/siam.png"></a></li>
                                    </ul>
                                </div>
                            </div> -->

                        </div>
                        <!-- /Carousel items -->
                    </div>
                </div>
            
            </div>
        </div>
    </section>

    <!--Bottom-->
    <?php include 'bottom.php'; ?>
    <!--/Bottom-->

    <!--Footer-->
    <?php include 'footer.php'; ?>
    <!--/Footer-->

    <!--  Login form -->
    <div class="modal hide fade in  " id="loginForm" aria-hidden="false" style="margin-left:20px;width:360px; height:54%;">
        <div class="modal-header">
            <i class="icon-remove" style=" background-color:#FF6347;"   data-dismiss="modal" aria-hidden="true"></i>
            <h3 style="text-align:center;">Login</h3>
        </div>
        <!--Modal Body-->
        <div class="modal-body">
            <form method="post" action="login.php" autocomplete="off">
                <div class="col-md-12">

                    <?php
                        if ( isset($errMSG) ) {
                    ?>
                        <div class="form-group">
                            <div class="alert alert-danger">
                                <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if(isset($loginerror))  { ?>
                        <span class="alert-box alert"><?php echo $loginerror ?></span>
                    <?php } ?>
                
                    <div class="form-group">
                        <div class="input-group">
                            <br/>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                            <input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo $username; ?>" maxlength="40" />
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" name="password" class="form-control" placeholder="Your Password" maxlength="15" required/>
                        </div>
                    </div>

                    <div style="height: 1em"></div>

                    <div class="form-group">
                        <div class="divider"></div>
                        <button type="submit" class="btn btn-primary" name="btn-login">Sign in</button>
                    </div>

                    <div class="form-group">
                        <hr />
                    </div>

                    <div class="form-group">
                        <a href="fpass.php">Forgot your password?</a><br/>
                        <h5>Don't have an account ? Create one <a  href="register.php">Sign Up</a></h5>
                    </div>
                </div>
            </form>
        </div>
        <!--/Modal Body-->
    </div>
    <!--  /Login form -->

    <!-- <script src="assets/js/vendor/jquery-1.9.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/vendor/bootstrap.min.js"></script> -->
    <script src="assets/js/main.js"></script>
    <!-- Required javascript files for Slider -->
    <script src="assets/js/jquery.ba-cond.min.js"></script>
    <script src="assets/js/jquery.slitslider.js"></script>
    <!-- /Required javascript files for Slider -->

    <!-- SL Slider -->
    <script type="text/javascript"> 
        $(function() {
            var Page = (function() {

                var $navArrows = $( '#nav-arrows' ),
                slitslider = $( '#slider' ).slitslider( {
                    autoplay : true
                } ),

                init = function() {
                    initEvents();
                },
                initEvents = function() {
                    $navArrows.children( ':last' ).on( 'click', function() {
                        slitslider.next();
                        return false;
                    });

                    $navArrows.children( ':first' ).on( 'click', function() {
                        slitslider.previous();
                        return false;
                    });
                };

                return { init : init };

            })();

            Page.init();
        });
    </script>
    <!-- /SL Slider -->

    <!--  Notification -->
    <div class="modal hide fade in well" id="notification" aria-hidden="false">
        <div class="modal-header">
            <i class="icon-remove" style=" background-color:#FF6347;"  data-dismiss="modal" aria-hidden="true"></i>
            <h3 style="margin-left:150px; " class="" >Notifications</h3>
        </div>
        <!--Modal Body-->
        <div class="span4"></div>
        <div class="modal-body well span4">
            <?php
                $notifications = mysqli_query($dbcon, 'select * from notifications');
            ?>

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

    <!-- Guidelines -->
    <?php include 'guidelines.php'; ?>
    <!-- /Guidelines -->

    <!-- Privacy Policy -->
    <?php include 'privacy-policy.php'; ?>
    <!-- /Privacy Policy -->


    <!-- Disable Right Click Code -->
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
        LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
        (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
        var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
        po.src = '//www.venturahunt.com/helplhc_ventura/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true/(theme)/1?r='+referrer+'&l='+location;
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>

    <script>
        $(window).on('scroll', function(){
            $('.cd-timeline-block').each(function(){
                if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
                    $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
                }
            });
        });
    </script>

    <?php require_once('contactform-code.php'); ?>

	<script>
        $(window).load(function(){
            $('.se-pre-con').fadeOut('slow',function(){$(this).remove();});
        });
	</script>

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
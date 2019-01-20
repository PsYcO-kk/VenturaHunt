    <div style="height: 2em"></div>

    <!--Bottom-->
    <?php include 'bottom.php'; ?>
    <!--/Bottom-->

    <!--Footer-->
    <?php include 'footer.php'; ?>
    <!--/Footer-->


    <script src="assets/js/vendor/jquery-1.9.1.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
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
                slitslider = $( '#slider1' ).slitslider( {
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
    <div class="modal hide fade in" id="notification" aria-hidden="false">
        <div class="modal-header">
            <i class="icon-remove" style=" background-color:#FF6347;" data-dismiss="modal" aria-hidden="true"></i>
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
                                <th  style="margin-left:-60px;">Date</th>
                                <th class="pull-left" style="margin-left:-20px;">|</th>
                                <th class="pull-left">Notification</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($row = mysqli_fetch_assoc($notifications)) { ?>
                            <tr>
                                <td style="width: 9em;"><?php echo $row['date'] ?></td>
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


    <!-- Latest version of jQuery -->
    <script src="javascripts/jquery.js"></script>
    <!-- <script src="javascripts/questionsjs.js"></script> -->
    <script>
        <?php include("questionsjs.php"); ?>
    </script>

    <script src="javascripts/subnavigation.js"></script>
    <!-- Included JS Files (Unminified) -->
    <!-- [JS Files] -->

    <script type='text/javascript'>
        $(document).ready(function() {
            $("#answerbutton").click(function() {
                var useranswer = $("#answertext").val();
                var questionpath = $("#questionPic").attr('src');
                $.post('checkanswer.php', {'questionpath': questionpath, 'useranswer': useranswer}, function(data) {
                    if(data==="true") {
                        $("#answercorrectlabel").html("Congratulations Key Accepted! Now you can move to next level.");
                        $("#answercorrectlabel").removeClass("alert");
                        $("#answercorrectlabel").css("background-color","#5bc0de");
                        $("#answercorrectlabel").css("color","#428bca");
                        $("#answercorrectlabel").css("font-size","16px");
                        $("#changecolor").css("background-color","#5bc0de");
                    } else {
                        $("#answercorrectlabel").removeClass("success");
                
                        $("#answercorrectlabel").html(data);
                        $("#answercorrectlabel").css("font-size","16px");
                        $("#changecolor").css("background-color","#E65100");
                        $("#answercorrectlabel").css("background-color","#f2dede");
                        $("#answercorrectlabel").css("color","#E65100");
                    }
                    $('#answertext').val('');
                    $('#getHint').val('');
                });
            });

            $("#linkHint").click(function() {
                var questionpath = $("#questionPic").attr('src');
                //alert(questionpath);
                $.post('checkHint.php', {'questionpath': questionpath}, function(data) {
                    $("#getHint").val(data);
                });
            });

            $('#photoimg').live('change', function()  
            { 
                $("#preview").html('');
                $("#preview").html('<img src="images/loader.gif" alt="Uploading...."/>');
                $("#imageform").ajaxForm(
                {
                    target: '#preview'
                }).submit();
            });

        });
    </script>

    <!-- Included JS Files (Minified) -->
    <script src="javascripts/foundation.min.js"></script>

    <!-- Initialize JS Plugins -->
    <script src="javascripts/app.js"></script>

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

    <script type="text/javascript">
        document.title = "<?=$title;?>"
    </script>

    <script id="dsq-count-scr" src="//venturahunt.disqus.com/count.js" async></script>
    <script type="text/javascript">
        $(".dropdown .titl").click(function () {
            $(this).parent().toggleClass("closed");
        });

        $(".dropdown li").click(function () {
            $(this).parent().parent().toggleClass("closed").find(".titl").text($(this).text());
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/TimeCircles.js"></script>
  
    <script>
        $("#count-down").TimeCircles(
        {   
            circle_bg_color: "#2dcc70",
            use_background: true,
            bg_width: 1.0,
            fg_width: 0.02,
            time: {
                    Days: { color: "#8a7f71" },
                    Hours: { color: "#8a7f71" },
                    Minutes: { color: "#8a7f71" },
                    Seconds: { color: "#8a7f71" }
                }
        });

    </script>

	<?php require_once('contactform-code.php'); echo $r; ?>

    <script>
        $(document).ready(function(){
            $("#div1").hover(
                function(){
                    $(this).animate({ "width" : "5%", "height" : "25px","font-size":"25px" }, 500); 
                    
                },
                function(){
                    $(this).animate({ "width" : "3%", "height" : "25px" }, 500);
                    $(this).css('font-size','15px');
                    $(this).animate({ "font-size":"20px" }, 50);
                }
            );  

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
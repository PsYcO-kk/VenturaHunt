<?php

    echo 'function parseClass(question) {
        for(var i=0;i<31;i++) {
            var temp = "#question" + (i+1);
            var tmp = temp + " span";
            if (temp==question) {
                $(tmp).addClass("success");
            } else {
                $(tmp).removeClass("success");
            }
        }
    }';

    echo "\n";

    $i=1;
    echo "$(document).ready(function() {\n\n" ;
    while($i<31) { 
        $question = "#question".$i;
  
        echo "$('$question').click(function(e) {
                e.preventDefault();
                $('#answercorrectlabel').html('');
                $('#changecolor').css('background-color','#2dcc70');
                var ques = '$question';
                var question = $('$question span').html();
                $.post('fetchQuestion.php', {'question':question}, function(data) {
                    desc = data.split('||')[0];
                    src = data.split('||')[1];
                    $('#questionPic').attr('src', src);
                    $('#questionDesc').html(desc);
                    parseClass(ques);
                });
                $.post('fetchHint.php', {'question':question}, function(data) {
                    $('#getHint').val(data);
                });

                $('.levelButton').removeClass('active')
                if(!$(this).hasClass('solved')){
                    $(this).addClass('active');
                }

                $('#answertext').val('');
        });\n\n";
        $i++;
    }

    echo "});";

?>
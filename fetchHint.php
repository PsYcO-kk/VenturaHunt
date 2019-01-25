<?php

	error_reporting(0);

	include('config.php');
	session_start();
	$username = $_SESSION['username'];

	$question = $_POST['question'];
	$question = (substr($question, 1));

	$questions = mysqli_query($dbcon, "select current, hint, thint from profile where username='$username'");
	$questions = mysqli_fetch_assoc($questions);

    // more validation

    if($questions['current'] == $question && $questions['hint']>=2 && $questions['thint']<5){
        $questionResult = mysqli_query($dbcon, "select hint1 from questions where id=$question");
        $questionHint = mysqli_fetch_assoc($questionResult);

        echo $questionHint['hint1'];
    }
    else {
        echo '';
    }
    
?>
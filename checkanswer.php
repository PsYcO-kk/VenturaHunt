<?php
	error_reporting(0);

	include('config.php');
	session_start();
	$username = $_SESSION['username'];
	$questionpath = $_POST['questionpath'];
	$answerresult = mysqli_query($dbcon, "select id,answer from questions where questionpath='$questionpath'");
	$questions = mysqli_query($dbcon, "select tym, round1, solvedquestions, current from profile where username='$username'");
	$dbanswer = mysqli_fetch_assoc($answerresult);
	$questions = mysqli_fetch_assoc($questions);
	$solvedquestions = explode(',', $questions['solvedquestions']);

	foreach($solvedquestions as $solvedquestion) {
		if($solvedquestion==$dbanswer['id']) {
			$flag = true;
			break;
		}
	}

	if(!($questions['current']==($dbanswer['id'].""))) {
		$notSolved = true;
	}

	$useranswer = $_POST['useranswer'];
	$useranswer = strtolower($useranswer);
	$useranswer = trim($useranswer);
	$useranswer = str_replace(' ', '', $useranswer);
	$databaseanswer = strtolower(trim($dbanswer['answer']));

	if($useranswer=="") {
		echo "Please Enter the Key .";
	} else if(!preg_match('/^[a-z0-9\s,]*$/', $useranswer)) {
		echo "Special Characters are not allowed!";
	} else if($flag==true) {
		echo "You have already cleared this Level, Please move to level #".$questions['current']." <br/>";
	} else if ($notSolved==true) {
		echo "You have not cleared the levels in sequence, Please clear level #".$questions['current']." first.";
	} else {
		// trim, specialchars and other check for validating the user answer
		// here TODO
		
		$trueanswer = false;
		if($databaseanswer===$useranswer) {
			$trueanswer = true;
		} else {
			$trueanswer = false;
		}


		if($trueanswer==true) {
			$insertSolved = $questions['solvedquestions'].",".$questions['current'];
			$insertCurrent = intval($questions['current']);
			$insertCurrent+=1;
			$currentScore = $questions['round1'];
			//echo $currentScore;
			$currentScore += 100;
			$tym=$dbanswer['tym'];
			date_default_timezone_set("Asia/Kolkata"); 
			$tym=time()+12600;;
			// update query
			mysqli_query($dbcon, "update profile set solvedquestions='$insertSolved',current='$insertCurrent',round1=$currentScore,tym='$tym',hint=1 where username='$username'");
			echo "true";
		} else {
			echo "Sorry! Wrong Key. Please try again.";
		}
	}


?>
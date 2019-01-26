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

	// trim, specialchars and other check for validating the user answer
	// here TODO

	if($useranswer=="") {
		echo "Please Enter the Key .";
	} else if(!preg_match('/^[a-z0-9&]*$/', $useranswer)) {
		echo "Answers must contain only characters, numbers, spaces and special character '&'.";
	} else if($flag==true) {
		echo "You have already cleared this Level, Please move to level #".$questions['current']." <br/>";
	} else if ($notSolved==true) {
		echo "You have not cleared the levels in sequence, Please clear level #".$questions['current']." first.";
	} else {
		// trim, specialchars and other check for validating the user answer
		// here TODO

		$rowQuery = mysqli_query($dbcon, "select * from answers where username='$username'");
		$rowResult = mysqli_fetch_assoc($rowQuery);

		if($rowResult){
			$answer = $rowResult['attempted_answers'].$questions['current'].'-'.$useranswer.'||';
			$updateQuery = mysqli_query($dbcon, "update answers set attempted_answers='$answer' where username='$username'");
		}
		else {
			$answer = $questions['current'].'-'.$useranswer.'||';
			$insertQuery = mysqli_query($dbcon, "insert into answers (username, attempted_answers) values ('$username', '$answer')");
		}
			
		$useranswer = hash('sha256', $useranswer);

		$databaseanswer = strtolower($dbanswer['answer']);
		$databaseanswer = explode('||', $databaseanswer);

		$trueanswer = false;
		if(in_array($useranswer, $databaseanswer)) {
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
			if($questions['current'] >= 14) $currentScore += 100;
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
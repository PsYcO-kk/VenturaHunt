<?php
	error_reporting(0);

	include('config.php');
	session_start();

	$username = $_SESSION['username'];
	//echo $username;

    $usernameQuery = mysqli_query($dbcon, "select thint from profile where username='$username'");
	$usernameResult = mysqli_fetch_assoc($usernameQuery);

    $thint = $usernameResult['thint'];
    $hintsLeft = 5 - $thint;
    
    echo $hintsLeft;

?>
<?php
    include("config.php");
    
	$username=trim($_POST['username']);
	$username = strip_tags($username);
    $username = htmlspecialchars($username);
    
    $password=trim($_POST['password']);
	$password = strip_tags($password);
    $password = htmlspecialchars($password);
	$password = hash('sha256', $password); // password hashing using SHA256
    
    $loginerror="Either of Username or Password is Incorrect.";

    // basic username validation
    $error = false;
    if (empty($username)) {
        $error = true;
        $usernameError = "Please enter your username.";
    } 
    if (strlen($username) < 3) {
        $error = true;
        $usernameError = "Username must have atleat 3 characters.";
    } 
    if (!preg_match("/^[a-zA-Z0-9]+$/",$username)) {
        $error = true;
        $usernameError = "Username must contain alphabets and numbers.";
    } 
		
    $sel=mysqli_query($dbcon, "select * from login where username='$username' ");
    $arr=mysqli_fetch_array($sel);

    if(($arr['username']!=$username) || ($arr['password']!=$password) || $arr['active']!='1' || $error){
        session_start();
        $_SESSION['loginerror']=$loginerror;
        echo "<script>location.href='index.php'</script>";
    }

    if(($arr['username']==$username) && ($arr['password']==$password) && $arr['active']=='1' && !$error)	{
        session_start();
        $_SESSION['username']=$username;
        echo "<script>location.href='home.php'</script>";
    } 
   
	
?>
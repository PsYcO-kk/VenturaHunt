<?php

    include('config.php');

    if(isset($_GET['username']) && !empty($_GET['username']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
        // Verify data
        $username = mysqli_real_escape_string($dbcon, $_GET['username']); // Set email variable
        $hash = mysqli_real_escape_string($dbcon, $_GET['hash']); // Set hash variable
                    
        $search = mysqli_query($dbcon, "SELECT * FROM login WHERE username='".$username."' AND hash='".$hash."' AND active='0'"); 
        $match  = mysqli_num_rows($search);
                    
        if($match > 0){
            // We have a match, activate the account
            mysqli_query($dbcon, "UPDATE login SET active='1' WHERE username='".$username."' AND hash='".$hash."' AND active='0'");
            echo '<div class="statusmsg">Your account has been activated, you can now <a href="index.php">login</a> to start hunting.</div>';
        }else{
            // No match -> invalid url or account has already been activated.
            echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
        }
                    
    }else{
        // Invalid approach
        echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email address.</div>';
    }
?>
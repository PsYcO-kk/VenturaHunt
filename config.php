<?php
 
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'venturahunt');
    
    $dbcon = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (!$dbcon) {
        echo "Error: Unable to connect to MySQL." . mysqli_connect_error() . PHP_EOL;
        exit();
    }
    
?>
<?php
define('SERVER_NAME','localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'project1');
$connection=mysqli_connect(SERVER_NAME, DB_USER, DB_PASS, DB_NAME);
IF(!$connection){
    die("Connection failed..");
}



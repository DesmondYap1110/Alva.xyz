<?php
//Configuration of Database Connection 
//This is dbconn.php

# FileName="Connection_php_mysql.htm"
# Type="MYSQL" 
# HTTP="true"

date_default_timezone_set('Asia/Kuala_Lumpur');
$hostname = "localhost";
$database = "u904478035_AESDB";
$username = "u904478035_AESDB";
$password = "Phplayer@3029288";
$ALVADB = mysqli_connect($hostname, $username, $password, $database);

mysqli_set_charset($ALVADB,"utf8");


?>

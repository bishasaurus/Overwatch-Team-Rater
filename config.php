<?php
// Database credentials.
define('DB_SERVER', '127.0.0.1:51099');
define('DB_USERNAME', 'azure');
define('DB_PASSWORD', '6#vWHD_$');
define('DB_NAME', 'localdb');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>


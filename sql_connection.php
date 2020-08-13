<?php 

define('DB_NAME', 'heroku_ebc3dd2864eaaf6'); 
define('DB_USER', 'b9fc7786de1b59'); 
define('DB_PASSWORD', '76a49078'); 
define('DB_HOST', 'us-cdbr-east-02.cleardb.com'); 

mysql://b9fc7786de1b59:76a49078@us-cdbr-east-02.cleardb.com/heroku_ebc3dd2864eaaf6?reconnect=true

try {
$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

mysqli_set_charset($con, 'urf8'); 
}catch (Exception $ex) {
    print "An exception occurred. Message: " . $ex->getMessage();
} catch (Error $e) {
    print "The system is busy try again later";
}

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
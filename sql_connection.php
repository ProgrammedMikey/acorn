<?php 

define('DB_NAME', 'acorn_db'); 
define('DB_USER', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_HOST', 'localhost'); 

try {
$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

mysqli_set_charset($con, 'urf8'); 
}catch (Exception $ex) {
    print "An exception occurred. Message: " . $ex->getMessage();
} catch (Error $e) {
    print "The system is busy try again later";
}
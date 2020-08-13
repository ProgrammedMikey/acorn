<?php 
include('sql_connection.php')

$sql = "CREATE TABLE user(
    userID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
    phoneNumber VARCHAR(30) NOT NULL,
    address VARCHAR(30) NOT NULL,
    city VARCHAR(30) NOT NULL,
    state VARCHAR(30) NOT NULL,
    zip VARCHAR(30) NOT NULL,
    registerDate Date() NOT NULL,
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
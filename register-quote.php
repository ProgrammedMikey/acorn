<?php
require('validater.php');

$error = array(); 

$firstName = validate_input_text($_POST['firstName']);
if (empty($firstName)) {
    $error[] = "You forgot to enter your first name";
}

$lastName = validate_input_text($_POST['lastName']);
if (empty($lastName)) {
    $error[] = "You forgot to enter your last name";
}

$email = validate_input_email($_POST['email']);
if (empty($email)) {
    $error[] = "You forgot to enter your last email";
}

$phoneNumber = validate_input_text($_POST['phoneNumber']);
if (empty($phoneNumber)) {
    $error[] = "You forgot to enter your first name";
}

$inputAddress = validate_input_text($_POST['inputAddress']);
if (empty($inputAddress)) {
    $error[] = "You forgot to enter your last name";
}

$inputCity = validate_input_text($_POST['inputCity']);
if (empty($inputCity)) {
    $error[] = "You forgot to enter your first name";
}

$inputState = validate_input_text($_POST['inputState']);
if (empty($inputState)) {
    $error[] = "You forgot to enter your last name";
}

$inputZip = validate_input_text($_POST['inputZip']);
if (empty($inputZip)) {
    $error[] = "You forgot to enter your last name";
}

if (empty($error)){
    require('sql_connection.php'); 

    $query = "INSERT INTO user(userID, firstName, lastName, email, phoneNumber, address, city, state, zip, registerDate)";
    $query .= "VALUES('', ?, ?, ?, ?, ?, ?, ?, ?, NOW())"; 

    $q = mysqli_stmt_init($con); 

    mysqli_stmt_prepare($q, $query);

    mysqli_stmt_bind_param($q, 'ssssssss', $firstName, $lastName, $email, $phoneNumber, $inputAddress, $inputCity, $inputState, $inputZip);

    mysqli_stmt_execute($q); 

    if (mysqli_stmt_affected_rows($q) == 1) {
        print "record successfully inserted!";
        

    } else {
        print "Error with registering";
    }

} else {
    echo "not valid";
}

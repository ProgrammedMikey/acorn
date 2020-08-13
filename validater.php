<?php 

function validate_input_text($userInput) {
    if(!empty($userInput)) {
        $trim_text = trim($userInput);

        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str; 
    }
    return "";
}

function validate_input_email($userEmail) {
    if(!empty($userEmail)) {
        $trim_text = trim($userEmail);

        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
        return $sanitize_str; 
    }
    return "";
}

function get_user_info ($con, $userID) {
    $query = "SELECT firstName, lastName, email FROM user WHERE userID =?"; 
    $q = mysqli_stmt_init($con); 

    mysqli_stmt_prepare($q, query); 

    mysqli_stmt_bind_param($q, 'i', $userID); 

    mysqli_stmt_execute($q); 

    $result = mysqli_fetch_array($result); 

    $row = mysqli_fetch_array($result); 

    return empty($row) ? false : $row; 
}
<?php

require_once('../../../private/initialize.php');

// Filter options
$data_filter = array(
    'user_fullname' => FILTER_SANITIZE_STRING,
    'user_email'    => FILTER_SANITIZE_EMAIL,
    'user_password' => FILTER_SANITIZE_STRING,
    'user_address'  => FILTER_SANITIZE_STRING,
    'user_town'     => FILTER_SANITIZE_STRING,
    'user_zip'      => FILTER_SANITIZE_STRING,
    'user_phone'    => FILTER_SANITIZE_NUMBER_INT
);

// Sanatized input values
$data_sanitized = filter_input_array(INPUT_POST, $data_filter);

// Checking for POST
if (empty($data_sanitized["user_fullname"]) ||
    empty($data_sanitized["user_email"]) ||
    empty($data_sanitized["user_password"]) ||
    empty($data_sanitized["user_address"]) ||
    empty($data_sanitized["user_town"]) ||
    empty($data_sanitized["user_zip"]) ||
    empty($data_sanitized["user_phone"]) ) {
        redirect("pages/signup.php", "signup-failed");
}

// Checking if username(email) already exist
if (getUserEmail($data_sanitized['user_email'])) {
    redirect("pages/signup.php", "following-email-is-already-in-use");
}

// Hashing password
$hashed_password = password_hash($data_sanitized['user_password'], PASSWORD_DEFAULT);

// Updating values
$data_sanitized['user_password'] = $hashed_password;

// Creating user
createUser($data_sanitized);

// Signup succeeded
redirect("pages/signin.php", "signup-succced");


// print_r(password_verify('eeeeeeeeeeeeeeeeeeeeeeeee', $newpassword));

?>

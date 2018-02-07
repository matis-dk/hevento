<?php

require_once('../../../private/initialize.php');

// Filter options
$data_filter = array(
    'signin-username'   => FILTER_SANITIZE_STRING,
    'signin-password'   => FILTER_SANITIZE_STRING
);

// Sanatized input values
$data_sanitized = filter_input_array(INPUT_POST, $data_filter);


// Checking for POST
if (empty($data_sanitized["signin-username"]) ||
    empty($data_sanitized["signin-password"]) ) {
    redirect("pages/signin.php", "failed");
}

// Signin password validation
if (password_verify($data_sanitized["signin-password"], getUserPassword($data_sanitized['signin-username']))) {
    sessionSigin($data_sanitized['signin-username']);
    redirect("index.php", "logged-in");
} else {
    redirect("pages/signin.php", "invalid-password-or-username");
}

?>

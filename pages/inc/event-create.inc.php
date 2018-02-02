<?php

require_once('../../../private/initialize.php');


// Filter options
$data_filter = array(
    'editor_content'   => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
);

// Filter options
$data_filter = array(
    'event_title'               => FILTER_SANITIZE_STRING,
    'event_address'             => FILTER_SANITIZE_STRING,
    'event_zip'                 => FILTER_SANITIZE_STRING,
    'event_town'                => FILTER_SANITIZE_STRING,
    'event_capacity'            => FILTER_SANITIZE_STRING,
    'event_description'         => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'event_date'                => FILTER_SANITIZE_STRING,
    'event_duration'            => FILTER_SANITIZE_STRING,
    'event_deadline'            => FILTER_SANITIZE_STRING,
    'event_category_checkboxes' => array('filter' => FILTER_SANITIZE_STRING, 'flags' => FILTER_REQUIRE_ARRAY),
    'event_category_type'       => FILTER_SANITIZE_STRING,
    'event_price'               => FILTER_SANITIZE_STRING
);



// Sanatized input values
$data_sanitized = filter_input_array(INPUT_POST, $data_filter);


echo "<pre>";

    print_r($_POST);

    echo  "====================================";

    print_r($data_sanitized);

    echo json_encode($data_sanitized['event_category_checkboxes']);

echo "</pre>";



// // Filter options
// $data_filter = array(
//     'user_fullname' => FILTER_SANITIZE_STRING,
//     'user_email'    => FILTER_SANITIZE_EMAIL,
//     'user_password' => FILTER_SANITIZE_STRING,
//     'user_address'  => FILTER_SANITIZE_STRING,
//     'user_town'     => FILTER_SANITIZE_STRING,
//     'user_zip'      => FILTER_SANITIZE_STRING,
//     'user_phone'    => FILTER_SANITIZE_NUMBER_INT
// );
//
// // Sanatized input values
// $data_sanitized = filter_input_array(INPUT_POST, $data_filter);
//
// // Checking for POST
// if (empty($data_sanitized["user_fullname"]) ||
//     empty($data_sanitized["user_email"]) ||
//     empty($data_sanitized["user_password"]) ||
//     empty($data_sanitized["user_address"]) ||
//     empty($data_sanitized["user_town"]) ||
//     empty($data_sanitized["user_zip"]) ||
//     empty($data_sanitized["user_phone"]) ) {
//         redirect("public/pages/signup.php", "signup-failed");
// }
//
// // Checking if username(email) already exist
// if (getUserEmail($data_sanitized['user_email'])) {
//     redirect("public/pages/signup.php", "following-email-is-already-in-use");
// }
//
// // Hashing password
// $hashed_password = password_hash($data_sanitized['user_password'], PASSWORD_DEFAULT);
//
// // Updating values
// $data_sanitized['user_password'] = $hashed_password;
//
// // Creating user
// createUser($data_sanitized);
//
// // Signup succeeded
// redirect("public/pages/signin.php", "signup-succced");



?>

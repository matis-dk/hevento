<?php

require_once('../../../private/initialize.php');


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


// USER CREATING EVENT ?
//     print_r($_SESSION);


// Sanatized input values
$data_sanitized = filter_input_array(INPUT_POST, $data_filter);


echo "<pre>";

    print_r($_POST);

    $data_sanitized['event_category_checkboxes'] = json_encode($data_sanitized['event_category_checkboxes']);

    print_r($data_sanitized);

    echo "=============";

    print_r($_FILES);

echo "</pre>";



try {

    // Undefined | Multiple Files | $_FILES Corruption Attack
    // If this request falls under any of them, treat it invalid.
    if ( !isset($_FILES['event_cover']['error']) || is_array($_FILES['event_cover']['error']) ) {
        throw new RuntimeException('Invalid parameters.');
    }

    // Check $_FILES['event_cover']['error'] value.
    switch ($_FILES['event_cover']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    // You should also check filesize here.
    if ($_FILES['event_cover']['size'] > 1000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }

    // DO NOT TRUST $_FILES['event_cover']['mime'] VALUE !!
    // Check MIME Type by yourself.

    //$mimeType = $finfo->file($_FILES['event_cover']['tmp_name']);
    echo "==============";

    if (isset($_FILES['event_cover']['tmp_name'])) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $_FILES['soup']['tmp_name']);

        print_r($mime);

        finfo_close($finfo);
    }

    echo "==============";


    // if (false === $ext = array_search(
    //     ,
    //     array(
    //         'jpg' => 'image/jpeg',
    //         'png' => 'image/png',
    //         'gif' => 'image/gif',
    //     ),
    //     true
    // )) {
    //     echo "BAH ==============";
    //     throw new RuntimeException('Invalid file format.');
    // } else {
    //     echo "DONE ==============";
    // }
    //
    // // You should name it uniquely.
    // // DO NOT USE $_FILES['event_cover']['name'] WITHOUT ANY VALIDATION !!
    // // On this example, obtain safe unique name from its binary data.
    // if (!move_uploaded_file(
    //     $_FILES['event_cover']['tmp_name'],
    //     sprintf('/private/uploads/%s.%s',
    //         sha1_file($_FILES['event_cover']['tmp_name']),
    //         $ext
    //     )
    // )) {
    //     throw new RuntimeException('Failed to move uploaded file.');
    // } else {
    //     echo "DONE ==============";
    // }
    //
    // echo 'File is uploaded successfully.';

} catch (RuntimeException $e) {

    echo $e->getMessage();

}





// // Filter options

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

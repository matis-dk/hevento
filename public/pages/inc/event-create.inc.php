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
    'event_deadline'            => FILTER_SANITIZE_NUMBER_INT,
    'event_category_checkboxes' => array('filter' => FILTER_SANITIZE_STRING, 'flags' => FILTER_REQUIRE_ARRAY),
    'event_category_type'       => FILTER_SANITIZE_STRING,
    'event_price'               => FILTER_SANITIZE_NUMBER_INT
);


// Sanatized input values
$data_sanitized = filter_input_array(INPUT_POST, $data_filter);
$data_sanitized['event_category_checkboxes'] = json_encode($data_sanitized['event_category_checkboxes']);

// Handling uploaded file
try {

    // Global variables
    $fileName;
    $fileExtActual;

    uploadMultiplefileCheck('event_cover');

    uploadErrorsCheck('event_cover');

    uploadSizeCheck('event_cover');

    uploadFileMIME('event_cover');

    uploadMoveFile('event_cover');

    $data_sanitized['event_cover'] = ($fileName . "." . $fileExtActual);

    print_r($_SESSION["userSettings"]);

} catch (RuntimeException $e) {

    echo $e->getMessage();
    exit();
}

// Adding user_id
$data_sanitized['user_id'] = $_SESSION["userSettings"]['user_id'];

echo "<pre>";
    print_r($data_sanitized);
echo "</pre>";

// Creating event
createEvent($data_sanitized);

redirect("public/pages/events.php", "event-created");


?>

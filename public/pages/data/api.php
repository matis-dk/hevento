<?php

    require_once('../../../private/initialize.php');

    header("Content-Type:application/json");


    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            handleGetRequest();
            break;
        case 'POST':
            handlePostRequest();
            break;
    }


    function handleGetRequest () {
        $sanitize = filter_input(INPUT_GET, 'addresses', FILTER_SANITIZE_STRING);
        if ($sanitize == 'all') {
            $allEvents = getEventsAll();
            $allAddresses = getAddresses($allEvents);
            echo json_encode($allAddresses);
            exit();
        }
    }


    function handlePostRequest () {
        echo "POST REQUEST";
    }



?>

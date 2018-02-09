<?php


// ======================== ENVIROMENT ========================
    // print and logging
    $debug = false;


    // true = prod,    false = dev
    function checkEnv() {
        if (isset($_SERVER["USER"]) == "fxubphvtpv") {
            return 1;
        } else {
            return 0;
        };
    }

// ======================== REDIRECTION ========================

    function redirect ($url = null, $msg = null) {
        if($msg !== null) {
            $url = $url . "?msg=" . $msg;
        };
        header('Location: ' . WWW_ROOT . $url, TRUE, 302);
        exit();
    }

// ======================== SESSIONS ========================


    function sessionStart() {
        session_start();
        if (!isset($_SESSION["userSignin"])) {
            $_SESSION["userSignin"] = false;
        }
    }

    function sessionSigin($user_email) {
        $_SESSION["userSettings"] = getUserSettings($user_email);
        $_SESSION["userSignin"] = true;
    }

    function sessionSignout () {
        // remove all session variables
        session_unset();
        $_SESSION["userSignin"] = false;
    }

// ======================== HELPERS ========================

    function getDateDay ($dateFull) {
        $dateTrimmed = strtok($dateFull,' ');
        $dateday = DateTime::createFromFormat("Y-m-d", $dateTrimmed);
        return ($dateday->format("d"));
    }

    function getDateFull ($dateFull) {
        $dateTrimmed = strtok($dateFull,' ');
        return $dateTrimmed;
    }

    function getAddresses ($allEvents) {
        $allAddresses = [];
        foreach ($allEvents as $i) {
            $address = $i["event_address"] . " " . $i["event_zip"] . " " . $i["event_town"];
            array_push($allAddresses, $address);
        };
        return $allAddresses;
    }

// ======================== DEBUGGING ========================
    function logP ($item) {
        global $debug;
        if( !$debug ) {  return; };

        echo "<pre>";
            print_r($item);
        echo "</pre>";
    }

    function logE ($item) {
        global $debug;
        if( !$debug ) {  return; };

        echo $item;
    }

    function logPaths () {
        global $debug;
        if( !$debug ) {  return; };

        echo "<pre>";
            print_r(array(
                "PRIVATE_PATH" => PRIVATE_PATH,
                "PROJECT_PATH" => PROJECT_PATH,
                "PUBLIC_PATH" => PUBLIC_PATH,
                "COMPONENTS_PATH" => COMPONENTS_PATH,
                "WWW_ROOT" => WWW_ROOT
            ));
        echo "</pre>";
    }

// ======================== FILE UPLOAD ========================


    function uploadMultiplefileCheck ($event_key) {
        // Undefined | Multiple Files | $_FILES Corruption Attack
        // If this request falls under any of them, treat it invalid.
        if ( !isset($_FILES[$event_key]['error']) || is_array($_FILES[$event_key]['error']) ) {
            throw new RuntimeException('Invalid parameters.');
        }
    }


    function uploadErrorsCheck ($event_key) {
        // Check $_FILES['event_cover']['error'] value.
        switch ($_FILES[$event_key]['error']) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new RuntimeException('No file sent.');
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new RuntimeException('Exceeded filesize limit.');
            default:
                throw new RuntimeException('Unknown errors.');
        };
    }

    function uploadSizeCheck ($event_key) {
        // You should also check filesize here.
        if ($_FILES[$event_key]['size'] > 2000000) {
            throw new RuntimeException('Exceeded filesize limit.');
        }
    }

    function uploadFileMIME ($event_key) {
        // Checking for file extension type MIME type
        $finfo      = finfo_open(FILEINFO_MIME_TYPE);
        $mime       = finfo_file($finfo, $_FILES[$event_key]['tmp_name']);
        $fileExtAllowed = array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
        );

        $GLOBALS['fileExtActual']  = array_search( $mime, $fileExtAllowed, true);

        if ($GLOBALS['fileExtActual'] === false) {
            throw new RuntimeException('Invalid file format.');
        };

    }

    function uploadMoveFile ($event_key) {
        // On this example, obtain safe unique name from its binary data.
        $GLOBALS['fileName'] = sha1_file($_FILES[$event_key]['tmp_name']);

        if (!move_uploaded_file(
            $_FILES[$event_key]['tmp_name'],
            sprintf(($_SERVER['DOCUMENT_ROOT'] . '/assets/images/uploads/eventCovers/%s.%s'),
                $GLOBALS['fileName'],
                $GLOBALS['fileExtActual']
            )
        )) {
            throw new RuntimeException('Failed to move uploaded file.');
        }
    }




?>

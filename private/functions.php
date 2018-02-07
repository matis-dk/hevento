<?php

    function is_localhost() {
        $whitelist = array( '127.0.0.1', '::1' );
        return in_array( $_SERVER['REMOTE_ADDR'], $whitelist);
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
        if ($_FILES[$event_key]['size'] > 1000000) {
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

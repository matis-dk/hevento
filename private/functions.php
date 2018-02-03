<?php

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
    }

    function sessionSigin($user_email) {
        $_SESSION["userSettings"] = getUserSettings($user_email);
        $_SESSION["userSignin"] = true;
    }

    function sessionSignout () {
        // remove all session variables
        session_unset();
    }

// ======================== HELPERS ========================

    function getDateDay ($date) {
        $dateday = DateTime::createFromFormat("Y-m-d", $date);
        return ($dateday->format("d"));
    }

?>

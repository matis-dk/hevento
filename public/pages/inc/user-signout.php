<?php

require_once('../../../private/initialize.php');

sessionSignout();
redirect("index.php", "logged-out");

?>

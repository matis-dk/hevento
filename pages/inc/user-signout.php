<?php

require_once('../../../private/initialize.php');

sessionSignout();
redirect("public/index.php", "logged-out");

?>

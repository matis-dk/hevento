<?php require_once('../private/initialize.php'); ?>
<?php include(COMPONENTS_PATH . '/header.php'); ?>
<!-- ============================================  -->


<div class="main-index">
    <div class="index-container">

        <h1>INDEX / HOME</h1>

    </div>
</div>

<div class="popup-msg">
    <p>
        <?php
            if (isset($_GET['msg'])) {
                $msg = filter_input(INPUT_GET, 'msg', FILTER_SANITIZE_STRING);
                logE($msg);
            }
         ?>
    </p>
</div>


<!-- ============================================  -->
<?php include(COMPONENTS_PATH . '/footer.php'); ?>

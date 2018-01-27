<?php require_once('../../private/initialize.php'); ?>
<?php include(COMPONENTS_PATH . '/header.php'); ?>
<!-- ============================================  -->


<div class="main-signin">
    <div class="signin-container">
        <h2 class="signin-h2">Log In</h2>
        <form class="signin-form" action="/hevento/public/index.php" method="post">
            <label class="signup-label" for="signin-username">Username / email</label>
            <label class="signup-label" for="signin-password">Password</label>
            <input class="signup-input" id="signin-username" type="text" name="signin-username" placeholder="Your email">
            <input class="signup-input" id="signin-password" type="text" name="signin-password" placeholder="Your password">
            <button class="signup-button" type="submit" name="button">Log In</button>
        </form>

    </div>
</div>



<!-- ============================================  -->
<?php include(COMPONENTS_PATH . '/footer.php'); ?>

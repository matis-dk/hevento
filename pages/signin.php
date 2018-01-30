<?php require_once('../../private/initialize.php'); ?>
<?php include(COMPONENTS_PATH . '/header.php'); ?>
<!-- ============================================  -->


<div class="main-signin">
    <div class="signin-container">
        <h2 class="signin-h2">Log In</h2>
        <form class="signin-form" action="inc/user-signin.php" method="post">
            <label class="signup-label" for="signin-username">Username / email</label>
            <label class="signup-label" for="signin-password">Password</label>
            <input class="style-input" required id="signin-username" type="text" name="signin-username" placeholder="Your email">
            <input class="style-input" required id="signin-password" type="password" name="signin-password" placeholder="Your password">
            <button class="style-button" type="submit" name="button">Log In</button>
        </form>

    </div>
</div>



<!-- ============================================  -->
<?php include(COMPONENTS_PATH . '/footer.php'); ?>

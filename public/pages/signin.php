<?php require_once('../../private/initialize.php'); ?>
<?php include(COMPONENTS_PATH . '/header.php'); ?>
<!-- ============================================  -->


<div class="main-container main-signin">
    <div class="signin-container">
        <h2 class="signin-h2">Log In</h2>
        <form class="signin-form" action="inc/user-signin.php" method="post">
            <div class="signin-element">
                <label class="style-input-label" for="signin-username">Username / email</label>
                <input class="style-input" required id="signin-username" type="text" name="signin-username" placeholder="Your email">
            </div>
            <div class="signin-element">
                <label class="style-input-label" for="signin-password">Password</label>
                <input class="style-input" required id="signin-password" type="password" name="signin-password" placeholder="Your password">
            </div>
            <button class="style-button" type="submit" name="button">Log In</button>
        </form>
        <h5 class="style-link-note">Already have an account? <a href="#">Log in here</a> </h5>
    </div>
</div>



<!-- ============================================  -->
<?php include(COMPONENTS_PATH . '/footer.php'); ?>

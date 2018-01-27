<?php require_once('../../private/initialize.php'); ?>
<?php include(COMPONENTS_PATH . '/header.php'); ?>
<!-- ============================================  -->



<div class="main-signup">
    <div class="signup-container">
        <div class="signup-formular">
            <h2 class="signup-h2">Sign Up</h2>
            <form class="signup-form" action="index.html" method="post">
                <input class="signup-input" spellcheck="false" id="signup-fullname"  type="text" name="user_fullname" placeholder="Fullname">
                <input class="signup-input" spellcheck="false" id="signup-email"  type="email" name="user_email" placeholder="Email">
                <input class="signup-input" spellcheck="false" id="signup-password"  type="password" name="user_password" placeholder="Password">
                <input class="signup-input" spellcheck="false" id="signup-address"  type="text" name="user_address" placeholder="Address">
                <input class="signup-input" spellcheck="false" id="signup-town"  type="text" name="user_town" placeholder="Town">
                <input class="signup-input" spellcheck="false" id="signup-zip"  type="text" name="user_zip" placeholder="Zip">
                <input class="signup-input" spellcheck="false" id="signup-phone"  type="text" name="user_phone" placeholder="Phone">
                <button class="signup-button" id="signup-button" type="submit" name="submit">Sign up</button>
            </form>
            <h5>Already have an account?<a href="#">Log in now›</a></h5>
        </div>
    </div>
    <section class="full-section signup-section">
        <div class="fixed-section signup-fixed">
            <figure>
                IMAGE
            </figure>
            <div class="signup-description">
                <h3>Registered now</h3>
                <p>Proin justo sem, rhoncus ut bibendum vel, vulputate nec metus. Donec sollicitudin fringilla.</p>
            </div>
            <div class="signup-notifications">
                <h3>Notifications</h3>
                <p>SMS Messages</p>
                <p>Get Email before event start</p>
                <p>Login too see your subscription</p>
            </div>
        </div>
    </section>
</div>




<!-- ============================================  -->
<?php include(COMPONENTS_PATH . '/footer.php'); ?>

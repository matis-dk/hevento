<?php require_once('../../private/initialize.php'); ?>
<?php include(COMPONENTS_PATH . '/header.php'); ?>
<!-- ============================================  -->



<div class="main-signup">
    <div class="signup-container">
        <div class="signup-formular">
            <h2 class="signup-h2">Sign Up</h2>
            <form class="signup-form" action="/hevento/private/db/db_signup.php" method="post">
                <input class="style-input" required spellcheck="false" value="" id="signup-fullname"  type="text" name="user_fullname" placeholder="Fullname">
                <input class="style-input" required spellcheck="false" value="" id="signup-email"  type="email" name="user_email" placeholder="Email">
                <input class="style-input" required spellcheck="false" value="" id="signup-password"  type="password" name="user_password" placeholder="Password" minlength="8">
                <input class="style-input" required spellcheck="false" value="" id="signup-address"  type="text" name="user_address" placeholder="Address">
                <input class="style-input" required spellcheck="false" value="" id="signup-zip"  type="text" name="user_zip" placeholder="Zip">
                <input class="style-input" required spellcheck="false" value="" id="signup-town"  type="text" name="user_town" placeholder="Town">
                <input class="style-input" required spellcheck="false" value="" id="signup-phone"  type="tel" name="user_phone" placeholder="Phone">
                <button class="style-button" id="signup-button" type="submit" name="submit" autocomplete="tel">Sign up</button>
            </form>
            <h5>Already have an account?<a href="#">Log in now›</a></h5>
        </div>
    </div>
    <section class="full-section signup-section">
        <div class="fixed-section signup-fixed">
            <figure class="signup-figure">
                <img class="signup-img" src="/hevento/public/assets/images/signup-img.svg" alt="Hevento and good mood">
            </figure>
            <div class="signup-description">
                <h3>Registered now</h3>
                <p>Proin justo sem, rhoncus ut bibendum vel, vulputate nec metus. Donec sollicitudin fringilla.</p>
                <p>Duis aute irure dolor in eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="signup-notifications">
                <h3>Connect with Hevento</h3>
                <div class=""><i class="fa fa-mobile" aria-hidden="true"></i><a>SMS service</a></div>
                <div class=""><i class="fa fa-envelope-o" aria-hidden="true"></i><a>Email before event start</a></div>
                <div class=""><i class="fa fa-laptop" aria-hidden="true"></i><a>Login user interface</a></div>
            </div>
        </div>
    </section>
</div>
<script> console.log("aa")</script>



<!-- ============================================  -->
<?php include(COMPONENTS_PATH . '/footer.php'); ?>

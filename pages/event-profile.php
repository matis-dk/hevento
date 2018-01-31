<?php require_once('../../private/initialize.php'); ?>
<?php include(COMPONENTS_PATH . '/header.php'); ?>
<!-- ============================================  -->

<?php

$eventid_sanitized = filter_input(INPUT_GET, 'eventid', FILTER_SANITIZE_STRING);

$event_data = getEventById($eventid_sanitized);

echo "<pre>";
print_r($event_data);
echo "</pre>";

echo "===============";

?>


<div class="main-eventprofile">
    <div class="eventprofile-container">
        <div class="eventprofile-leftsection">
            <div class="eventprofile-section">
                <h2 class="eventprofile-title">Arrangement for Fysioterapeuter</h2>
                <p class="eventprofile-category">Kategori</p>
            </div>
            <ul class="eventprofile-section eventprofile-list">
                <li class="eventprofile-address"><i class="fa fa-map-marker" aria-hidden="true"></i>Badung 6700, Esbjerg</li>
                <li class="eventprofile-duration"><i class="fa fa-clock-o" aria-hidden="true"></i>2 timer i alt</li>
                <li class="eventprofile-food"><i class="fa fa-cutlery" aria-hidden="true"></i>Mad og drikke</li>
                <li class="eventprofile-language"><i class="fa fa-comments-o" aria-hidden="true"></i>Dansk</li>
            </ul>
            <div class="eventprofile-section">
                <div class="">
                    <strong> Om arrangementet </strong>
                    <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                </div>
                <br>
                <div class="">
                    <strong> Meetup  </strong>
                    <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class="eventprofile-rightsection">
            <div class="eventprofile-section">
                COVER
            </div>
            <div class="eventprofile-section eventprofile-hostsection">
                <img class="eventprofile-host-image" src="" alt="">
                <h2 class="eventprofile-host-name">Morten Zeitgeist</h2>
                <p class="eventprofile-host-description">Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="eventprofile-section eventprofile-datesection">
                <h3 class="eventprofile-datetime">13:00</h3>
                <h1 class="eventprofile-dateday">28</h1>
                <h3 class="eventprofile-datemonth">September</h3>
            </div>
            <div class="eventprofile-section">
                KALENDAR
            </div>
        </div>
    </div>
</div>

<!-- ============================================  -->
<?php include(COMPONENTS_PATH . '/footer.php'); ?>

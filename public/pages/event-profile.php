<?php require_once('../../private/initialize.php'); ?>
<?php include(COMPONENTS_PATH . '/header.php'); ?>
<!-- ============================================  -->

<?php

$eventid_sanitized = filter_input(INPUT_GET, 'eventid', FILTER_SANITIZE_STRING);

$event_data = getEventById($eventid_sanitized);

// logP($event_data);

?>


<div class="main-container">
    <div class="main eventprofile">
        <div class="eventprofile-leftsection">
            <div class="eventprofile-section">
                <h2 class="eventprofile-title"><?php echo $event_data['event_title'] ?></h2>
                <p class="eventprofile-category"><?php echo $event_data['event_category_type'] ?></p>
            </div>
            <ul class="eventprofile-section eventprofile-list">
                <li class="eventprofile-address"><i class="fa fa-map-marker" aria-hidden="true"></i>Badung 6700, Esbjerg</li>
                <li class="eventprofile-duration"><i class="fa fa-clock-o" aria-hidden="true"></i>2 timer i alt</li>
                <li class="eventprofile-food"><i class="fa fa-cutlery" aria-hidden="true"></i>Mad og drikke</li>
                <li class="eventprofile-language"><i class="fa fa-comments-o" aria-hidden="true"></i>Dansk</li>
            </ul>
            <div class="eventprofile-section">
                    <?php echo html_entity_decode($event_data['event_description']) ?>
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
            <div class="eventprofile-section eventprofile-calendarsection">
                <div id="event-kalendar">
                    <link rel="stylesheet" href="../node_modules/flatpickr/dist/flatpickr.css">
                    <script src="../node_modules/flatpickr/dist/flatpickr.js"></script>
                    <script type="text/javascript">
                        window.onload = function () {
                            var eventKalendar       = document.getElementById('event-kalendar');
                            flatpickr(eventKalendar, {
                                defaultDate: ["<?php echo getDateFull($event_data['event_date']); ?>"],
                                inline: true
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================  -->
<?php include(COMPONENTS_PATH . '/footer.php'); ?>

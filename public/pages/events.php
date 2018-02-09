<?php require_once('../../private/initialize.php'); ?>
<?php include(COMPONENTS_PATH . '/header.php'); ?>
<!-- ============================================  -->

<?php

    $allEvents = getEventsAll();
    $allAddresses = getAddresses($allEvents);

    logP($allAddresses);
 ?>

<div>
    <div>
        <nav id="events-navigation">
            <div id="events-layout">
                <figure id="events-layout-toggle" class="icon-nav-icon-layout"></figure>
                <div id="events-layout-options">
                    <span class="events-nav-icons icon-nav-icon-list" data-layout="list"></span>
                    <span class="events-nav-icons icon-nav-icon-map" data-layout="map"></span>
                    <span class="events-nav-icons icon-nav-icon-split" data-layout="split"></span>
                </div>
            </div>
        </nav>
        <div id="events-data" class="events-data-split">
            <div id="events-list">
                <ul id="events-list-ul">
                    <?php

                    foreach ($allEvents as $i) {
                        $event_category_type    = $i["event_category_type"];
                        $event_title            = $i["event_title"];
                        $event_price            = $i["event_price"];
                        $event_date             = $i["event_date"];
                        $event_id               = $i["event_id"];
                        $event_cover            = $i["event_cover"] ? $i["event_cover"] : "default.png";

                        include(PRIVATE_PATH . '/components/event-item.php');
                    }

                    ?>
                </ul>
            </div>
            <div id="events-map">
                <script async defer	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCf3mRQokKB3FL9iowFp7ERIY8apfl61jM&callback=createMap"></script>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var storeCoordinates;

    function createMap () {
        var string = baseURL + '/pages/data/api.php?addresses=all';

        (function getAddresses () {
            fetch(string)
                .then(response => response.json())
                .then(allAddresses => initMap(allAddresses, true))
                .catch(err => console.dir(err))
        })();
    }
</script>


<script type="text/javascript">
    (function () {
        var eventsLayout        =   document.getElementById('events-layout');
        var eventsLayoutDrop    =   document.getElementById('events-layout-options');
        var eventsData          =   document.getElementById('events-data');

        var layoutSettings = {
            split: "events-data-split",
            list: "events-data-list",
            map: "events-data-map"
        }

        eventsLayout.addEventListener('click', toggleEventdropdown);
        eventsLayoutDrop.addEventListener('click', toggleEventlayout);

        function toggleEventdropdown(e) {
            eventsLayoutDrop.classList.toggle('layout-options-active');
        }

        function toggleEventlayout (e) {
            var setting = e.target.getAttribute("data-layout");
            eventsData.className = layoutSettings[setting];
            createMap();
        }

    })();
</script>

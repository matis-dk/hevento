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
                <script>
                fetch('http://hevento/pages/data/event-addresses.php')
                    .then(response => response.json())
                    .then(json => console.dir(json))



                    function initMap() {

                        var mapCanvas = document.getElementById("events-map");

                        // Styling
                        var gmStyle = [{
                                    "featureType": "administrative.country",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative.country",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        },
                                        {
                                            "hue": "#ff0000"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative.country",
                                    "elementType": "geometry.stroke",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative.country",
                                    "elementType": "labels",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative.country",
                                    "elementType": "labels.text",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative.country",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative.country",
                                    "elementType": "labels.text.stroke",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative.country",
                                    "elementType": "labels.icon",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        },
                                        {
                                            "color": "#c76868"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative.locality",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative.land_parcel",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative.land_parcel",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "landscape.man_made",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi",
                                    "elementType": "labels",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi.park",
                                    "elementType": "labels.icon",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road",
                                    "elementType": "labels",
                                    "stylers": [
                                        {
                                            "visibility": "simplified"
                                        },
                                        {
                                            "lightness": 20
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "hue": "#ff8600"
                                        },
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "labels",
                                    "stylers": [
                                        {
                                            "visibility": "simplified"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.arterial",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "hue": "#fad959"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.arterial",
                                    "elementType": "labels",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.local",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "visibility": "simplified"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.local",
                                    "elementType": "labels",
                                    "stylers": [
                                        {
                                            "visibility": "simplified"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "transit",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "hue": "#a1cdfc"
                                        },
                                        {
                                            "saturation": 30
                                        },
                                        {
                                            "lightness": 49
                                        }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                }
                            ];

                        // Settings
                        var gmOptions = {
                            zoom: 7,
                            center: {lat: 56.35, lng: 10.5},
                            disableDefaultUI: true,
                            styles: gmStyle

                        };

                        var bounds = new google.maps.LatLngBounds();
                        var map = new google.maps.Map(mapCanvas, gmOptions);

                        // Display multiple markers on a map
                        var infoWindow = new google.maps.InfoWindow(), i;

                        // Google maps markers coordinates from address


                        // Tooltip content
                        function infoContent (member) {
                            return `
                                <div class="info_content" id="google-popup">
                                    <h3>${member.name.textContent}</h3>
                                    ${createATag(member.phone, "phone", "tel:")}
                                    ${createATag(member.email, "envelope", "mailto:")}
                                    ${createATag(member.web, "globe")}
                                </div>`;
                        }

                            function createATag (content, icon, linkText) {
                                if (!content) return `<span />`;
                                if (!linkText) linkText = "";
                                var data = content.textContent;
                                return `<a class="fa fa-${icon}" href="${linkText + data}">
                                            <span class="info_content_text">${data}</span>
                                        </a><br />`;
                            }


                        // Loop through our array of markers & place each one on the map
                        for( i = 0; i < markers.length; i++ ) {
                                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                                bounds.extend(position);
                                marker = new google.maps.Marker({
                                        position: position,
                                        map: map,
                                        title: markers[i][0],
                                        icon: {
                                            url: "http://www.pvhc.net/img44/adavohjvtkmaaewhudrj.png",
                                            scaledSize: new google.maps.Size(25, 38.75)
                                        }
                                    });

                                    // Allow each marker to have an info window
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infoWindow.setContent(infoContent(markers[i][0]));
                                            infoWindow.open(map, marker);
                                        }
                                    })(marker, i));

                            }

                        // Getting geo coordinates from an address
                        function getLocation (memberInfo) {
                            if (memberInfo.length == 0) return;

                            Promise.all(memberInfo.map((i) => getGeo(i[0], i[1])) )
                                .then((value) => {
                                    initMap(value)
                                })
                        }

                        function getGeo (member, address) {
                            return new Promise (function (resolve, reject) {

                                var geocoder = new google.maps.Geocoder();
                                geocoder.geocode({"address": address }, geoCallback);

                                function geoCallback (results) {
                                    var position = [member, results[0].geometry.location.lat(), results[0].geometry.location.lng()];
                                    resolve(position);
                                }
                            })

                        }


                        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                            google.maps.event.removeListener(boundsListener);
                        });
                    }
                </script>
                <script async defer	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCf3mRQokKB3FL9iowFp7ERIY8apfl61jM&callback=initMap"></script>
                </div>
            </div>
        </div>
    </div>
</div>


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
            console.log(e.target.getAttribute("data-layout"))
            var setting = e.target.getAttribute("data-layout");
            eventsData.className = layoutSettings[setting];
            initMap();
        }

    })();
</script>

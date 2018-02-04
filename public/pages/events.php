<?php require_once('../../private/initialize.php'); ?>
<?php include(COMPONENTS_PATH . '/header.php'); ?>
<!-- ============================================  -->


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

                    foreach (getEventsAll() as $i) {
                        $event_category_type    = $i["event_category_type"];
                        $event_title            = $i["event_title"];
                        $event_price            = $i["event_price"];
                        $event_date             = $i["event_date"];
                        $event_id               = $i["event_id"];
                        $event_cover            = $i["event_cover"];

                        include(PUBLIC_PATH . '/pages/event-item.php');
                    }

                    ?>
                </ul>
            </div>
            <div id="events-map">
                <script>
                    function initMap(markers = []) {

                        var mapCanvas = document.getElementById("events-map");

                        // Styling
                        var gmStyle = [
                              {
                                  "featureType": "all",
                                  "elementType": "labels.text",
                                  "stylers": [
                                      {
                                          "visibility": "off"
                                      }
                                  ]
                              },
                              {
                                  "featureType": "all",
                                  "elementType": "labels.icon",
                                  "stylers": [
                                      {
                                          "visibility": "off"
                                      }
                                  ]
                              },
                              {
                                  "featureType": "landscape",
                                  "elementType": "geometry.fill",
                                  "stylers": [
                                      {
                                          "color": "#f1efe8"
                                      }
                                  ]
                              },
                              {
                                  "featureType": "landscape.man_made",
                                  "elementType": "geometry.fill",
                                  "stylers": [
                                      {
                                          "visibility": "on"
                                      },
                                      {
                                          "gamma": "1.19"
                                      }
                                  ]
                              },
                              {
                                  "featureType": "landscape.man_made",
                                  "elementType": "geometry.stroke",
                                  "stylers": [
                                      {
                                          "visibility": "on"
                                      },
                                      {
                                          "gamma": "0.00"
                                      },
                                      {
                                          "weight": "2.07"
                                      }
                                  ]
                              },
                              {
                                  "featureType": "road.highway",
                                  "elementType": "geometry.fill",
                                  "stylers": [
                                      {
                                          "color": "#0e90b2"
                                      }
                                  ]
                              },
                              {
                                  "featureType": "road.highway",
                                  "elementType": "geometry.stroke",
                                  "stylers": [
                                      {
                                          "color": "#0e90b2"
                                      }
                                  ]
                              },
                              {
                                  "featureType": "water",
                                  "elementType": "geometry.fill",
                                  "stylers": [
                                      {
                                          "color": "#33ccff"
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
                        map = new google.maps.Map(mapCanvas, gmOptions);


                        // Display multiple markers on a map
                        var infoWindow = new google.maps.InfoWindow(), marker, i;

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
                                            url: "http://danskehestefysioterapeuter.localhost/wp-content/uploads/2018/01/googlemapspin3.png",
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

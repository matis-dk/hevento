var storeCoordinates;

function initMap(allAddresses, cacheCoordinates) {

    // Creating map
    var mapCanvas = document.getElementById("events-map");

    var map = new google.maps.Map(mapCanvas, gmOptions);

    // Checking if it should use stored coordinates and if they exist
    if (storeCoordinates) {
        addMarkers(storeCoordinates, map);
        return;
    }

    // Getting coordinates from addresses
    if (allAddresses) {
        getLocation(allAddresses)
            .then(allCoordinates => {
                if (cacheCoordinates) {storeCoordinates = allCoordinates};
                console.log(allCoordinates)
                addMarkers(allCoordinates, map);
            })
    }

}


// ========================= TOOLTIP =========================
function infoContent () {
    return `
        <div class="info_content" id="google-popup">
            <h3>DOUBLE TROUBLE</h3>
        </div>`;
}


// ======================= GEO LOCATION =======================
function getLocation (addresses) {
    if (addresses.length == 0) return;

    return Promise.all(addresses.map((i) => getGeo(i)) )
        .then((coordinates) => coordinates)
}

function getGeo (address) {
    return new Promise (function (resolve, reject) {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({"address": address }, geoCallback);

        function geoCallback (results) {
            var coordinates = [results[0].geometry.location.lat(), results[0].geometry.location.lng()];
            resolve(coordinates);
        }
    })
}


// ========================= MARKERS =========================
function addMarkers (allCoordinates, map) {

    for(var i = 0; i < allCoordinates.length; i++ ) {

            var position    = new google.maps.LatLng(allCoordinates[i][0], allCoordinates[i][1]);
            var infoWindow  = new google.maps.InfoWindow();
            var bounds      = new google.maps.LatLngBounds();

            bounds.extend(position);
            marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: "YA",
                    icon: {
                        url: "http://www.codeshare.co.uk/images/blue-pin.png",
                        scaledSize: new google.maps.Size(25, 38.75)
                    }
                });

                // Allow each marker to have an info window
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoContent());
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

    }

    //now fit the map to the newly inclusive bounds (centering around markers)
    map.fitBounds(bounds);

    //(optional) restore the zoom level after the map is done scaling
    var listener = google.maps.event.addListener(map, "idle", function () {
        map.setZoom(7);
        google.maps.event.removeListener(listener);
    });


}



// ========================= STYLING =========================
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

// ======================== SETTINGS ========================
var gmOptions = {
    zoom: 7,
    center: {lat: 55.75, lng: 10.5},
    disableDefaultUI: true,
    styles: gmStyle
};

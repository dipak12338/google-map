<!DOCTYPE html>
<html>
<head>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
<h3>My Google Maps Demo</h3>
<div id="map"></div>

<script>

    // In the following example, markers appear when the user clicks on the map.
    // The markers are stored in an array.
    // The user can then click an option to hide, show or delete the markers.
    var map;
    var markers = [];

    function initMap() {
        var haightAshbury = {lat: 37.769, lng: -122.446};

        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: haightAshbury,
            mapTypeId: 'terrain'
        });

        // This event listener will call addMarker() when the map is clicked.
        map.addListener('click', function(event) {
            addMarker(event.latLng);
            alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() );
        });

        // Adds a marker at the center of the map.
        addMarker(haightAshbury);
    }

    // Adds a marker to the map and push to the array.
    function addMarker(location) {
        clearMarkers();
        markers = [];
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
        markers.push(marker);
    }

    // Sets the map on all markers in the array.
    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

    // Removes the markers from the map, but keeps them in the array.
    function clearMarkers() {
        setMapOnAll(null);
    }

    // Shows any markers currently in the array.
    function showMarkers() {
        setMapOnAll(map);
    }

    // Deletes all markers in the array by removing references to them.
    function deleteMarkers() {
        clearMarkers();
        markers = [];
    }
</script>


<script>
//
//    function initMap() {
//        var map = new google.maps.Map(document.getElementById('map'), {
//            zoom: 4,
//            center: {lat: -25.363882, lng: 131.044922 }
//        });
//
//        map.addListener('click', function(e) {
//            placeMarkerAndPanTo(e.latLng, map);
//        });
//    }
//
//    function placeMarkerAndPanTo(latLng, map) {
//        var marker = new google.maps.Marker({
//            position: latLng,
//            map: map
//        });
//        map.panTo(latLng);
//    }

//    function initMap() {
//
//
//        var uluru = {lat: -25.363, lng: 131.044};
//        var map = new google.maps.Map(document.getElementById('map'), {
//            zoom: 4,
//            center: uluru
//        });
////        var marker = new google.maps.Marker({
////            position: uluru,
////            map: map
////        });
//
//        google.maps.event.addListener(map, 'click', function(event) {
//            placeMarker(event.latLng);
//        });
//
//        function placeMarker(location) {
//            var marker = new google.maps.Marker({
//                position: location,
//                map: map
//            });
//        }
//    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAWabm_B41gTCnZWd8njrlmxK97jeIs30&callback=initMap">
</script>
</body>
</html>
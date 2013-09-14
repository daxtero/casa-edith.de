var gmegMap;
var gmegMarker;
var gmegInfoWindow;
var gmegLatLng;
function gmegInitializeMap() {
    gmegLatLng = new google.maps.LatLng(46.1522, 12.13999);
    gmegMap = new google.maps.Map(document.getElementById('gmeg_map_canvas'), {
        zoom: 13,
        center: gmegLatLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    gmegInfoWindow = new google.maps.InfoWindow({
        content: '<b>Casa Edith</b><br>Via Bolago 124<br>32036 Sedico'
    });
    gmegMarker = new google.maps.Marker({
        map: gmegMap,
        position: gmegLatLng
    });

    google.maps.event.addListener(gmegMarker, 'click', function() {
        gmegInfoWindow.open(gmegMap, gmegMarker);
    });

    gmegInfoWindow.open(gmegMap, gmegMarker);
}
google.maps.event.addDomListener(window, 'load', gmegInitializeMap);

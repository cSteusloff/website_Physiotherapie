$(document).ready(function () {

    initMap();

    function initMap()
    {
        var myPosition = new google.maps.LatLng(52.5507149,13.3893247);

        var mapOptions={
            zoom: 15,
            center: myPosition,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        };

        var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myPosition,
            map: map,
            title: 'Roll-over-Text'
        });

        var infowindow = new google.maps.InfoWindow({
            content: '<p>Titel</p><p>  Beschreibungstext  </p>'
        });

        google.maps.event.addListener(marker, 'hover', function() {
            infowindow.open(map,marker);
        });

    }


});

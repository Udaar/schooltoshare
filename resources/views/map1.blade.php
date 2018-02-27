<div id="map"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6yohSe89WiHJXhZCUA6wSNQnCEzySQVc"></script>

<script>
    $(function(){
        $('.select2').select2();
        var map;
        var marker;
        var infowindow;
        var center;
        var positions;

        function initialize() {
            center={lat: 24.461478, lng: 54.381655};
            positions=[];
            @foreach($buildings as $building)
            positions.push({
                position:{lat: parseFloat("{{$building->gps_lat}}"), lng: parseFloat("{{$building->gps_long}}") },
                url:"/show/school/{{$building->id}}"
            });
                
            @endforeach	
            
            var mapOptions = {
            zoom: 13,
            center: center
        };

        //position={lat: 30.040106, lng: 31.242922};
        console.log('position',positions);
        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        for(var i=0; i<positions.length; i++){
            marker = new google.maps.Marker({
                draggable: false,
                map: map,
                position: positions[i].position,
                url:positions[i].url
            });
            google.maps.event.addListener(marker, 'click', function () {
                window.location.href = marker.url
                });
        }

        infowindow = new google.maps.InfoWindow({});
    
      

        function reloadMarkers() {

            // Loop through markers and set map to null for each
            for (var i=0; i<markers.length; i++) {

                markers[i].setMap(null);
            }

            // Reset the markers array
            markers = [];

            // Call set markers to re-add markers
            setMarkers(beaches);
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infowindow.setPosition(position);
            marker.setPosition(position);
            map.setCenter(position);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    });
</script>
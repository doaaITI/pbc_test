// Initialize and add the map
function initAutocomplete() {
    // The location of Uluru
    var uluru = {lat:27.189341, lng:31.176371};
    // The map, centered at Uluru
    var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 10, center: uluru, mapTypeId: 'roadmap'});

       // Create the search box and link it to the UI element.
       var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
              searchBox.setBounds(map.getBounds());
            });


    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map, title: 'address',
      draggable:true,});



                ////////////////////////

        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

            // Clear out the old markers.
            markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];
          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      google.maps.event.addListener(marker, 'dragend', function(marker){
        var latLng = marker.latLng;
        currentLatitude = latLng.lat();
        currentLongitude = latLng.lng();

        console.log(currentLatitude);
        console.log(currentLongitude);
     });
    }

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcFs3V4uVIrbgh-hG3y9XGPHbncdqy7Ds&libraries=places&callback=initAutocomplete"
      type="text/javascript"></script>

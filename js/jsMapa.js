 function initMap() {
        var mapDiv = document.getElementById('map');
		var myLatLng = {lat: 21.887602, lng: -102.249644};
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 21.887602, lng: -102.249644},
          zoom: 17
        });
		var marker = new google.maps.Marker({
    		position: myLatLng,
    		map: map,
    		title: 'SAEC'
  			});
      }


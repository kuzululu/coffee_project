<div id="map"></div>
			<script type="text/javascript">
					function initMap(){
		// let location = {lat: 14.468549, lng: 120.980587 }; //object data type
		let location = {lat: 15.975803 , lng: 120.570693};
		let map = new google.maps.Map(document.querySelector("#map"), {
			zoom: 15,
			center: location,
			mapTypeId: google.maps.MapTypeId.HYBRID
			// draggable: false
		});

		let popContent = 'aruego street poblacion<br> urdaneta city pangasinan';

		let info = new google.maps.InfoWindow({
			content: popContent
		});

		let marker = new google.maps.Marker({
			position: location,
			map: map,
			title: 'Saber Maximoff'
		});

		marker.addListener('mouseover', function(){
			info.open(map, marker);
		});

		}
		    </script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrzBRd-5Zwq-ABwR28gRis9rqqNUwdN9E&callback=initMap" type="text/javascript"></script>
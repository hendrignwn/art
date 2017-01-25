jQuery(document).ready(function () {

	//set your google maps parameters
	var $latitude = 40.716304, //Visit http://www.latlong.net/convert-address-to-lat-long.html for generate your Lat. Long.
			$longitude = -73.995763,
			$map_zoom = 16 /* ZOOM SETTING */

	//google map custom marker icon 
	var $marker_url = '/img/pin.png';

	//we define here the style of the map
	var style = [{
			"stylers": [{
					"hue": "#03a9f4"
				}, {
					"saturation": 10
				}, {
					"gamma": 2.15
				}, {
					"lightness": 12
				}]
		}];

	//set google map options
	var map_options = {
		center: new google.maps.LatLng($latitude, $longitude),
		zoom: $map_zoom,
		panControl: true,
		zoomControl: true,
		mapTypeControl: true,
		streetViewControl: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		styles: style
	}
	//inizialize the map
	var map = new google.maps.Map(document.getElementById('myMap'), map_options);
	//add a custom marker to the map                
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng($latitude, $longitude),
		map: map,
		visible: true,
		icon: $marker_url
	});

	var contentString = '<div id="mapcontent">' + '<p>materialize, 1355 Market Street, San Francisco.</p></div>';
	var infowindow = new google.maps.InfoWindow({
		maxWidth: 320,
		content: contentString
	});

	google.maps.event.addListener(marker, 'click', function () {
		infowindow.open(map, marker);
	});
});
function myMap() {
	var venueLat = 43.6333804
	var venueLong = -80.41617458
	var venue = new google.maps.LatLng(venueLat, venueLong);
	var hotelLat = 43.5065295
	var hotelLong = -80.5550877
	var hotel = new google.maps.LatLng(hotelLat, hotelLong)
	var center = new google.maps.LatLng((venueLat + hotelLat) / 2 + 0.01, (venueLong + hotelLong)/2);;
	var mapCanvas = document.getElementById("map");
	var mapOptions = {center: center, zoom: 11,mapTypeId: google.maps.MapTypeId.TERRAIN};	
	var map = new google.maps.Map(mapCanvas, mapOptions);

	var venueMarker = new google.maps.Marker({position:venue});
	venueMarker.setMap(map);	
	var venueInfo = new google.maps.InfoWindow({
		content:"<a href='https://www.google.ca/maps/place/Seedrioru+Estonian+Summer+Camp+Society/@43.6333804,-80.4595571,15z/data=!4m2!3m1!1s0x0:0xa7cc38e2ec7c69ce?sa=X&ved=0ahUKEwjG4L6L0cnXAhVJyWMKHcn1A2QQ_BIInwEwFQ' target='_blank'>Seedrioru</a>"
	});
	venueInfo.open(map,venueMarker);

	var hotelMarker = new google.maps.Marker({position:hotel});
	hotelMarker.setMap(map);
	var hotelInfo = new google.maps.InfoWindow({
		content:"<a href='https://www.google.ca/maps/place/Courtyard+by+Marriott+Waterloo+St.+Jacobs/@43.5065295,-80.5550877,15z/data=!4m5!3m4!1s0x0:0x4274d75a36d44872!8m2!3d43.5065295!4d-80.5550877' target='_blank'>Courtyard Marriott Waterloo St Jacobs</a>"
	});
	hotelInfo.open(map,hotelMarker);	
}
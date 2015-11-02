function initMap() {
  var image = '../streetview-icon.png';
  var myLatLng = {lat: 43.32595961525177, lng: -1.9743527605835265};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: myLatLng
  });

}
async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-xHywJR4MbOGnUPJWdEoaW5gSe4KtNpA&signed_in=true&callback=initMap";

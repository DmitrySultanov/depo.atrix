// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 11,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(40.6700, -73.9400), // New York

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"all","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"administrative.province","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"administrative.province","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape.man_made","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#aadd55"}]},{"featureType":"road","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"transit","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"transit.station","elementType":"labels.text","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#0099dd"}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.6700, -73.9400),
        map: map,
        title: 'Snazzy!'
    });
}
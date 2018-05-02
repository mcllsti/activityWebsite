
$(function(){
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(56.157672, -4.6428314); 
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  
   var contentString = '<h1>Murr Activity Center</h1>';

			
			        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
  
  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
  
          marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
})



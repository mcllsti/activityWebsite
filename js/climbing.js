

$(function(){
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(56.149999, -4.6379149); 
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  map.data.loadGeoJson('js/climb.geojson');
 





        map.data.addListener('mouseover', function(event) {
          map.data.revertStyle();
          map.data.overrideStyle(event.feature, {strokeWeight: 8});
        });

        map.data.addListener('mouseout', function(event) {
          map.data.revertStyle();
        });
 
 
    var infoWindow = new google.maps.InfoWindow({
        content: "",

    });

    map.data.addListener('click', function (event) {


        infoWindow.setContent("<h4>" + event.feature.getProperty('Name') + "</h4>" + "Difficulty: " + event.feature.getProperty('Difficulty') + "</br></br>" + event.feature.getProperty('Description') );

        var anchor = new google.maps.MVCObject();
        anchor.setValues({ 
            position: event.latLng,
            anchorPoint: new google.maps.Point(0, 0)
        });

        infoWindow.open(map, anchor);

    });
 
 
})






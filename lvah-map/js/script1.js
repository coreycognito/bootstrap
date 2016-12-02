      
    var map;
    var geocoder;
    var addresses = new Array();
    var image = 'marker.png';
    addresses[0] = "100 Sunrise Avenue, Toronto, Ontario";
    addresses[1] = "32 Bridewell Crescent, Richmond Hill, Ontario, L4C 9C2";
    addresses[2] = "4645 James Austin Drive, Mississauga Ontario";
    addresses[3] ="1 Nadmarc Court, Angus, Ontario";
    addresses[4] ="Greenwood Drive, Angus, Ontario";

      var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      'Aboriginal people of the area. It has many springs, waterholes, '+
      'rock caves and ancient paintings. Uluru is listed as a World '+
      'Heritage Site.</p>'+
      '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'http://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      '(last visited June 22, 2009).</p>'+
      '</div>'+
      '</div>';





  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var styles =[
    {
      "stylers": [
        { "lightness": 34 },
        { "gamma": 0.49 },
        { "saturation": -83 }
      ]
    },{
      "stylers": [
        { "visibility": "on" }
      ]
    }
  ]
  
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});


      function initialize() {

        var mapOptions = {
          center: new google.maps.LatLng(43.483069, -79.723573),
          zoom: 11
        };
            map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
              //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');
            drawMarkers();
      }

      function getLatLong(addy,count){
        geocoder = new google.maps.Geocoder();
    var address = addy;

    geocoder.geocode( { 'address': address}, function(results, status) {

      if (status == google.maps.GeocoderStatus.OK) {
        var latitude = results[0].geometry.location.lat();
        var longitude = results[0].geometry.location.lng();
        //alert(results[0].geometry.location)
              var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon:image,
                    title:addresses[count]
                });
              google.maps.event.addListener(marker, 'click', function() {
                        infowindow.content=contentString
                        infowindow.open(map,marker);

                        });
      } 
    }); 
      }

      function drawMarkers(){

        for(i=0;i<addresses.length;i++){

          getLatLong(addresses[i],i);
        }
      }
      google.maps.event.addDomListener(window, 'load', initialize);

      /*

var styles =[
  {
    "stylers": [
      { "lightness": 34 },
      { "gamma": 0.49 },
      { "saturation": -83 }
    ]
  },{
    "stylers": [
      { "visibility": "on" }
    ]
  }
]

      */
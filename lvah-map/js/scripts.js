
//INITIAL VARIABLES
var map;
var geocoder;
var xmlDoc;
var addresses = new Array();
var image = 'images/marker.png';
var image2 = 'images/marker2.png';
var infoPopup;
var startLatitude=43.637707;
var startLongitude=-79.418746;  
var gmarkers = new Array();

// Something keeps caching
var d = new Date();
var file = "communities.xml?nocache=" + d;

// MAP STYLE (Greyed out look)
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
  
var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});

// GET XML AND GET LAT LONG FOR EACH ADDRESS
function initialize() {

        //get xml
        if (window.XMLHttpRequest){
        xhttp=new XMLHttpRequest();
        }else{ // code for IE5 and IE6
        xhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.open("GET", file, false);
        xhttp.send();
        xmlDoc=xhttp.responseXML;

        //create map
        var mapOptions = {
          center: new google.maps.LatLng(startLatitude, startLongitude),
          zoom: 16,
		  scrollwheel: false,
		  
        };
        map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);
        
        //associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');


        var ga=xmlDoc.getElementsByTagName("googleaddress");

        for (i=0;i<ga.length;i++){
        var addr=ga[i].childNodes[0].nodeValue;
        renderMarkers(addr,i);
        }
  }

// RENDER MARKERS AND SET UP ON CLICK EVENTS
function renderMarkers(addy,count){
	
	//determine marker icon
	var item=xmlDoc.getElementsByTagName("item");
	// default image
	var iconimage=image;
	/*
	if(item[count].getAttribute("icontype")=="grey"){
		var iconimage=image;
	}else{
		var iconimage=image2;
	}
	*/
	
	//geocode latitude and longitude
	geocoder = new google.maps.Geocoder();
	var address = addy;
	geocoder.geocode( { 'address': address}, function(results, status) {
		
		if (status == google.maps.GeocoderStatus.OK) {
			var latitude = results[0].geometry.location.lat();
			var longitude = results[0].geometry.location.lng();
			
			//render marker
			var marker = new google.maps.Marker({
				map: map,
				position: results[0].geometry.location,
				icon:iconimage,
				title:addresses[count]
			 });
			//bind on click event
			google.maps.event.addListener(marker, 'click', function() {
				
				//close info box if exists
				if(infoPopup){
					infoPopup.close();
				}
				
				// reset all markers and change current marker icon
				for (var i=0; i<gmarkers.length; i++) {
					gmarkers[i].setIcon(image);
				}
				marker.setIcon(image2);
				
				//render infobox
				var aa=xmlDoc.getElementsByTagName("title");
				var ba=xmlDoc.getElementsByTagName("image");
				var ca=xmlDoc.getElementsByTagName("address");
				var da=xmlDoc.getElementsByTagName("email");
				var ea=xmlDoc.getElementsByTagName("website");
				var la=xmlDoc.getElementsByTagName("link");
				var fa=xmlDoc.getElementsByTagName("phone");
				//infobox content
				var popupText = document.createElement("div");
				popupText.setAttribute('class', 'infobox'); 
				popupText.innerHTML="<div class='innerlogo'><img src='"+ba[count].childNodes[0].nodeValue+"'/></div>"
				popupText.innerHTML += ca[count].childNodes[0].nodeValue+"<br>";
				
				if(fa[count].childNodes[0]){
					popupText.innerHTML += fa[count].childNodes[0].nodeValue+"<br>";
				}
				
				if(la[count].childNodes[0]){
					popupText.innerHTML +="<br><div><a href='../"+la[count].childNodes[0].nodeValue+"' target='_parent'>Register Now</a><br><br></div>"
				}
				
				if(ea[count].childNodes[0]){
					popupText.innerHTML +="<br><div><a href='../"+ea[count].childNodes[0].nodeValue+"' target='_blank'>Visit Website</a><br><br></div>"
				}
				
				popupText.innerHTML +="<div style='clear:both'></div>";
				  
				//infobox options    
				var myOptions = {
					content: popupText
					,disableAutoPan: false
					,maxWidth: 0
					,pixelOffset: new google.maps.Size(-175, -165)
					,zIndex: null
					,boxStyle: { 
						background: "url('tipbox.gif') no-repeat"
						,opacity: 0.95
						,width: "350px"
					}
					,closeBoxMargin: "12px 4px 4px 4px"
					,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
					,infoBoxClearance: new google.maps.Size(1, 1)
					,isHidden: false
					,pane: "floatPane"
					,enableEventPropagation: false
					,scrollwheel: false
				};
				infoPopup = new InfoBox(myOptions);
				infoPopup.open(map, this);
			
			}); // end addListener
			
            gmarkers.push(marker);
			
		} // end if status
	}); //end geocoder geocode
}

// HANDLE LEARN MORE BUTTON CLICK
function doLearn(c){
	var ea=xmlDoc.getElementsByTagName("website");
	window.open(ea[c].childNodes[0].nodeValue);

}

// HANDLE EMAIL BUTTON CLICK
function doEmail(c){
	var da=xmlDoc.getElementsByTagName("email");
	document.location.href = "mailto:"+da[c].childNodes[0].nodeValue;
}

google.maps.event.addDomListener(window, 'load', initialize);

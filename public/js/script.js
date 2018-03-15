// var map;
// var myLatLng;

$(document).ready(function(){


//greeting 
function greetMe(){
	var thehours = new Date().getHours();
	var themessage;
	var morning = ('GOOD MORNING');
	var afternoon = ('GOOD AFTERNOON');
	var evening = ('GOOD EVENING');

		if (thehours >= 0 && thehours < 12) {
			themessage = morning; 

		} else if (thehours >= 12 && thehours < 17) {
			themessage = afternoon;

		} else if (thehours >= 17 && thehours < 24) {
			themessage = evening;
		}

		$('.greeting').before(themessage);
}
greetMe();





// 	geoLocationInit();

// 		function geoLocationInit(){
// 			if(navigator.geolocation){
// 				navigator.geolocation.getCurrentPosition(success, fail);
// 			} else {
// 				alert('Browser not suported');
// 			}
// 		}

// 		function success(position){
// 			console.log(position);
// 			var latVal = position.coords.latitude;
// 			var lngtVal = position.coords.latitude;
// 			myLatLng = new google.maps.LatLng(latVal, lngtVal);
// 			createMap(myLatLng);
// 			nearbySearch(myLatLng,"school");
// 		}

// 		function fail(){
// 			alert("It fails");
// 		}


// 		// creates map
// 		function createMap(myLatLng){
// 	     	map = new google.maps.Map(document.getElementById('map'), {
// 	        zoom: 11,
// 	        center: myLatLng
// 			});

// 			var maker = new google.maps.Marker({
// 			position: myLatLng,
// 	        map: map,
	        
	       
// 			})
// 		}


//         //This makes the marker
//         function createMarker(latlng, icn, name) {
//         var marker = new google.maps.Marker({
//          position: latlng,
//          map: map,
//          icon: icn,
//          title: name
//         });
//        }

//        //Nearby search 
//        function nearbySearch(myLatLng,type){
//        	var request = {
// 	    location: myLatLng,
// 	    radius: '5000',
// 	    types: [type]
// 	  	};


// 		service = new google.maps.places.PlacesService(map);
// 		service.nearbySearch(request, callback);

// 		function callback(results, status) {
//   		if (status == google.maps.places.PlacesServiceStatus.OK) {
//     		for (var i = 0; i < results.length; i++) {
//       		var place = results[i];
//       		console.log(place)

//       		latlng = place.geometry.location;
// 	      	icn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
// 	      	name = place.name
// 	      	createMarker(latlng, icn, name);
// 	    	}
//   		}
// 	}
// }



}); // end document ready

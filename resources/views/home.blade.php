@extends('layouts.app3')

@section('content') <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                </div>
<h1> YOU ARE LOGGED IN!!</h1>
<script>
 
var c=0;
function promptfun(){
//static int

var text= prompt("Are you safe");
if(text=="yes")
  myvar= setTimeout(promptfun,5000); 
 else
   { 
     if(c>1)
    return soscall();
   else{ alert("invalid psd");
          c=c+1;
         return promptfun();
    }
   
 }
}

 function promptfunclear()
 {
    clearTimeout(myvar);

 }
 function soscall()
 { 
    window.open("http://127.0.0.1:8000/sms/send");
 }
  
</script>

<div style="display: flex;
  justify-content: center;">
<button style="padding: 10PX; width: 15em; height: 6em; margin: 10%;"; onclick="promptfun()"><B>START TRIP</B></button>
</BR></BR>
<button style="padding: 10PX; width: 15em;height: 6em; margin: 10%;"; onclick="promptfunclear()"><B>END TRIP</B></button>

</div>
</BR></BR>
<div style=" display: flex;
  justify-content: center;">
 <button style="padding: 10PX; width: 15em ;height: 8em;background-color: red;margin: auto"><a href="/sms/send" style="color: black;">SOS</a></button>
</div>
 
@endsection

@section('content_map') 
<div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 10.644},
          zoom: 18
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjP21ndaZmWQELvNZH7Nud6TOIQQwvaYs&callback=initMap">
    </script>

@endsection

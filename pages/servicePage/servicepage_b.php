<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page Option B</title>
    <style>
	     *{
	           margin: 0;
	           padding: 0;
	       }
	      #map{
	           height: 320px;
	           width: 324px;
	       }    
	</style>

    <!-- Link skeleton html file -->
    <?php include 'skeleton.html';?>

    <!-- Link style.css file -->
    <link rel="stylesheet" type="text/css" href="servicepage_b.css">

</head>
<body>
    <h1>Ride and Deliver</h1>

 <div class ="information">
   <div class="block">
    <label for="stores">Select a Store</label>
        <select name="cars" id="cars">
            <option value="volvo">Tim Hortons</option>
            <option value="saab">McDonald's Cafe</option>
            <option value="mercedes">Amirta's Flower Shop</option>
            <option value="audi">Sobey's Florist</option>
        </select>
    </div>
        <br>

    <div class = "block">
     <label for = "pickup">Pickup Point</label>
        <input type = "text" id="start"></input> 
    </div>
        <br>
   
    <div class = "block">
     <label for = "destination">Destination</label>
        <input type = "text" id="end"></input> 
    </div>
        <br>
    <div class = "block">
    <form action="/action_page.php">
        <label for="DateTime">Date and Time</label>
        <input type="date" id="time" name="date-time">
    </form>
    </div>
        <br>
    <button>Add to Cart</button>
</div>
<div id="map"></div>

<script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 43.65, lng: -79.38}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            locationForm.addEventListener(directionsDisplay);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9fWocUxB17ppipUTiyG7nhont6k8aldI&callback=initMap">
    </script>







</body>
</html>
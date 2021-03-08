<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page Option A</title>


    <!-- Link skeleton html file -->
    <?php include '../header/skeleton.html';?>
    <link rel="stylesheet" type="text/css" href="../header/header.css">
    
    <!-- Link style.css file -->
    <link rel="stylesheet" type="text/css" href="servicepage_a.css">


</head>
<body>

<h1>CAR RIDE SERVICE</h1>
<h2>Fill out the form to ride to your destination!</h2>

<div id="main">


<form method="post" action="../shoppingCart/shoppingcart.php">
<ul class="form-style">
  <li>
      <label class="car-models" for="car-models">Available Car Models</label>
      <select id="car-models" name="car-models" required>
      <option value="">--Please choose a car model--</option>
      <option value="Mini-Van">Mini-Van</option>
      <option value="Truck">Truck</option>
      <option value="Sedan">Sedan</option>
      <option value="Sports-Car">Sports-Car</option>
      </select>
  </li>

  <li>
    <label class="car-type-label" for="car-type">Car Type</label>
    <select id= "car-type" class="car-type" name="car-type" required>
      <option value="unset"></option>
    </select>

  </li>



    <li>
      <label for="pickup">Source Address </label><input type="text" id="start" class="field-long" placeholder="Ex: 102-1654 Victoria Park Ave, Toronto, ON, M1R 345" required/>
    </li>
    <li>
      <label for="destination">Destination Address </label><input type="text" id="end" class="field-long" placeholder="Enter destination then hit ENTER on your keyboard" required/>
    </li>
    <li>
        <label for "date">Date</label>
        <input type="date" name="date" class="field-long" required/>
    </li>
    <li>
        <label for "time">Time</label>
        <input type="time" name="time" class="field-long" in="09:00" max="18:00" required/>
    </li>

    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form>
</div>

<div id="side">
  <figure>
    <div class="car_img_wrapper">
    <img class="car_img" src="../../assets/carimages/Chrysler-Pacifica.png" alt="">
    </div>
    <figcaption></figcaption>
  </figure>

  <div id="map"></div>

</div>



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

       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       <script type="text/javascript" src="servicepage_a.js"></script>





</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page Option B</title>


    <!-- Link skeleton html file -->
    <?php include '../header/skeleton.html';?>
    <link rel="stylesheet" type="text/css" href="../header/header.css">
    
    <!-- Link style.css file -->
    <link rel="stylesheet" type="text/css" href="servicepage_b.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script>  
  $(document).ready(function(){
    $("#McDonaldsCafeTable").hide();
    $("#TimHortonsTable").hide();
    $("#CFloristTable").hide();
    $("#SFloristTable").hide();
    $("#doughPic").hide();

   
      $('div.id_100 select').on('click',function() {
        $("#McDonaldsCafeTable").hide();
    $("#TimHortonsTable").hide();
    $("#CFloristTable").hide();
    $("#SFloristTable").hide();
    $("#doughPic").hide();
         $( "#" + this.value + "Table").show();
        });
       
       $("#TimHortonsDough").on('click',function() {
          $("#doughPic").fadeIn()
         });
         $("#doughPic").hide();


        });
</script>
</head>
<body>

<h1>Ride and Deliver</h1>
<h2>Grab a Coffee and Doughnuts or some Flowers</h2>

<div id="main">


<form method="post" action="../shoppingCart/shoppingcart.php">
<ul class="form-style">
  <li>
      <label class="shop">Available Shops</label>
      <div class = "id_100">
      <select>
      <option value="">--Please choose available Shops --</option>
      <option value="TimHortons">Tim Hortons</option>
      <option value="McDonaldsCafe">McDonald's Cafe</option>
      <option value="CFlorist">Catherine's Florist Shop</option>
      <option value="SFlorist" >Sobey's Flower Corner</option>
      </select>
</div>
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

<br>
<div id="side">
<table class="table table-hover" id = "TimHortonsTable">
  <thead>
    <tr>
      <th scope="col">Items</th>
      <th scope="col">Price</th>
      <th scope="col">Add to Cart</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Sprinkle Doughnut</th>
      <td>$1.99</td>
      <td><input type="checkbox" id="TimHortonsDough"></td>
    </tr>
    <tr>
      <th scope="row">Coffee (DoubleDouble)</th>
      <td>$1.00</td>
      <td><input type="checkbox" id="coffee" ></td>
    </tr>
    <tr>
      <th scope="row">French Vanilla Cappacino</th>
      <td>$2.99</td>
      <td><input type="checkbox" id="vehicle2" ></td>
    </tr>
    <tr>
      <th scope="row">Old Fashion Plain Doughnut</th>
      <td>$1.00</td>
      <td><input type="checkbox" id="vehicle2"></td>
    </tr>
  </tbody>
</table>
<img src="../../assets/shopimages/doughnut.jpg" alt="Tim Hortons Doughnut" id="doughPic">


<div id="side0">
<table class="table table-hover" id = "McDonaldsCafeTable">
  <thead>
    <tr>
      <th scope="col">Items</th>
      <th scope="col">Price</th>
      <th scope="col">Add to Cart</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Pink Doughnut</th>
      <td>$1.00</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
    <tr>
      <th scope="row">McCoffee</th>
      <td>$1.00</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
    <tr>
      <th scope="row">Hot Chocolate</th>
      <td>$2.50</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
    <tr>
      <th scope="row">Chocolate Glazed Doughnut</th>
      <td>$1.50</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
  </tbody>
</table>
<div id="side1">
<table class="table table-hover" id="CFloristTable">
  <thead>
    <tr>
      <th scope="col">Items</th>        
      <th scope="col">Price</th>
      <th scope="col">Add to Cart</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Red Roses</th>
      <td>$23.00</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
    <tr>
      <th scope="row">Pink Flower Bouquet</th>
      <td>$25.00</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
    <tr>
      <th scope="row">Colourful Tulips Bouquet</th>
      <td>$20.50</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
    <tr>
      <th scope="row">White Roses</th>
      <td>$23.00</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
  </tbody>
</table>
<div id="side2">
<table class="table table-hover" id="SFloristTable">
  <thead>
    <tr>
      <th scope="col">Items</th>        
      <th scope="col">Price</th>
      <th scope="col">Add to Cart</th>
    </tr>
  </thead>
<tbody>
    <tr>
      <th scope="row">Bouquet of Purple Roses</th>
      <td>$23.00</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
    <tr>
      <th scope="row">Bouquet of Wild Flowers</th>
      <td>$25.00</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
    <tr>
      <th scope="row">Bouquet of Sunflowers</th>
      <td>$20.50</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
    <tr>
      <th scope="row">Bouquet of Daffodils</th>
      <td>$23.00</td>
      <td><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></td>
    </tr>
  </tbody>
</table>
 
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
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       <script type="text/javascript" src="servicepage_a.js"></script>
       
</body>
</html>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="servicepage_a.css" type="text/css">
<body style="background-color: #e1bc91;">
<?php include '../header/header.html';?>
<h1>CAR RIDE SERVICE</h1>
<h2>Fill out the form to ride to your destination!</h2>

<form>
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
      <label for="source-address">Source Address </label><input type="text" name="source" class="field-long" placeholder="Ex: 102-1654 Victoria Park Ave, Toronto, ON, M1R 345" required/>
    </li>
    <li>
      <label for="destination-address">Destination Address </label><input type="text" name="destination" class="field-long" placeholder="Ex: 102-1654 Victoria Park Ave, Toronto, ON, M1R 345" required/>
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

<img class="car_img" src="../../assets/carimages/Chrysler-Pacifica.png" alt="">



   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript" src="./servicepage_a.js"></script>

</body>
</html>

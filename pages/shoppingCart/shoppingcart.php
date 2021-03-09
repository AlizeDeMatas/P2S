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
    <link rel="stylesheet" type="text/css" href="shoppingcart.css">

    <script src="https://kit.fontawesome.com/6380b36795.js" crossorigin="anonymous"></script>

    <script>
    function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
    }
    function drop(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data));
    }
    </script>


</head>
<body>

<h1>SHOPPING CART</h1>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
  <h1>Cart</h1>

</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
  <h1>Orders</h1>

  <div>

    <div class="flex-container" id="drag1" src="ieee_mb_blue.gif" draggable="true" ondragstart="drag(event)" >
      <div>
        <img class= "images" src="../../assets/carimages/Chrysler-Pacifica.png" alt="">
      </div>
      <div>
        <h3>Chrysler Pacifica</h3>
        <p>Mini-Van</p>
        <p>$40.50/ hour drive</p>
     </div>
      <div><i class="fas fa-plus-circle"></i> <i class="fas fa-minus-circle"></i></div>
    </div>

    <div class="flex-container" id="drag2" src="ieee_mb_blue.gif" draggable="true" ondragstart="drag(event)" >
      <div>
        <img class= "images" src="../../assets/shopimages/doughnut.jpg" alt="">
      </div>
      <div>
        <h3>Tim Hortons</h3>
        <p>Sprinkle Doughnut</p>
        <p>$1.99</p>
     </div>
      <div><i class="fas fa-plus-circle"></i> <i class="fas fa-minus-circle"></i></div>
    </div>

    <div class="flex-container" id="drag3" src="ieee_mb_blue.gif" draggable="true" ondragstart="drag(event)" >
      <div>
        <img class= "images" src="../../assets/shopimages/timscoffee.jpg" alt="">
      </div>
      <div>
        <h3>Tim Hortons</h3>
        <p>Coffee (size: small)</p>
        <p>$1.00</p>
     </div>
      <div><i class="fas fa-plus-circle"></i> <i class="fas fa-minus-circle"></i></div>
    </div>





</div>




</body>
</html>

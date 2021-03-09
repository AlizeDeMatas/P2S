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

<div id="side">
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
      <div>1</div>
    </div>





</div>




</body>
</html>

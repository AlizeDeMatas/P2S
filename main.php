<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel='icon' href='./assets/images/logo.png' >


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Link style.css file -->
    <link rel="stylesheet" type="text/css" href="main.css">

      <!-- Link skeleton html file -->
    <link rel="stylesheet" type="text/css" href="./pages/header/header.css">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <title>Plan for Smart Services</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" >
          <a class="navbar-brand">
          <div>
              <img src = "./assets/images/logo.png" alt = "logo" id="logo"></div></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./main.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">System Logo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/aboutUsPage/aboutUsPage.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/contactUsPage/contactUs.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/signUpPage/signUpPage.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/shoppingCart/shoppingcart.php">Shopping Cart</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Types of Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../servicePage/servicepage_a.php">Car Ride Service</a>
                  <a class="dropdown-item" href="../servicePage/servicepage_b.php">Ride and Deliver</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <h1>Plan For Smart Services</h1>
  <h2>Please Select an Option</h2>
<div class=btnOpts>
  <button class="optionA"> Ride to a Destination</button>
  <button class="optionB"> Ride & Deliver</button>
</div>
<br>

<footer>
    <nav class="navbar fixed-bottom navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
        </div>
      </nav>
</footer>
  </body>
</html>

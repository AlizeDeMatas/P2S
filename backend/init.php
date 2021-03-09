<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Make my_db the current database
$db_selected=$conn->select_db('p2s');

// Create database if it does not exist
if (!$db_selected) {
    // If we couldn't, then it either doesn't exist, or we can't see it.
    $sql = "CREATE DATABASE p2s";
    if ($conn->query($sql) === TRUE) {
      echo "Database created successfully \n";
    } else {
      echo "Error creating database: " . $conn->error;
    }
}

mysqli_select_db($conn, 'p2s');


// sql to create user table
$sql_user = "CREATE TABLE IF NOT EXISTS user (
    user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30),
    lastname VARCHAR(30),
    email VARCHAR(50),
    address VARCHAR(50),
    postal VARCHAR(56),
    username VARCHAR(56) NOT NULL,
    password VARCHAR(255) NOT NULL,
    balance decimal(15,2),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$sql_order = "CREATE TABLE IF NOT EXISTS orders (
    order_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    date_issue TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    date_done TIMESTAMP NULL DEFAULT NULL,
    total_price decimal(15,2) NOT NULL,
    payment_code INT(6) NOT NULL,
    user_id INT(6) UNSIGNED NOT NULL,
    trip_id INT(9) UNSIGNED,
    flower_id INT(9) UNSIGNED
)";

$sql_trip = "CREATE TABLE IF NOT EXISTS trip  (
    trip_id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    source_lat INT(9) NOT NULL,
    source_lon INT(9) NOT NULL,
    destination_lat INT(9) NOT NULL,
    destination_lon INT(9) NOT NULL,
    distance INT(9) UNSIGNED NOT NULL,
    price decimal(15,2) NOT NULL,
    car_id INT(9) UNSIGNED
)";

$sql_car = "CREATE TABLE IF NOT EXISTS car (
    car_id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    car_type VARCHAR(255) NOT NULL, /* THIS represents the model of the car such as Tesla model S */
    car_model VARCHAR(255) NOT NULL, /* THIS represents like if its a sudan */
    availability_code Boolean NOT NULL
)";

$sql_flower = "CREATE TABLE IF NOT EXISTS flower (
    flower_id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    store_lat INT(9) UNSIGNED NOT NULL,
    store_lon INT(9) UNSIGNED NOT NULL,
    price decimal(15,2) NOT NULL
)";

$queries = array($sql_user, $sql_order, $sql_trip, $sql_car, $sql_flower);

foreach ($queries as &$q) {
    if ($conn->query($q) === TRUE) {
        //tables created so dont display anything
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

$sql = "INSERT INTO car (car_type, car_model, availability_code)
VALUES ('Chevrolet-Express-1500', 'Mini-Van', 1);";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn -> close();

?>

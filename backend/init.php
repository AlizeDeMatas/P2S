<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// sql to create user table
$sql_user = "CREATE TABLE user (
    user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    address VARCHAR(50) NOT NULL,
    postal VARCHAR(56) NOT NULL,
    login_id VARCHAR(56) NOT NULL, 
    password VARCHAR(56) NOT NULL, 
    balance decimal(15,2) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$sql_order = "CREATE TABLE order (
    order_id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    date_issue TIMESTAMP DEFAULT,
    date_done TIMESTAMP DEFAULT,
    total_price decimal(15,2) NOT NULL,
    payment_code VARCHAR(30),
    user_id INT(6) UNSIGNED NOT NULL,
    trip_id INT(9) UNSIGNED,
    flower_id INT(9) UNSIGNED
)";

$sql_trip = "CREATE TABLE trip(
    trip_id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    source_lat INT(9) NOT NULL,
    source_lon INT(9) NOT NULL,
    destination_lat INT(9) NOT NULL,
    destination_lon INT(9) NOT NULL,
    distance INT(9) UNSIGNED NOT NULL,
    price decimal(15,2) NOT NULL,
    car_id INT(9) UNSIGNED
)";

$sql_car = "CREATE TABLE car (
    car_id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    car_type VARCHAR(255) NOT NULL, /* THIS represents the model of the car such as Tesla model S */
    car_model  VARCHAR(255) NOT NULL, /* THIS represents like if its a sudan */
    availability_code Boolean NOT NULL
)";

$sql_flower = "CREATE TABLE flower (
    flower_id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    store_name VARCHAR (255) NOT NULL,
    store_lat INT(9) UNSIGNED NOT NULL, /* long/lat? */
    store_lon INT(9) UNSIGNED NOT NULL, /
    price decimal(15,2) NOT NULL,
)";


/*
Trip table:-Trip-Id (unique key), Source Code, Destination Code, Distance (km), Car-Id, Price, ... 

Car table:-Car-Id (primary key), Car Model, Car Code, Availability Code, ...

Flower table:-Flower-Id (unique key), Store Code, Price, .

*/

if ($conn->query($sql_user) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



?>

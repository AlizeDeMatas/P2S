<?php
if(isset($_POST['email']) && isset($_POST['password'])){

// CHECK IF FIELDS ARE NOT EMPTY
if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))){

// Escape special characters.
$user_email = mysqli_real_escape_string($db_connection, htmlspecialchars(trim($_POST['email'])));

$query = mysqli_query($db_connection, "SELECT * FROM `user` WHERE email = '$user_email'");

if(mysqli_num_rows($query) > 0){

$row = mysqli_fetch_assoc($query);
$user_db_pass = $row['password'];

// VERIFY PASSWORD
$check_password = password_verify($_POST['password'], $user_db_pass);

if($check_password === TRUE){

session_regenerate_id(true);

$_SESSION['email'] = $user_email;  
header('Location:index.php');
exit;

}
else{
// INCORRECT PASSWORD
$error_message = 'Incorrect Password';
}

}
else{
// EMAIL NOT REGISTERED
$error_message = "Email is not registered";
}

}
else{

// IF FIELDS ARE EMPTY
$error_message = "Please fill in all the required fields. thrd";
}

}
?>
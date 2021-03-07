<?php
session_start();
require './backend/db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['email']) && !empty($_SESSION['email'])){

$user_email = $_SESSION['email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `user` WHERE email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: logout.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" media="all" type="text/css">
<?php include('./pages/header/header.html')?>;
<title>Home</title>
<style>
a, a:visited{
color: #0000EE;
}
a:hover{
color: #EE0000;
}
</style>
</head>

<body>
<div class="container">
<h1>Hello, <?php echo $userData['username'];?></h1>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
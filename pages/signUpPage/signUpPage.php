<?php include('../../backend/server.php') ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="signUpPage.css" type="text/css">
<body style="background-color: white;">
<?php include '../header/header.html';?>

   
 <form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">

   <h1 class="title">CAR RIDE SERVICE</h1>
   <h2 class="subTitle">Let's get you all set up.</h2>
    
   <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="signUpPage.js"></script>

</body>
</html>

<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Application </title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 
</head> 
<body>

<!--For all screen-->
<div class="page">
  <!--Login & Signup in single row-->
  <div class="row">  
  <!--Column for signin-->
    <div class="col-sm-8 text-center signin">
      <!-- Default form login -->
      <?php
        require('apikey.php');
     if(isset($_POST['login'])) { 
        $otp = $_POST['otp'];  //receives the otp entered by the user
        $timestamp =  $_SERVER["REQUEST_TIME"];  // record the current time stamp 
    if(($timestamp - $_SESSION['time']) > 120)  // 300 refers to 300 seconds
    {
        echo "<script>alert('OTP Expired try to Login Again!');</script>";
        unset($_SESSION['signin']);
        unset($_SESSION['session_otp']);
        header('location: navbar.php');
    
        
    }
    else{
        if ($otp == $_SESSION['session_otp']) 
        {
           
            unset($_SESSION['session_otp']);
            header('location: navbar.php');
            $_SESSION['signin']="success";
        } 
        else {
            echo "<script>alert('Invalid OTP try Again');</script>";

        }
    }
      }
      ?>
      <form action="otp.php" method="POST">
  <!--Login with Social Media Buttons-->
  <br><br><br><br><br>
  <p class="h4 mb-4 text-center signintext top"><span class="fa fa-lock"></span> <strong>ONE TIME PASSWORD</strong></p>
        <!-- Email -->
        <input type="number" name="otp" class="form-control mb-4"  placeholder="&#xf23e; One Time Password" style="font-family:Arial, FontAwesome">
  
        <!-- Sign in button -->
              <div class="text-center">
                  <button class="btn btn-info btn-block LoginBtn" type="submit" name="login">Enter</button>

              </div>
      </form>
    </div>
  <!--Column for signin-->
    <div class="col-sm-4 signup text-center">
      <h2 class="HelloFriend">Good Day, User!</h2>
      <h4 class="SignupText" style="font-family: Arial; font-size: 13px;">Enter your login credentials and<br>feel free to explore for some<br>awesomeness.</h4>
      <a type="button" href="index.php" class="btn btn-info btn-block signupbtn">GO BACK</a>
      <a class="btn btn-info btn-block signupbtn" type="button" href="signup.php">SIGN UP</a>

    </div>
  </div>
  </div>
</body>
</html> 
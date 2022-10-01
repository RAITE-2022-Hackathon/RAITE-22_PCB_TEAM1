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
      <form action="login.php" method="POST">
        
  
  <!--Login with Social Media Buttons-->
  <br><br><br><br><br>
  <p class="h4 mb-4 text-center signintext top"><span class="fa fa-user"></span> <strong>LOG IN</strong></p>
        <!-- Email -->
        <input type="text" name="username" class="form-control mb-4"  placeholder="&#xf0e0; Username" style="font-family:Arial, FontAwesome">
  
        <!-- Password -->
        <input type="password" name="password" class="form-control mb-4" placeholder="&#xf023;  Password" style="font-family:Arial, FontAwesome">
  
       
  
        <!-- Sign in button -->
        <div class="text-center">
              <a class="ForgotPassBtn" href="" >Forgot Your Password?</a>
              </div>
              <div class="text-center">
                  <button class="btn btn-info btn-block LoginBtn" type="submit" name="log">SIGN IN</button>

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
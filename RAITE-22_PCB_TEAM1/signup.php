<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Application </title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/signup.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 
</head> 
<body>
<section>
  <div class="wrapper">
        <div class="form-left">
            <h2 class="text-uppercase">information</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.
            </p>
            <p class="text">
                <span>Sub Head:</span>
                Vitae auctor eu augudsf ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.
            </p>
            <div class="form-field">
              <a href="login.php">
                <input type="submit" class="account" value="Have an Account?">
              </a>
            </div>
        </div>
        <form method="Post" action="signup.php" class="form-right">
            <h2 class="text-uppercase" style="color:#3aa57f;">Registration form</h2>
        
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" id="first_name" class="input-field">
                </div>
                 <div class="mb-3">
                <label>Phone Number</label>
                <input type="Number" class="input-field" name="num" required>
            </div> 
   
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="input-field" name="pass1" required>
            </div>
               
                <div class="mb-3">
                    <label>Confirm Password</label>
                    <input type="password" name="pass2" id="pwd" class="input-field">
                </div>
            <div class="mb-3">
                <label class="option">I agree to the <a href="#">Terms and Conditions</a>
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="form-field">
                <input type="submit" value="Register" class="register" name="register">
            </div>
        </form>
    </div>
</section>
</body>
</html>                            
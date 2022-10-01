<?php 
  session_start();
  $username ='';
  $errors = array();
  

  // connect to database
  $con = mysqli_connect('localhost','root','','');
  $db = mysqli_select_db($con,'application');

  
  // if the sign up button is clicked
  if(isset($_POST['register'])) {
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $num = mysqli_real_escape_string($con,$_POST['num']);
    $pass1 = mysqli_real_escape_string($con,$_POST['pass1']);
    $pass2 = mysqli_real_escape_string($con,$_POST['pass2']);
   
    
  //ensure that form fields are filled properly
  if (empty($username)){
    array_push($errors, "Username is Required");
  }
  if (empty($num)){
    array_push($errors, "Number is Required");
  }
  if (empty($pass1)){
    array_push($errors, "Password is Required");
  }
  if ($pass1 != $pass2){
    array_push($errors, "Password not Match");
  }
  $querye="SELECT * FROM users where username ='$username'";
    $quere=mysqli_query($con,$querye);
  
  if(mysqli_num_rows($quere) > 0){
    array_push($errors, "Username already taken");
  }
  else{ 
  // if there are no errors , save user to database
  if (count($errors) == 0){
    $password = md5($pass1); //encrypt password before storing in database(security)
    $sql = "INSERT INTO users (username, num, password) VALUES ('$username', '$num', '$password')";
    mysqli_query($con, $sql);
    echo "<script>alert('You are now registered.');</script>";
      echo "<script type='text/javascript'> document.location ='login.php'; </script>";
    unset($_SESSION['username']);
}

}

}


  //log user in
  if (isset($_POST['log'])) {
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

  //ensure that form fields are filled properly
  if (empty($username)){
    array_push($errors, "Username is Required");
  }
 
  if (empty($password)){
    array_push($errors, "Password Required");
  }
  if (count($errors) == 0) {
    $password = md5($password);//encrypt password before comparing with that from database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $query);
    $row=mysqli_fetch_array($result);
    if (mysqli_num_rows($result) == 1){
      //logged in user
    $_SESSION['username']=$username;
    header('location:otp.php');
    }
    else{
      array_push($errors, "Invalid Username/Password try again");
    }
   
  }
 

  }

  //logout
  if(isset($_GET['logout'])){
    unset($_SESSION['username']);
    unset($_SESSION['signin']);
    session_destroy(); 
    header('location: login.php');
  }
     
?>







      
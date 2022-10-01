<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Application </title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/style2.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 
</head> 
<body>
  <!----navbar----->
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-nav">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/kiko.png" alt="Logo" class="img-fluid" width="70px" /><span></span> LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addparti.php">Add Participant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
                <div class="btn-group float-end">
                <a href="#" class="dropdown-toggle text-decoration-none text-light" data-bs-toggle="dropdown">
                <i class="bi bi-person-circle"></i>
                <span><?php echo $_SESSION['username'];?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                 
                    <?php if (isset($_SESSION["username"])):?>
                    <li><a href="login.php?logout='1'" class="dropdown-item pull-right"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
</header>
</body>
</html>                            
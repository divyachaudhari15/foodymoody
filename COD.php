<?php
session_start();
include 'partials/_dbconnect.php';

unset($_SESSION["cart"]);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Foody | Sign Up</title>
  </head>
  <body>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-inverse navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="">
            <img src="Images/logo.png" width="80" height="80" class="d-inline-block align-top" alt="">
          </a>
        </div>
          <div class="collapse text-muted navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link"  href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php"><span class="glyphicon glyphicon-picture"></span> Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menucard.php"><span class="glyphicon glyphicon-cutlery"></span> Menucard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item">
                <a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>

    <div class="container">
      <div class="alert alert-success">
        <h1 class="text-center" style="color: green;">
        <span class="glyphicon glyphicon-ok-circle"></span>Your Order is Confirm and it will be Place Successfully.</h1>
      </div>
    </div><br>
    <h2 class="text-center">Thank you for ordering at Foody Restaurant! The ordering process is now complete.</h2>

    <?php 
      $num1 = rand(100000,999999); 
      $num2 = rand(100000,999999); 
      $number = $num1.$num2;
    ?>

    <h3 class="text-center"><strong>Your Order Number:</strong> <span style="color: blue;">
    <?php echo "$number"; ?></span> </h3>

  </body>

</html>
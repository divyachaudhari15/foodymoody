<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/_dbconnect.php';
  $email = $_POST["email"];
  $password = $_POST["password"];
 
  $sql= "SELECT * FROM signup WHERE email = '$email' AND password = '$password' ";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if ($num == 1){
    $showAlert = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    header("location: order1.php");
  }
  else{
    $showError = "Invalid Credentials";
  }
}
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

    <title>Foody | User Login</title>
  </head>
  <body>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-inverse navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href=""><span class="glyphicon glyphicon-cutlery"></span> Foody</a>
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
                <a class="nav-link" href="menucard.php"><span class="glyphicon glyphicon-glass"></span> Menucard</a>
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

    <?php
    if($showAlert){
    echo ' <div class="alert alert-success" role="alert">
      <strong>Success!</strong> You are loggedin.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
    }
    if($showError){
      echo ' <div class="alert alert-danger" role="alert">
        <strong>Error!</strong> '.$showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
      }
    ?>

<!--Login Form--
    <div style="background-image: url('Images/12.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;">-->

        <!--<div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 login-form-div">
                        <div class="login-form">
                            <div class="login-form-title">
                                <h2>Log In</h2>
                            </div>
                            <div class="login-form-box">
                                <form>
                                    <input name="email" type="email" placeholder="Email Address">
                                    <input type="password" name="password" placeholder="Password">
                                    <button type="login">Login</button>
                                    !-- Already Registered --
                                    <div class="text-center w-100">
                                        <p class="text-muted font-weight-bold">Don't have an account? 
                                        <a href="signup.html" class="text-primary ml-2">Register here.</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

  <div class="log-in">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-sm-8 login-form-div">
          <div class="login-form">
            <div class="login-form-title">
              <h2 class="text-center">User Login</h2>
            </div>
            <div class="login-form-box">
              <form action=/HMI-Project/login.php method="post">
                <input type="email" placeholder="Email Address" class="form-control" id="email" name="email"><br>
                <input type="password" placeholder="Password" class="form-control" id="password" name="password">
                <button type="submit">Login</button>
                <!-- Already Registered -->
                <div class="text-center w-100">
                  <p class="text-muted font-weight-bold">Don't have an account? 
                  <a href="signup.php" class="text-primary ml-2">Register Here</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Footer -->
<?php require 'partials/_footer.php' ?>

</body>
</html>
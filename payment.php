<?php
session_start();
include 'partials/_dbconnect.php';
//$conn = Connect();
//if(!isset($_SESSION['login_user'])){
//header("location: login.php"); }
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

    <title>Foody | Payment</title>

  </head>

  <!--<link rel="stylesheet" type = "text/css" href ="css/payment.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>-->

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
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart  (<?php
                if(isset($_SESSION["cart"])){
                  $count = count($_SESSION["cart"]); 
                  echo "$count"; 
                }
                else
                  echo "0";
                ?>) </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>

<?php
  $gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {
    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
    $R_ID = $values["R_ID"];
    $order_date = date('Y-m-d');
    
    $gtotal = $gtotal + $total;

    $query = "INSERT INTO ORDERS (F_ID, foodname, price,  quantity, order_date, R_ID) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "', '" . $order_date . "','" . $R_ID . "')";
    $success = $conn->query($query);         
if(!$success)
      {
      
?>
  <div class="container">
    <h1 class="alert alert-danger text-center" role="alert">Something went wrong! Try again later.</h1>
  </div>
<?php
      }  
  }
?>
  <div class="container">
    <h1 class="alert alert-success text-center" role="alert">Choose Your Payment Option.</h1>
  </div><br>
  

<h1 class="text-center">Grand Total: &#8377;<?php echo "$gtotal"; ?>/-</h1>
<h5 class="text-center">Including all service charges. (no delivery charges applied)</h5>
<br>

<h1 class="text-center">
  <a href="cart.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>
  <a href="" onClick="parent.open('https://pay.google.com/')"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon"></span>Cash On Delivery</button></a>
  </h1>

</body>
</html>
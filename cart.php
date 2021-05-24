<?php
    session_start();
    include 'partials/_dbconnect.php';
    //$conn = Connect();
    //if(!isset($_SESSION['login_user2'])){
    //    header("location: login.php"); 
    //}
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

    <title>Foody | Cart</title>
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
if(!empty($_SESSION["cart"])) {
?>
    <div class="container">
        <div class="jumbotron">
            <h1>Your Shopping Cart</h1>
        </div>
    </div>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th width="40%">Food Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price Details</th>
                    <th width="15%">Order Total</th>
                    <th width="5%">Action</th>
                </tr>
            </thead>

<?php  
    $total = 0;
    foreach($_SESSION["cart"] as $keys => $values) {
?>
    <tr>
        <td><?php echo $values["food_name"]; ?></td>
        <td><?php echo $values["food_quantity"] ?></td>
        <td>&#8377; <?php echo $values["food_price"]; ?></td>
        <td>&#8377; <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
        <td><a href="cart.php?action=delete&id=<?php echo $values["food_id"]; ?>"><span class="text-danger glyphicon glyphicon-trash">Remove</span></a></td>
    </tr>

<?php 
$total = $total + ($values["food_quantity"] * $values["food_price"]);
}
?>
        <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">&#8377; <?php echo number_format($total, 2); ?></td>
        </tr>
    </table>
<?php
  echo '<a href="cart.php">
  <a href="order1.php">
  <button class="btn btn-warning">Continue Shopping</button></a>&nbsp;
  <a href="payment.php"><button class="btn btn-success pull-right">
  <span class="glyphicon glyphicon-share-alt"></span> Check Out</button></a>';
?>
</div>
<br><br><br><br><br><br><br>

<?php
}
if(empty($_SESSION["cart"])) {
?>
    <div class="container">
        <div class="jumbotron">
            <h1>Your Shopping Cart</h1>
            <p>Oops! We can't smell any food here. Go back and <a href="order1.php">order now.</a></p>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
}
?>

<?php
if(isset($_POST["add"])) {
    if(isset($_SESSION["cart"])) {
        $item_array_id = array_column($_SESSION["cart"], "food_id");
        if(!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["cart"]);
            $item_array = array(
            'food_id' => $_GET["id"],
            'food_name' => $_POST["hidden_name"],
            'food_price' => $_POST["hidden_price"],
            'R_ID' => $_POST["hidden_RID"],
            'food_quantity' => $_POST["quantity"] );

            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="cart.php"</script>';
        }
        else {
            echo '<script>alert("Products already added to cart")</script>';
            echo '<script>window.location="cart.php"</script>';
        }
    }
    else {
        $item_array = array(
    'food_id' => $_GET["id"],
    'food_name' => $_POST["hidden_name"],
    'food_price' => $_POST["hidden_price"],
    'R_ID' => $_POST["hidden_RID"],
    'food_quantity' => $_POST["quantity"] );

    $_SESSION["cart"][0] = $item_array;
    }
}
if(isset($_GET["action"])) {
    if($_GET["action"] == "delete") {
        foreach($_SESSION["cart"] as $keys => $values) {
            if($values["food_id"] == $_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Food has been removed")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}

if(isset($_GET["action"])) {
    if($_GET["action"] == "empty") {
        foreach($_SESSION["cart"] as $keys => $values)  {
            unset($_SESSION["cart"]);
            echo '<script>alert("Cart is made empty!")</script>';
            echo '<script>window.location="cart.php"</script>';
        }
    }
}
?>

<!-- Footer -->
<?php require 'partials/_footer.php' ?>

</body>
</html>
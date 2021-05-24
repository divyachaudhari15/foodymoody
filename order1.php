<?php
include 'partials/_dbconnect.php';
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

    <title>Foody | Food List</title>
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

    <div class="menu-title1">
        <div class="container text-center">
            <h1>Welcome To Foody Restaurant</h1>      
        </div>
    </div><br><br>
    <div class="container" style="width:95%;">

    <!-- Display all Food from food table -->
    <?php

    //require 'connection.php';
    //$conn = Connect();

    $sql = "SELECT * FROM addfood WHERE options = 'ENABLE' ORDER BY F_ID";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        $count=0;

        while($row = mysqli_fetch_assoc($result)){
        if ($count == 0)
            echo "<div class='row'>";

    ?>

    <div class="col-md-3">
        <form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
        <div class="mypanel" align="center";>
            <img src="<?php echo $row["images_path"]; ?>" alt="">
            <h4 class="text-dark"><?php echo $row["name"]; ?></h4>
            <h5 class="text-dark"><?php echo $row["description"]; ?></h5>
            <h5 class="text-dark">&#8377; <?php echo $row["price"]; ?>/-</h5>
            <h5 class="text-dark">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
        </div>
        </form> 
    </div>

    <?php
        $count++;
        if($count==4) {
            echo "</div>";
            $count=0;
        }
    }
    ?>

    </div>
</div>
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"><h1>Oops! No food is available.</h1></label>
        <p>Stay Hungry...!</p>
      </center>
       
    </div>
  </div>
  <?php
}
?>  
</body>
</html>
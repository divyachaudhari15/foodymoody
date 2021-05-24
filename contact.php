<?php 
  session_start(); 
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

    <title>Foody |  Contact Us</title>
  </head>
  <body>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--Navbar-->
    <?php require 'partials/_nav.php' ?>
    
  <div class="contact-us">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-sm-8 contact-form-div">
          <div class="contact-form">
            <div class="contact-form-title">
              <h2 class="text-center">Get In Touch</h2>
            </div>
            <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
              <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;">
              <?php echo $_SESSION['success_message']; ?></div>
              <?php
              unset($_SESSION['success_message']);
              }
            ?>
            <div class="contact-form-box">
              <form action="save.php" method="post">
                <input type="text" placeholder="Name" class="form-control" id="name" name="name"><br>
                <input type="tel" placeholder="Mobile Number" class="form-control" id="mobileno" name="mobileno"><br>
                <input type="email" placeholder="Email Address" class="form-control" id="email" name="email"><br>
                <textarea class="form-control" name="message" placeholder="Message"></textarea>
                <button type="submit">Send Message</button>
              </form><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Footer -->
        <?php require 'partials/_footer.php' ?>

    </body>
</html>
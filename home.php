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

    <title>Foody | Home</title>
  </head>
  <body>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Navbar -->
    <?php require 'partials/_nav.php' ?>

    <!--Home section start-->
    <div class="home white-bg ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
        		<div class="welcome-img">
        			<img src="Images/welcome.jpg" alt="">
        		</div>
        	</div>
        	<div class="col-md-6">
        		<div class="home-title2">
        			<h1>Welcome Foody Restaurant</h2>
            </div>
            <div class="home-title1">
              <h2>Loves Healthy Food</h1>
            </div>
        		<div class="order-now">
        			<a href="login.php">order now</a>
        		</div>
        	</div>
        </div>
      </div>
    </div>
    <br>

      <!-- About section start-->
        <div class="home-about white-bg ptb-100">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-6">
        				<div class="welcome-about">
        					<h2 class="title_1">About Foody Restaurant</h2>
        					<p class="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor  no amet dolor. Proin pretium purus a lorem ornare</p>
        					<p class="text2">sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros dost mauris, convallis et sem tempus, viverra hendrerit sapien  Lorem  amet, consectetur adipiscing elit. Donec aliquet dolor libero, </p>
        					<div class="read-more">
        						<a href="about.php">read more</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-md-6">
        				<div class="welcome-about-img">
        					<img src="Images/about.jpg" alt="">
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <br>

<!-- Our Menu Card start -->  
  <div class="py-5">
    <div class="container">
      <div class="menu-title2">
        <h2>Menu Card</h1>
      </div>
      <div class="menu-title1">
        <h1>Breakfast lunch Dinner</h2>
      </div>
      <div class="row hidden-md-up">
        <div class="col-lg-4 col-md-6">
        
          <div class="card">
            <div class="card-image">
              <img class="card-img" src="Images/menu1.jpg" alt="Card Image">
            </div>
            <div class="card-block">
              <h4 class="card-title">Fried Potatoes with Garlic</h4>
              <h6 class="card-subtitle text-muted">Mushroom/ garlic/ veggies</h6>
              <p class="card-text p-y-1">Rs. 100/-</p>
            </div>
          </div>
        </div><br>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-image">
              <img class="card-img" src="Images/soup.jpg" alt="Card Image">
            </div>
            <div class="card-block">
              <h4 class="card-title">Vegetable Soup</h4>
              <h6 class="card-subtitle text-muted"></h6>
              <p class="card-text p-y-1">Rs. 150/-</p>
            </div>
          </div>
        </div><br>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-image">
              <img class="card-img" src="Images/biryani.jpg" alt="Card Image">
            </div>
            <div class="card-block">
              <h4 class="card-title">Veg Hydrabadi Dum Biryani</h4>
              <h6 class="card-subtitle text-muted">Ramadan Foods</h6>
              <p class="card-text p-y-1">Rs. 200/-</p>
            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="menu-title1">
        <h1>Dessert Drink</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-image">
              <img class="card-img" src="Images/dessert2.jpg" alt="Card Image">
            </div>
            <div class="card-block">
              <h4 class="card-title">Icecream</h4>
              <h6 class="card-subtitle text-muted">Chocolate/ Vanilla/ Strawberry</h6>
              <p class="card-text p-y-1">Rs. 100/-</p>
            </div>
          </div>
        </div><br>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-image">
              <img class="card-img" src="Images/drink1.jpg" alt="Card Image">
            </div>
            <div class="card-block">
              <h4 class="card-title">Juice</h4>
              <h6 class="card-subtitle text-muted">Orange/ Pineapple/ Watermelon</h6>
              <p class="card-text p-y-1">Rs. 80/-</p>
            </div>
          </div>
        </div><br>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-image">
              <img class="card-img" src="Images/dessert3.jpg" alt="Card Image">
            </div>
            <div class="card-block">
              <h4 class="card-title">Cake</h4>
              <h6 class="card-subtitle text-muted">Chocolate/ Red velvet/ Rasgulla</h6>
              <p class="card-text p-y-1">Rs. 250/-</p>
            </div>
          </div>
        </div>
        <div class="show-more">
        	<a href="menucard.php">show more</a>
        </div>
      </div>
    </div>
  </div>
  <br>

        <!--Our gallery start-->
        <div class="our-gallery">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <div class="section-title grey_bg mb-50 text-center">
                  <h2 class="title mb-50">our gallery</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="gallery-item-box row">
                  <div class="col-lg-4 col-md-6 gallery-item mb-30">
                    <div class="single-item-gallery">
                      <img src="Images/image.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 gallery-item mb-30">
                    <div class="single-item-gallery">
                      <img src="Images/cup1.jpeg" alt="">
                    </div>
                  </div> 
                  <div class="col-lg-4 col-md-6 gallery-item mb-30">
                    <div class="single-item-gallery">
                      <img src="Images/kashmiri-pulav.jpg" alt="">
                    </div>
                  </div>
                  <div class="show-more">
                    <a href="gallery.php">show more</a>
                  </div>
                </div>
              </div>   
            </div>
          </div>
        </div>
        <br>

<!-- Footer -->
<?php require 'partials/_footer.php' ?>

  </body>
</html>
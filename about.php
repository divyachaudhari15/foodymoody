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

    <title>Foody | About Us</title>
  </head>
  <body>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--Navbar-->
    <?php require 'partials/_nav.php' ?>

        <!--About Us here-->
        <div class="home-about white-bg ptb-100">
        	<div class="container">
        		<div class="row">
                <div class="col-md-6">
        				<div class="welcome-about-img">
        					<img src="Images/about1.jpg" alt="">
        				</div>
        			</div>
        			<div class="col-md-6">
        				<div class="welcome-about">
        					<h2 class="title_1">About Foody Restaurant</h2>
                  <p>Delicious dishes for a perfect dine! 
                    Foody Restaurant offers delicious and mouth-watering food and beverages in its food menu. 
                    The menu includes all types of dishes through its different categories including breakfast, lunch, dinner & drinks. 
                    You can have or take away the food listed in Indian food menu at Foody. </p>
        					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor  no amet dolor. Proin pretium purus a lorem ornare</p>
        					<p>Sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros dost mauris, convallis et sem tempus, viverra hendrerit sapien  Lorem  amet, consectetur adipiscing elit. Donec aliquet dolor libero.</p>
                  <p>The Restaurant was founded in blabla by Mrs. Reena in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p><strong>The Chef?</strong> Mrs. Reena herself
                    <img src="Images/chef.jpg" style="width:150px" class="circle right" alt="Chef"></p>
                </div>
        			</div>
        		</div>
        	</div>
        </div>
        <br>

    <!--Our team start-->
    <div class="our-team">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <div class="section-title grey_bg mb-50 text-center">
                  <h2 class="title mb-50">our lovely team</h2>
                </div>
              </div>
            </div><br>
            <div class="row">
              <div class="col-lg-12">
                <div class="team-item-box row">
                  <div class="col-lg-4 col-md-6 team-item mb-30">
                    <div class="single-item-team">
                      <img src="Images/team-1.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 team-item mb-30">
                    <div class="single-item-team">
                      <img src="Images/team-2.jpg" alt="">
                    </div>
                  </div> 
                  <div class="col-lg-4 col-md-6 team-item mb-30">
                    <div class="single-item-team">
                      <img src="Images/team-3.jpg" alt="">
                    </div>
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
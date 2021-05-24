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

    <title>Foody | Menucard</title>
  </head>
  <body>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--Navbar-->
    <?php require 'partials/_nav.php' ?>

    <div style="height:600px;
        background-image:url('Images/1.jpg');
        background-size:cover;
        background-repeat: no-repeat;">
        
        <div class="menu-title1"><h1>FOODY MENU</h1></div>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary">STARTER</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Tandoori Paneer Tikka	220/-</a>
                        <a class="dropdown-item" href="#">Malai Paneer Tikka	220/-</a>
                        <a class="dropdown-item" href="#">Fried Potatoes with Garlic 100/-</a>
                        <a class="dropdown-item" href="#">Tandoori Aloo	179/-</a>
                        <a class="dropdown-item" href="#">Spring Roll	145/-</a>
                        <a class="dropdown-item" href="#">Hare-Bhare Kabab	162/-</a>
                        <a class="dropdown-item" href="#">Dahi ke Kabab	179/-</a>
                        <a class="dropdown-item" href="#">Veg Manchurian Dry  150/- </a>
                        <a class="dropdown-item" href="#">Vegetable Soup  150/- </a>
                    </div>
                </div>
  
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary">Breakfast</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"> <b>South-Indian</b> </a>
                        <a class="dropdown-item" href="#"> Dahi Vada	80/-</a>
                        <a class="dropdown-item" href="#">Dosa (Butter)	125/-</a>
                        <a class="dropdown-item" href="#">Onion Dosa (Butter)	136/-</a>
                        <a class="dropdown-item" href="#">Paper Dosa	130/-</a>
                        <a class="dropdown-item" href="#">Rawa Dosa	119/-</a>
                        <a class="dropdown-item" href="#">Idli Sambhar 100/-</a> 
                        <a class="dropdown-item" href="#">Onion Rawa Dosa	136/-</a>	 
                        <a class="dropdown-item" href="#">Onion Uttapam	155/-</a>
                        <a class="dropdown-item" href="#">Tomato Uttapam	155/-</a>
                        <a class="dropdown-item"> <b>Fast Food</b> </a>
                        <a class="dropdown-item" href="#">Pav Bhaji	140/-</a>
                        <a class="dropdown-item" href="#">Vada Pav	20/-</a>
                        <a class="dropdown-item" href="#">Burger 70/-</a>
                        <a class="dropdown-item" href="#">Sandwich 175/-</a>
                        <a class="dropdown-item" href="#">Pasta  190/-</a>
                        <a class="dropdown-item" href="#">Garlic Bread	90/-</a>
                        <a class="dropdown-item" href="#">French Fries	105/-</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-secondary">LUNCH/DINNER</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu"> 
                        <a class="dropdown-item" href="#"><b>Rice / Pulao / Biryani / Raita</b></a>
                        <a class="dropdown-item" href="#">Plain Rice	60/-</a>
                        <a class="dropdown-item" href="#">Veg. Hydrabadi Dum Biryani 200/-</a>
                        <a class="dropdown-item" href="#">Veg. Pulao	150/-</a>
                        <a class="dropdown-item" href="#">Mix Veg. Pulao	160/-</a>
                        <a class="dropdown-item" href="#">Jeera Rice	160/-</a>
                        <a class="dropdown-item" href="#">Matka Biryani With Raita 	220/-</a>
                        <a class="dropdown-item" href="#">Chicken Biryani	260/-</a>
                        <a class="dropdown-item" href="#"><b>Subziyan</b> </a>
                        <a class="dropdown-item" href="#">Shahi Paneer	210/-</a>
                        <a class="dropdown-item" href="#">Kadhai Paneer  210/-</a>
                        <a class="dropdown-item" href="#">Paneer Butter Masala 	210/-</a>
                        <a class="dropdown-item" href="#">Mushroom Masala 	215/-</a>
                        <a class="dropdown-item" href="#">Malai Kofta	210/-  </a>
                        <a class="dropdown-item" href="#"><b>Dal</b> </a>
                        <a class="dropdown-item" href="#">Dal Makhani 190/-</a> 
                        <a class="dropdown-item" href="#">Dal Tadka 150/-</a> 
                        <a class="dropdown-item" href="#"><b>Roti</b> </a>
                        <a class="dropdown-item" href="#">Tandori Roti  30/-</a>
                        <a class="dropdown-item" href="#">Butter Roti  35/-</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-secondary">Smoothies & Mocktails</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Fruit Punch	150/- </a>
                        <a class="dropdown-item" href="#">Red Sea	150/- </a>
                        <a class="dropdown-item" href="#">Virgin Colada	150/- </a>
                        <a class="dropdown-item" href="#">Love Valley	150/- </a>
                        <a class="dropdown-item" href="#">Pomi Twist	150/- </a>
                        <a class="dropdown-item" href="#">Ginger Fizz	150/- </a>
                        <a class="dropdown-item" href="#">Italian Smooch	150/- </a>
                        <a class="dropdown-item" href="#">Devils Kiss	150/- </a>
                        <a class="dropdown-item" href="#">Blue Lagoon	150/- </a>
                        <a class="dropdown-item" href="#">Fresh Mint Mojito	150/- </a>
                        <a class="dropdown-item" href="#">Kiwi Smoothie	150/- </a>
                        <a class="dropdown-item" href="#">Virgin Guava	150/- </a>
                        <a class="dropdown-item" href="#">Litchi Smoothie	150/- </a>
                        <a class="dropdown-item" href="#">Peach Apricot	150/- </a>
                        <a class="dropdown-item" href="#">Blue Berry Smoothie	150/- </a>
                        <a class="dropdown-item" href="#">Green Hayland	150/- </a>
                        <a class="dropdown-item" href="#">White Rosy	150/- </a>
                        <a class="dropdown-item" href="#">Watermelon Mojito	150/- </a>	    
		            </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-secondary">DESSERT</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Russian Salad / Maccroni	119/-</a>
                        <a class="dropdown-item" href="#">Gulab Jamun	60/-</a>
                        <a class="dropdown-item" href="#">Halwa(Seasonal)	60/-</a>
                        <a class="dropdown-item" href="#"><b>Cake</b></a>
                        <a class="dropdown-item" href="#">Cup Cakes  50/-</a>
                        <a class="dropdown-item" href="#">Chocolate/ Vanilla/ Red velvet/ RasmalaiCake  250/- </a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-secondary">EXTRA</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Mineral Water	20/- </a>
                        <a class="dropdown-item" href="#"><b>Tea/Coffee</b></a>
                        <a class="dropdown-item" href="#">Tea	20/- </a>
                        <a class="dropdown-item" href="#">Ice Tea	50/- </a>
                        <a class="dropdown-item" href="#">Coffee	50/- </a>
                        <a class="dropdown-item" href="#">Cold Coffee	70/- </a>
                        <a class="dropdown-item" href="#"><b>Drinks</b></a>
                        <a class="dropdown-item" href="#">Cola/ Orange/ Lemon	55/- </a>
                        <a class="dropdown-item" href="#">Pepsi	55/- </a>
                        <a class="dropdown-item" href="#">Orange/ Watermelon Juice 80/- </a>
                        <a class="dropdown-item" href="#"><b>Ice Cream</b></a>
                        <a class="dropdown-item" href="#">Vanilla  50/- </a>
                        <a class="dropdown-item" href="#">Chocolate/Strawberry	100/-</a>
                        <a class="dropdown-item" href="#">Butter Scotch/ Kaju Kishmish	100/-</a>
                        <a class="dropdown-item" href="#">Kesar Pista	100/-</a>
                    </div>
                </div>
    </div>
    
    <!-- Footer -->
    <?php require 'partials/_footer.php' ?>

  </body>
</html>
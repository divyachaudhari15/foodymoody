<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/_dbconnect.php';
  $name = $_POST["name"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $mobileno = $_POST["mobileno"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  //$exists=false;

  //Chcek whether email address exists.
  $existSql = "SELECT * FROM `signup` WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    
  if($numExistRows > 0){
    //$exists = true;
    $showError = "Email Address already exists.";
  }
  else{
    //$exists = false;
    if($password == $cpassword){
      $sql = "INSERT INTO `signup` (`name`, `email`, `address`, `mobileno`, `password`, `dt`) VALUES ('$name', '$email', '$address', '$mobileno', '$password', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if ($result){
        $showAlert = true;
      }
    }
    else{
      $showError = "Passwords do not match.";
    }
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

    <title>Foody | Sign Up</title>
  </head>
  <body>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--Navbar-->
    <?php require 'partials/_nav.php' ?>

    <?php
    if($showAlert){
    echo ' <div class="alert alert-success" role="alert">
      <strong>Success!</strong> Your account is now created and you can <a href="login.php">Login.</a>
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

    <!--Sign Up Form--
    <div style="background-image: url('Images/12.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;">

        <div class="sign-up">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 signup-form-div">
                        <div class="signup-form">
                            <div class="signup-form-title">
                                <h2>Create An account</h2>
                            </div>
                            <div class="signup-form-box">
                                <form>
                                    <input name="name" type="text" placeholder="Full Name">
                                    <input name="email" type="email" placeholder="Email Address">
                                    <input name="mobileno" type="tel" placeholder="Mobile Number">
                                    <textarea name="address" placeholder="Address"></textarea>
                                    <input type="password" name="password" placeholder="Password">
                                    <input type="text" name="passwordConfirmation" placeholder="Confirm Password">
                                    <button type="signup">Create your account</button>
                                    !-- Already Registered --
                                    <div class="text-center w-100">
                                      <p class="text-muted font-weight-bold">Already Registered? 
                                      <a href="login.html" class="text-primary ml-2">Login</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

  <div class="sign-up">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-sm-8 signup-form-div">
          <div class="signup-form">
            <div class="signup-form-title">
              <h2 class="text-center">Create An Account</h2>
            </div>
            <div class="signup-form-box">
              <form action=/HMI-Project/signup.php method="post">
                <input type="text" placeholder="Name" class="form-control" id="name" name="name" pattern="[a-zA-Z]+ [a-zA-Z]+$" title="Please enter your full name (First & Last name)." required><br>
                <input type="email" placeholder="Email Address" class="form-control" id="email" name="email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div><br>
                <input type="text" id="inputdefault" placeholder="Address" class="form-control" id="address" name="address" required><br>
                <input type="tel" placeholder="Mobile Number" class="form-control" id="mobileno" name="mobileno" pattern="[0-9]{10}" title="Required 10 digit number." required><br>
                <input type="password" placeholder="Password" class="form-control" id="password" name="password" required><br>
                <input type="password" placeholder="Confirm Password" class="form-control" id="cpassword" name="cpassword" required>
                <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
                <button type="submit">Create your account</button>
                <!-- Already Registered -->
                <div class="text-center w-100">
                  <p class="text-muted font-weight-bold">Already Registered? 
                  <a href="login.php" class="text-primary ml-2">Login</a></p>
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
<?php

include 'partials/_dbconnect.php';
if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mobileno = mysqli_real_escape_string($conn, $_POST['mobileno']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    mysqli_query($conn, "insert into contact(name,mobileno,email,message) values ('$name','$mobileno','$email','$message')");

    //Start the session if already not started.
    session_start();
    $_SESSION['success_message'] = "Query sent successfully. We will contact you soon!";
    header("Location: contact.php");
    exit();
} else {
    echo "Server problem, Try after sometime.";
}
?>
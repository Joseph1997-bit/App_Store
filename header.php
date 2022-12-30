<?php
session_start();
include ('includes/db.php');
include('includes/functons.php');


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--owl carousel-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <title>APK, STORE</title>
</head>
<body style="background-color: white">

<nav
    class=" navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Mobil App Store</a>
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >

        </button>
        <div class="container-fluid" >
            <div class="nav navbar-nav">
                <li class="nav-link active"  ><a class="nav-link active"  href="home.php">Home</a></li>
                   <?php  if(isset($_SESSION['login']) && $_SESSION['login'] != "") {
                      echo ' <li class="nav-link active"  ><a class="nav-link active"  href="upload.php">Upload</a></li>
                <li class="nav-link active"  ><a class="nav-link active"  href="logout.php">Logout</a></li>';

                   } else {
                       echo ' <li class="nav-link active"  ><a class="nav-link active"  href="register.php">Register</a></li>
                <li class="nav-link active"  ><a class="nav-link active"  href="login.php">Login</a></li>

                ';
                   }
                   ?>

            </div>
        </div>
    </div>
</nav>

<div class="row text-center">
    <div class="col-md-4">
        <img  width="500 " height="250" src="images/Capture.PNG"><br/><br/>
    </div>





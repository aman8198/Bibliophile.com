<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: index.php");
	}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bibliophile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron bg-dark text-dark">
  <div class="container text-center bg-dark text-dark">
    <h1 class="bg-dark text-dark">THE BIBLIOPHILE</h1>      
    <p>Community of Readers</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
   
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Books</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-6">
        <img src="img/a20.jpg" class="img-fluid pb-4">
         <a href="booking.php" class="btn btn-primary">Rent</a>
          <a href="booking.php" class="btn btn-primary">Purchase</a>
      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="img/a25.jpg" class="img-fluid pb-4">
         <a href="booking.php" class="btn btn-primary">Rent</a>
          <a href="booking.php" class="btn btn-primary">Purchase</a>

      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="img/a24.png" class="img-fluid pb-4">
           <a href="booking.php" class="btn btn-primary">Rent</a>
          <a href="booking.php" class="btn btn-primary">Purchase</a>
      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="img/a28.jpg" class="img-fluid pb-4">
         <a href="booking.php" class="btn btn-primary">Rent</a>
          <a href="booking.php" class="btn btn-primary">Purchase</a>
      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="img/a31.jpg" class="img-fluid pb-4">
         <a href="booking.php" class="btn btn-primary">Rent</a>
          <a href="booking.php" class="btn btn-primary">Purchase</a>
      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="img/a25.jpg" class="img-fluid pb-4">
         <a href="booking.php" class="btn btn-primary">Rent</a>
          <a href="booking.php" class="btn btn-primary">Purchase</a>
      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="img/a24.jpg" class="img-fluid pb-4">
         <a href="booking.php" class="btn btn-primary">Rent</a>
          <a href="booking.php" class="btn btn-primary">Purchase</a>
      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="img/a28.jpg" class="img-fluid pb-4">
         <a href="booking.php" class="btn btn-primary">Rent</a>
          <a href="booking.php" class="btn btn-primary">Purchase</a>
      </div>
      <div class="col-lg-4 col-md-4 col-6">
        <img src="img/a29.jpg" class="img-fluid pb-4">
         <a href="booking.php" class="btn btn-primary">Rent</a>
          <a href="booking.php" class="btn btn-primary">Purchase</a>
      </div>

      
    </div>
  </div>
  
</section>

<footer class="p-2 bg-dark text-light text-center">
    <h4>Contact us</h4>
    <p>jhaaman8198@gmail.com</p>
  </footer>

<a href="index1.php?logout=true" class="btn btn-primary">Logout</a>
</body>
</html>
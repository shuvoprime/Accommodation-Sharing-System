<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



 </head>
 <body>
 	<div>
 		<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">BariChai.com</a>
			</div>
			<ul class="nav navbar-nav">
				<li class=""><a href="index.php">Home</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="about.html">About</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<button class="btn btn navbar-btn"> <a href="signup.php"> <span class="glyphicon glyphicon-user"> </span> Sign Up</a></button>
				<button class="btn btn navbar-btn"> <a href="login.php"> <span class="glyphicon glyphicon-log-in"></span> Login</a></button>
			</ul>
		</div>
	</nav>


 	</div>


 	<div id="myCarousel" class="carousel slide" data-ride="carousel">

 		<ol class="carousel-indicators">
 			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
 			<li data-target="#myCarousel" data-slide-to="1"></li>
 			<li data-target="#myCarousel" data-slide-to="2"></li>
 		</ol>


 		<div class="carousel-inner">
 			<div class="item active">
 				<img src="h1.jpg" alt="1">
 			</div>

 			<div class="item">
 				<img src="h2.jpg" alt="2">
 			</div>

 			<div class="item">
 				<img src="h3.jpg" alt="3">
 			</div>
 		</div>


 		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
 			<span class="glyphicon glyphicon-chevron-left"></span>
 			<span class="sr-only">Previous</span>
 		</a>
 		<a class="right carousel-control" href="#myCarousel" data-slide="next">
 			<span class="glyphicon glyphicon-chevron-right"></span>
 			<span class="sr-only">Next</span>
 		</a>
 	</div>

 </body>
 </html>
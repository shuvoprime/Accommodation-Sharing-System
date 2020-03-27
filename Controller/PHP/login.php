<?php
include "db.php";
include "functions.php";

session_start();

login();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Login page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">BariChai.com</a>
			</div>
			<ul class="nav navbar-nav">
				<li class=""><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<button class="btn btn navbar-btn"> <a href="signup.php"> <span class="glyphicon glyphicon-user"> </span> Sign Up</a></button>
			</ul>
		</div>
	</nav>

<h2>Login Form</h2>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="type"><b>I'm a</b></label> <br>
    <input type="radio" value="1" name="type" required>
    Customer <br>
    <input type="radio" value="2" name="type" required>
    House Owner
       <br>
    <label>
      <button type="submit" class="btn btn-success" name="login">login</button>
    </label>
    <br>
    <div>
    <a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
    <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
    </div>
  </div>
</form>
</body>
</html>

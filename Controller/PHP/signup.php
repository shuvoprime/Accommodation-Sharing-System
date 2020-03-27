<?php
include "db.php";
include "functions.php";
session_start();

signup();
    
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sign up page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="signup.css">

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
				<button class="btn btn navbar-btn"> <a href="login.php"> <span class="glyphicon glyphicon-log-in"> </span> login</a></button>
			</ul>
		</div>
	</nav>

<form action="" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" required>

    <label for="mail"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="mail" required>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <!--<label for="cpsw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="cpsw" required>-->

    <label for="phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your Address" name="address" required>


    <label for="type"><b>I'm a</b></label> <br>
    
    <input type="radio" value="1" name="type" required>
    Customer <br>
    <input type="radio" value="2" name="type" required>
    House Owner
   <!--  
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

    <div class="clearfix">
      <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" class="signupbtn" name="signup">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
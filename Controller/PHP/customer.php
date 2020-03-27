<?php
include "db.php";
include "functions.php";

session_start();

if(!isset($_SESSION['login_user'])){
    header('location: login.php');
}

$result=mysqli_query($connection,'select * from houses');

if(isset($_GET['submit'])){
    
    $location=mysqli_real_escape_string($connection,$_GET['location']);
    $lprice=mysqli_real_escape_string($connection,$_GET['lprice']);
    $hprice=mysqli_real_escape_string($connection,$_GET['hprice']);
    $bedroom=mysqli_real_escape_string($connection,$_GET['bedroom']);
    $toilet=mysqli_real_escape_string($connection,$_GET['toilet']);
    $balcony=mysqli_real_escape_string($connection,$_GET['balcony']);
    
    
    $query="select * from houses where address like '%$location%' and price between $lprice and $hprice and bedroom=$bedroom and toilet=$toilet and balcony=$balcony";
    
    $result=mysqli_query($connection,$query);
    
    if(!$result){
        die("There is a problem with sql syntax.".mysqli_error($connection));
    }                  
    
}

//$people = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="customer.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
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
				<button class="btn btn navbar-btn"> <a href="logout.php"> <span class="glyphicon glyphicon-log-in"> </span> logout </a></button>
			</ul>
		</div>
	</nav>
        <div class="row">
               
                <div class="col-lg-3">
                        <form action="customer.php" method="get" style="border:1px solid #ccc">
                                <div class="container">
                                        <h1>Search House</h1>
                                        <p>Your New Home Awaits</p>
                                        <hr>

                                        <label for="location">Select Location</label>
                                        <select class="form-control" name="location">
                                                <option value="Gulshan">Gulshan</option>
                                                <option value="Dhanmondi">Dhanmondi</option>
                                                <option value="Banani">Banani</option>
                                                <option value="Baridhara">Baridhara</option>
                                                <option value="Basundhara">Basundhara</option>
                                                <option value="Uttara">Uttara</option>
                                                <option value="Mirpur">Mirpur</option>
                                                <option value="Mohakhali">Mohakhali</option>
                                                <option value="Badda">Badda</option>
                                                <option value="Mohammadpur">Mohammadpur</option>
                                                <option value="Motijheel">Motijheel</option>
                                        </select>


                                        <label for="price"><b>Price Range</b></label>
                                        <input type="text" placeholder="Lowest Range (in number)"  name="lprice" required>
                                        <input type="text" placeholder="Highest Range (in number)" name="hprice" required>

                                        <label for="bedroom"><b>Bedroom</b></label>
                                        <input type="text" placeholder="e.g 3,4" name="bedroom" required>

                                        <label for="toilet"><b>Toilet</b></label>
                                        <input type="text" placeholder="e.g 3,4" name="toilet" required>

                                        <label for="balcony"><b>Balcony</b></label>
                                        <input type="text" placeholder="e.g 3,4" name="balcony" required>


                                        <div class="clearfix">
                                                <button type="submit" class="btn btn-primary" name="submit">Search</button>
                                        </div>
                                </div>
                        </form>
                </div>


                <div class="col-lg-9">
    <div class="card mt-5">
    <div class="card-header">
      <h2>Available Houses</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered table-striped table-dark">
        <tr>
          <th>Address</th>
          <th>Type</th>
          <th>Price</th>
          <th>Bedroom</th>
          <th>Toilet</th>
          <th>Balcony</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Decription</th>
        </tr>
        <?php while($person=mysqli_fetch_assoc($result)){ ?>
          <tr>
            <td><?php echo $person['address']; ?></td>
            <td><?php echo $person['type']; ?></td>
            <td><?php echo $person['price']; ?></td>
            <td><?php echo $person['bedroom']; ?></td>
            <td><?php echo $person['toilet']; ?></td>
            <td><?php echo $person['balcony']; ?></td>
            <td><?php echo $person['email']; ?></td>
            <td><?php echo $person['phone']; ?></td>
            <td><?php echo $person['description']; ?></td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
               
                </div>
        </div>
    </body>
</html>
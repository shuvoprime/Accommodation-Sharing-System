<?php

session_start();

include "db.php";
include "functions.php";


if(!isset($_SESSION['login_user'])){
    header('location: login.php');
}

$username=$_SESSION['login_user'];
$own=mysqli_query($connection,"select * from houses where username='$username'");

if(isset($_POST['submit'])){
    
    $address=mysqli_real_escape_string($connection,$_POST['address']);
    $type=mysqli_real_escape_string($connection,$_POST['type']);
    $price=mysqli_real_escape_string($connection,$_POST['price']);
    $bedroom=mysqli_real_escape_string($connection,$_POST['bedroom']);
    $toilet=mysqli_real_escape_string($connection,$_POST['toilet']);
    $balcony=mysqli_real_escape_string($connection,$_POST['balcony']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $phone=mysqli_real_escape_string($connection,$_POST['phone']);
    $description=mysqli_real_escape_string($connection,$_POST['description']);
    
    $query="insert into houses(username,address,type,price,bedroom,toilet,balcony,email,phone,description) values('$username','$address','$type',$price,$bedroom,$toilet,$balcony,'$email','$phone','$description')";
    $nquery="select id from houses where email='$email' order by id desc limit 1";
    
    $result=mysqli_query($connection,$query);
    //$nresult=mysqli_query($connection,$nquery);
    //$row=mysqli_fetch_assoc($connection,$nresult);
    
    //$id=$row['id'];
    
    //$query="insert into owns(username,id) values ('$username',$id)";
    //$nresult=mysqli_fetch_assoc($connection,$query);
    
    if(!$result){
        Die("The query is not working<br>".mysqli_error($connection));
    }else{
        echo "The data is inserted.";
        
        header("location: owner.php");
    }
    
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="customer.css">
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
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<form action="owner.php" method="post" style="border:1px solid #ccc">
					<div class="container">
						<h1>Post your House Details</h1>
						<p></p>
						<hr>

						<label for="address"><b>Address</b></label>
						<input type="text" placeholder="Enter Full Address"  name="address" required>

						<label for="type">House Type</label>
						<select class="form-control" name="type">
							<option value="small">Small (under 500 square feet)</option>
							<option value="medium">Medium (under 800 square feet)</option>
							<option value="large">Large (more than 800 square feet)</option>
						</select>

						<label for="price"><b>Price</b></label>
						<input type="text" placeholder="e.g 12000, 18000"  name="price" required>

						<label for="bedroom"><b>Bedroom</b></label>
						<input type="text" placeholder="e.g 3,4" name="bedroom" required>

						<label for="toilet"><b>Toilet</b></label>
						<input type="text" placeholder="e.g 1,2" name="toilet" required>

						<label for="balcony"><b>Balcony</b></label>
						<input type="text" placeholder="e.g 1,2" name="balcony" required>

						<label for="email"><b>Email</b></label>
                        <input type="email" placeholder="Enter Email" name="email" required>

                        <label for="phone"><b>Phone Number</b></label>
                        <input type="text" placeholder="Enter Phone Number" name="phone" required>

                        <label for="description">Description</label>
                        <textarea placeholder="Description of Your House" class="form-control rounded-0" name="description" rows="3" required></textarea>


						<div class="clearfix">
							<button type="submit" class="btn btn-primary" name="submit">Submit</button>
						</div>
					</div>
				</form>
			</div>
            
<?php

?>
            
            
			<div class="col-md-9">

                <div class="card mt-5">
            <div class="card-header">
              <h2>Your Houses</h2>
            </div>
            <div class="card-body">
             <form action="edit.php" method="post">
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
              <th></th>
            </tr>
            <?php while($person=mysqli_fetch_assoc($own)){ ?>
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
                 <?php // echo "$person[id]. $person[username] <a href='edit.php?edit=$person[id]'>edit <br/>";?>
                  <td><?php echo "<a href='edit.php?edit=$person[id]'>edit <br/>";?><br><br>
                    <?php echo "<a href='delete.php?delete=$person[id]'>delete<br/>";?><br><br>
                </td>
              </tr>
            <?php } ?>
          </table>
                </form>
        </div>
      </div>    
			</div>
    	</div>
    </div>
</body>
</html>
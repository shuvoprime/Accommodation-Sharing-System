<?php
    include "db.php";

session_start();
    
   if(isset($_GET['edit'])){
        $id=$_GET['edit'];
    $query='select * from houses where id='.$id;
    $result=mysqli_query($connection,$query);
        
        if(isset($_POST['address'])){
                $address=$_POST['a'];
                $query="UPDATE houses SET address = '$address' WHERE houses.id = $id;";
                $result=mysqli_query($connection,$query);
                if(!$result){
                    echo "Wrong query".mysqli_error($connection);
                }else{
                    echo '<div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Data updated successfully!</strong>
                            </div>';
                    header('location: owner.php');
            }
        }elseif(isset($_POST['price'])){
                $price=$_POST['p'];
                $query="UPDATE houses SET price = $price WHERE houses.id = $id;";
                $result=mysqli_query($connection,$query);
                if(!$result){
                    echo "Wrong query".mysqli_error($connection);
                }else{
                    echo '<div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>

                            <strong>Data updated successfully!</strong>
                            </div>';
                    header('location: owner.php');
            }
        }elseif(isset($_POST['email'])){
                $email=$_POST['e'];
                $query="UPDATE houses SET email = '$email' WHERE houses.id = $id;";
                $result=mysqli_query($connection,$query);
                if(!$result){
                    echo "Wrong query".mysqli_error($connection);
                }else{
                    echo '<div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>

                            <strong>Data updated successfully!</strong>
                            </div>';
                    header('location: owner.php');
            }
        }elseif(isset($_POST['phone'])){
                $phone=$_POST['c'];
                $query="UPDATE houses SET phone = '$phone' WHERE houses.id = $id;";
                $result=mysqli_query($connection,$query);
                if(!$result){
                    echo "Wrong query".mysqli_error($connection);
                }else{
                    echo '<div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>

                            <strong>Data updated successfully!</strong>
                            </div>';
                    header('location: owner.php');
            }
        }elseif(isset($_POST['description'])){
                $description=$_POST['d'];
                $query="UPDATE houses SET description = '$description' WHERE houses.id = $id;";
                $result=mysqli_query($connection,$query);
                if(!$result){
                    echo "Wrong query".mysqli_error($connection);
                }else{
                    echo '<div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>

                            <strong>Data updated successfully!</strong>
                            </div>';
                    header('location: owner.php');
            }
        }
   }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="edit.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="customer.css">

	<style type="text/css">
		.edit
		{
			border-left: 3px solid #F1F1F1;
		}

		h1
		{
			padding-left: 110px;
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
			
				<table class="table table-bordered table-striped table-dark" width=100% height="300px">
                <h1 id="cd">Current Data</h1>
				<hr style="width: 420px">
           
            <tr>
             <?php                
                
                while($person=mysqli_fetch_assoc($result)){
                
             ?>
                <td>Address</td>
                <td><?php echo $person['address']; ?></td>
                </tr>
                <tr>
                <td>Type</td>
                <td><?php echo $person['type']; ?></td>
                    </tr>
                    <tr>
                <td>Price</td>
                <td><?php echo $person['price']; ?></td>
                    </tr>
                    <tr>
                <td>Email</td>
                <td><?php echo $person['email']; ?></td>
                    </tr>
                    <tr>
                <td>Phone</td>
                <td><?php echo $person['phone']; ?></td>
                    </tr>
                    <tr>
                <td>Description</td>
                <td><?php echo $person['description']; ?></td>
                <?php } ?>
              </tr>
                </table>
				
			</div>


			<div class="col-lg-6">


				<div class="edit">

				
                <h1>Edit Data</h1>
				<hr style="width: 420px">
				<form action="" method="post">
					<div class="container">
						<label for="address"><b>Address</b></label>
						<input type="text" placeholder="location" name="a"  required>

						<div class="clearfix">
							<button type="submit" class="btn btn-primary" name="address">Update</button>
						</div>
					</div>
				</form>


				<form action="" method="post">
					<div class="container">
						<label for="price"><b>Price</b></label>
						<input type="text" placeholder="price"  name="p" required>

						<div class="clearfix">
							<button type="submit" class="btn btn-primary" name="price">Update</button>
						</div>
					</div>
				</form>


				<form action="" method="post">
					<div class="container">
						<label for="email"><b>Email</b></label>
						<input type="email" placeholder="example@gmail.com" name="e"  required>

						<div class="clearfix">
							<button type="submit" class="btn btn-primary" name="email">Update</button>
						</div>
					</div>
				</form>


			   <form action="" method="post">
					<div class="container">
						<label for="phone"><b>Contact Number</b></label>
						<input type="text" placeholder="01712345678"  name="c" required>

						<div class="clearfix">
							<button type="submit" class="btn btn-primary" name="phone">Update</button>
						</div>
					</div>
				</form>


			    <form action="" method="post">
					<div class="container">
						<label for="description"><b>Description</b></label>
						<input type="text" placeholder="Description"  name="d" required>

						<div class="clearfix">
							<button type="submit" class="btn btn-primary" name="description">Update</button>
						</div>
					</div>
				</form>

                </div>
        
			</div>
		</div>
	</div>

</body>
</html>
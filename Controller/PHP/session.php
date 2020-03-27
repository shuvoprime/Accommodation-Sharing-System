<?php
include "db.php";

session_start();
// Storing Session
$user_check=$_SESSION['login_user'];

$query=mysqli_query($connection,"select username from login where username='$user_check'");
$row = mysqli_fetch_assoc($connection,$query);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection);
header('Location: login.php');
}
?>
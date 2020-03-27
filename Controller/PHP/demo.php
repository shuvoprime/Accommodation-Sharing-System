<?php
include "db.php";

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    echo "entered isset";
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
    echo $error;
}
else
{
echo "entered else";
$username=$_POST['username'];
$password=$_POST['password'];


// To protect MySQL injection for Security purpose
//$username = stripslashes($username);
//$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);

$query="SELECT userId FROM customer WHERE username = '$username' and password = '$password'";

$result=mysqli_query($connection,$query);
$rows = mysqli_num_rows($result);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
echo "successful";
header("location: signup.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}else{
    echo "isset failed";
}
?>
    <html>
    <form action="" method="post">

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit">Login</button>
</form>
</html><?php echo "$person[username] <a> href='edit.php?edit=$person[id]'>edit<br> </>";?><br><br>
                    <?php echo "<a> href='delete.php?delete=$person[id]'>delete<br> </a>";?><br><br>
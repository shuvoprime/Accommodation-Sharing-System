<?php

include "db.php";

function signup(){
    if(isset($_POST['signup'])){
        global $connection;
        $name=$_POST['name'];
        $email=$_POST['mail'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $type=$_POST['type'];
        $query="";

        $name=mysqli_real_escape_string($connection,$name);
        $email=mysqli_real_escape_string($connection,$email);
        $username=mysqli_real_escape_string($connection,$username);
        $password=mysqli_real_escape_string($connection,$password);
        $phone=mysqli_real_escape_string($connection,$phone);
        $address=mysqli_real_escape_string($connection,$address);


        if($type==1){
            $query="insert into customer(name,email,username,password,phone,address) values('$name','$email','$username','$password','$phone','$address')";
        }
        else{
            $query="insert into houseowner(name,email,username,password,phone,address) values('$name','$email','$username','$password','$phone','$address')";
        }


        $result=mysqli_query($connection,$query);

        if(!$result){
            die("Sql does not work".mysqli_error($connection));
            header('location: signup.php');
        }else{
            echo "Account created successfully.";
            header('location: login.php');
        }

    }
}


function login(){
    if (isset($_POST['login'])) {

        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
            echo $error;
        }
        else{
            global $connection;
            $username=$_POST['username'];
            $password=$_POST['password'];
            $type=$_POST['type'];

            $username = stripslashes($username);
            $password = stripslashes($password);
            
            $username=mysqli_real_escape_string($connection,$username);
            $password=mysqli_real_escape_string($connection,$password);

            if($type==1){
                $query="SELECT username FROM customer WHERE username = '$username' and password = '$password'";
                $user="customer";
            }else{
                $query="SELECT username FROM houseowner WHERE username = '$username' and password = '$password'";
                $user="owner";
            }

            $result=mysqli_query($connection,$query);
            //$row=mysqli_fetch_assoc($connection,$result);
            $count = mysqli_num_rows($result);
            

            if ($count > 0) {
                $_SESSION['login_user']=$username;
            } else {
                echo "Username or Password is invalid";
                header("location: login.php");
            }
            
            if(isset($_SESSION['login_user'])){
                header("location: $user.php");
            } else {
                echo "Username or Password is invalid";
                header("location: login.php");
            }
                //mysqli_close($connection);
        }
    }
}

?>
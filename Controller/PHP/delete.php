<?php 

    include "db.php";
    session_start();

    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
    }
    
    $query="delete from houses where id=$id";
    $result=mysqli_query($connection,$query);
    
    header("location: owner.php");

?>
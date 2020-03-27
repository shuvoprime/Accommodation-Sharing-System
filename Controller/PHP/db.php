<?php

    $connection = mysqli_connect('localhost','root','','accomodation');
        
    if(!$connection){
        die("Database connection failed.");
    }

?>
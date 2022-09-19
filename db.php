<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "GD4_C_0850";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()) {
        echo "Failed to connect : " . mysqli_connect_errno();
    }

<?php

    global $con;

    $hostname = 'localhost';    // Host Name
    
    $user = 'root';             // username of host
    
    $password = '';             // password of host
    
    $dbname = 'angular';            //database name
            
    $con = new mysqli($hostname,$user,$password,$dbname);
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }

    $query = "SELECT * FROM info";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    echo $json_response = json_encode($row);
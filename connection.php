<?php
    // getting all values from the HTML form

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "orphanage";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
  
    // close connection

?>
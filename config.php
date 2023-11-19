<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pmm2023";

    // Create connection
    // $conn = mysqli_connect($servername, $username, $password);
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }
    // echo "Connected successfully";

    //selectarea bazei de date
    // mysqli_select_db($conn, $database);

?>
<?php

$servername = "localhost";
$username = "root";
$password = "0000";
$dbname = "pharmacy";


// Create connection
$link = new mysqli($servername, $username, $password, $dbname);


if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} else {
   // echo "Connected successfully";
}

?>
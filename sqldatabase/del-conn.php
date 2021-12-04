<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "account";
//connect to the database
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} else {
       // echo ".";
} 
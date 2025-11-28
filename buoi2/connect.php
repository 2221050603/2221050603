<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quan_ly_web_phim";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
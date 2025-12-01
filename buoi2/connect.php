<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quan_ly_web_phim";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Trang chủ</h1>
<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
    }
?>
    <h3>Chào mừng, <?= $_SESSION['username']; ?> (DuyTien)</h3>
    <p>Xin chào ... đây là trang chủ!</p>
    <a href="index.php">về trang chủ</a>
</body>
</html>
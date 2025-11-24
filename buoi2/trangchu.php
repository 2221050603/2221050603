<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trang chủ</h1>
<?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("Location: login.php");
    }
?>
    <h3>Chào mừng, <?= $_SESSION['username']; ?></h3>
    <p>chào xin chào ...</p>
</body>
</html>
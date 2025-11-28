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
    // Nếu chưa đăng nhập thì đá về login (sửa lại logic cho đúng)
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
?>
    <h3>Chào mừng, <?= $_SESSION['username']; ?> (DuyTien)</h3>
    <p>Chào xin chào ... đây là trang chủ nè!</p>
    <a href="login.php">Đăng xuất (về trang đăng nhập)</a>
</body>
</html>
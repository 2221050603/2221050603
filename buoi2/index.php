<?php
    //cookie
    # lưu ở phóa người dùng
    # dùng cho thông tin ít quan trọng 
    $cookieName = "user";
    $cookieValue = "CongMinh";

    setcookie($cookieName, $cookieValue, time() + (86400 ), "/"); // 86400 = 1 day
    if(isset($_COOKIE[$cookieName])){
        echo "Cookie da ton tai";
    } else {
        echo "Cookie chua duoc tao!";
    }


    //session
    # thông tin đăng nhập, giỏ hàng,...
    session_start(); //bắt buộc phải có
    $_SESSION["username"] = "CongMinh";
    $_SESSION["role"] = "admin";
    
?>
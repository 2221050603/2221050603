<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm người dùng</h1>
    <div class="container">
    <form action="index.php?page_layout=themnguoidung" method = "post">
         <div class="box">
        <h1>tên đăng nhâp</h1>
            <input type="text" name="ten_dang_nhap" placeholder= "tên đăng nhập">
        </div>
        <div class="box">
            <h1>password</h1>
            <input type="text" name="password" placeholder= "password" id="">
        </div>
        <div class="box">
            <h1>họ tên</h1>
            <input type="text" name="ho_ten" placeholder="họ tên">
        </div>
        <div class="box">
            <h1>Email</h1>
            <input type="text" name= "email" placeholder="email">
        </div>
        <div class="box">
            <h1>số điện thoại</h1>
            <input type="text" name="so_dien_thoai" id="" placeholder= "số điện thoại">
        </div>
        <div class="box">
            <h1>ngày sinh</h1>
            <select name="" id="">
                <option value="1">1</option>
            </select>
        </div>
        <div class="box">
            <h1>vai trò</h1>
            <input type="vai_tro" name="" id="" placeholder="vai trò">
        </div>
        <div class="box">
            <input type="submit" value="thêm mới">
        </div>
    </form>
    </div>
    <?php
    if(!empty($_POST['ten_dang_nhap']))&&
    (!empty($_POST['password']))&&
    (!empty($_POST['ho_ten']))&&
    (!empty($_POST['email']))&&
    (!empty($_POST['so_dien_thoai']))&&
    (!empty($_POST['ngay_sinh']))&&
    (!empty($_POST['vai_tro'])){

        $tenDangNhap = $_POST['ten_dang_nhap'];
        $password = $_POST['password'];
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        $soDienThoai = $_POST['so_dien_thoai'];
        $ngaySinh = $_POST['ngay_sinh'];
        $vaiTro = $_POST['vai_tro'];
        $sql= "INSERT INTO" 'nguoi_dung'('ten_dang_nhap', 'mat_khau', 'ho_ten', 'email', 'so_dien_thoai', 'vai_tro_id', 'ngay_sinh' )
        value ('$tenDangNhap', '$password', '$ho_ten','$email', '$soDienThoai', '$ngaySinh', '$vaiTro')
        echo $sql;
    }else{
        echo"<p class='waring'> vui lòng nhập đầy đủ thông tin</p>";
    
    }


    ?>
</body>
</html>
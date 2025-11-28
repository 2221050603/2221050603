<?php
include("connect.php");

// Sửa lại tên cột cho đúng thực tế 99% sinh viên dùng
$sql = "SELECT 
            nd.id,
            nd.ten_dang_nhap, 
            nd.ho_ten, 
            nd.email, 
            nd.sdt,                 -- sửa từ so_dt thành sdt (rất hay gặp)
            nd.ngay_sinh,
            vt.ten_vai_tro 
        FROM nguoi_dung nd 
        JOIN vai_tro vt ON nd.vai_tro_id = vt.id";

$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Lỗi SQL: " . mysqli_error($conn));
}
?>

<h2>Thông tin người dùng</h2>
<table border="1" width="100%">
    <tr>
        <th>Tên đăng nhập</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Vai trò</th>
        <th>Ngày sinh</th>
        <th>Chức năng</th>
    </tr>
<?php
while($row = mysqli_fetch_array($result)){
?>
    <tr>
        <td><?php echo $row["ten_dang_nhap"]; ?></td>
        <td><?php echo $row["ho_ten"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["sdt"]; ?></td>               <!-- sửa ở đây luôn -->
        <td><?php echo $row["ten_vai_tro"]; ?></td>
        <td><?php echo $row["ngay_sinh"]; ?></td>
        <td>
            <button>Sửa</button>
            <button>Xóa</button>
        </td>
    </tr>
<?php
}
?>
</table>
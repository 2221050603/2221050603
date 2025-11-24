<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 PHP</title>
</head>
<body>
    <?php 
    //1. in ra màn hình
    echo "Hello world! <br>";
    echo "Hi <br>";

    //2. biến
    // cú pháp: $ + tên biến = Giá trị của biến
    $ten = "Duy Tien";
    $tuoi = 21;
    echo $ten . " " . $tuoi . " tuổi <br>";

    //3. hằng
    define("soPi", "3.14");
    echo soPi . "<br>";
    //4. phân biệt '' và ""
    echo '$ten' . "<br>";
    echo "$ten" . "<br>";

    //5. chuỗi
    #5.1 kiểm tra độ dài của chuỗi
    echo Strlen($ten) . "<br>";
    #5.2 đếm số từ
    echo str_word_count($ten);
    #5.3 tìm kiếm ký tự trong chuỗi
    echo strpos($ten, "e") . "<br>";
    #5.4 thay thế kí tự trong chuỗi
    echo str_replace("Duy", "Bui", $ten) . "<br>";

    //6. toán tử
    $soThuNhat = 10;
    $soThuHai = 5;
    # phép + - * /
    # += -= *= /= %=
    # so sánh == != > < >= <= ===
    echo $soThuNhat + $soThuHai;

    //7. câu điều kiện
    // if("điều kiện"){
    //      logic
    //  }
    //  elseif("điều kiện"){
    //     logic
    //  }
    //  else{
    //      logic
    //  }
    // Kiểm tra tổng của số thứ nhất và số thứ 2
// (nếu < 15 thì in ra nhỏ hơn 15)
// (nếu = 15 thì in ra tổng = 15)
// (còn lại in ra lớn hơn 15)

// $tong = $soThuNhat + $soThuHai;

// echo "Số thứ nhất: $soThuNhat<br>";
// echo "Số thứ hai: $soThuHai<br>";
// echo "Tổng = $tong<br><br>";

// if ($tong < 15) {
//     echo "Tổng nhỏ hơn 15";
// } elseif ($tong == 15) {
//     echo "Tổng bằng 15";
// } else {
//     echo "Tổng lớn hơn 15" . "<br>";
// }

// //8. switch case
// $color = "red"; // Thử thay thành "red", "blue", "green" hoặc bất kỳ giá trị nào khác

//     switch ($color) {
//         case "red":
//             echo "is red";
//             break;
//         case "blue":
//             echo "is blue";
//             break;
//         case "green":
//             echo "is green";
//             break;
//         default:
//             echo "no color";
//             break;
//     }

// //9. vòng lặp for
// for ($i=0; $i < 6; $i++){
//     echo $i . "<br>";
// }

// //10.mảng
//  $mang = ["An", "Nhat Anh", "Vu Anh"];
 
//  //đếm phần tử
//  echo count($mang) . "<br>";
//  echo $mang[1] . ">br>";
//  print_r($mang) ;
//  $mang[0] = "Hai Anh";
//  print_r($mang);
//  $mang[] = "Tam";
//  print_r($mang);
//  #xóa
//  unset($mang[3]);
//  print_r($mang);
 
 #sắp xếp mảng
 $mang = ["C" , "B" , "D" , "A"];
 print_r($mang);
echo "<br>";
#sx tăng
sort($mang);
print_r($mang);
#sx giảm
echo"<br>";
rsort($mang);
print_r($mang);

//11. kiểm tr xem biến có tồn tại hay ko
// $bienA = "hello";
// isset($bienA);  //true
// isset($bienB);  //false

// if()

//check empty
$check = "a";
if(empty($check)){
    if(empty)
}
?>
</body>
</html>
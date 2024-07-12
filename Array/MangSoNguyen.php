<?php

// 1 mảng có chỉ mục ở dạng số. Giá trị được lưu trữ và truy cập tuyến tính.

$numbers = array( 1, 2, 3, 4, 5);
foreach( $numbers as $value )
{
    echo "Giá trị phần tử mảng là $value </br>";
}
/* Phương thức thứ hai để tạo mảng trong PHP. */
$numbers[0] = "Volvo";
$numbers[1] = "BMW";
$numbers[2] = "Toyota";
$numbers[3] = "Mazda";
$numbers[4] = "Kia";
foreach( $numbers as $value )
{
    echo "Giá trị phần tử mảng là $value </br>";
}




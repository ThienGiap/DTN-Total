<?php

// 1 mảng với chỉ mục chuỗi ký tự. Mảng này lưu trữ giá trị phần tử bằng sự kết hợp với giá trị key
// thay vì trong một trật tự chỉ mục tuyến tính nghiêm ngặt như mảng số nguyên. Các mảng liên hợp 
// khá là giống nhau về tính năng nhưng chỉ khác nhau về mặt chỉ mục.

/* Phương thức thứ nhất để tạo mảng liên hợp. */
$dong_xe = array("volvo" => 3, "bmw" => 2, "toyota" => 1);

echo "Mức độ phổ biến của Volvo là ". $dong_xe['volvo']. "";
echo "Mức độ phổ biến của BMW là ".  $dong_xe['bmw']. "";
echo "Mức độ phổ biến của Toyota là ".  $dong_xe['toyota']. "";

/* Phương thức thứ hai để tạo mảng liên hợp. */
$dong_xe['volvo'] = "low";
$dong_xe['bmw'] = "medium";
$dong_xe['toyota'] = "high";

echo "Mức độ phổ biến của Volvo là ". $dong_xe['volvo'] . "";
echo "Mức độ phổ biến của BMW là ".  $dong_xe['bmw']. "";
echo "Mức độ phổ biến của Toyota là ".  $dong_xe['toyota']. "";
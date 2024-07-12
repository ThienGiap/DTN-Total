<?php
// 1 mảng chứa 1 hoặc nhiều mảng và các giá trị được truy cập bẳng cách sử dụng nhiều chỉ mục có nghĩa là
// mỗi phần tử cũng có thể là 1 mảng. Và mỗi phần tử trong một mảng phụ có thể là 1 mảng và cứ tiếp tục.

$diemdanhgia = array( 
    "volvo" => array
    (
        "mausac" => 7,
        "kieudang" => 8,  
        "tocdo" => 9
    ),

    "bmw" => array
    (
        "mausac" => 7,
        "kieudang" => 9,
        "tocdo" => 6
    ),

    "toyota" => array
    (
        "mausac" => 8,
        "kieudang" => 8,
        "tocdo" => 9
    )
);
 
/* truy cập các giá trị của mảng đa chiều */
echo "Điểm đánh giá màu sắc của Volvo là: " ;
echo $diemdanhgia['volvo']['mausac'] . ""; 

echo "Điểm đánh giá kiểu dáng của BMW là: ";
echo $diemdanhgia['bmw']['kieudang'] . ""; 

echo "Điểm đánh giá tốc độ của Toyotalà: " ;
echo $diemdanhgia['toyota']['tocdo'] . "";
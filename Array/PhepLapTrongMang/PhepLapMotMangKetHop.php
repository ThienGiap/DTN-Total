<?php
// Cú pháp:

foreach($array as $key=>$value){
    // Code...
}

// Trong đó $array là mảng mà ta muốn lặp dứ liệu, $key là 1 biến vốn tạm thời chứa mỗi khóa
// và $value là một biến vốn tạm thời chứa mỗi giá trị.

$car= array( 
    "ten" =>"Volvo", 
    "tocdo" =>"230", 
    "kieudang" =>"co_dien", 
    "mausac" =>"nau_xam"
);

foreach($car as $key=>$val){
    echo "Key: $key. Gia Tri: $val";
}
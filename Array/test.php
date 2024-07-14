<?php
// Test:

// $xe = ['thống nhất'=>'vn', 'RR'=>'EU'];
// print_r(array_change_key_case($xe, CASE_UPPER));


// $n = [1, 4, 12, 6, 44];
// sort($n);
// // array_push($n, 99, 100);
// // array_pop($n);
// // array_shift($n);
// // array_unshift($n, 101);
// // print_r(array_slice($n, 3));
// $legth = count($n);
// for($x = 0; $x < $legth; $x++){
//     echo $n[$x];
//     echo "</br>";
// }



// $a = ["Thống nhất"=>"Ngon", "Volvo"=>"Đẹp", "Vin"=>"Ngon"];
// // $b = ["Asus"=>"Ko ngon", "Acer"=>"Ngon"];
// print_r(array_unique($a));


// function test_odd($var)
// {
//     // Trả về true nếu đầu vào là số chẵn
//     return !($var & 1);
// }

// // function test_odd1($var)
// // {
// //     // Trả về true nếu đầu vào là số lẽ
// //     return ($var & 1);
// // }

// $a1=array(1,3,2,3,4);
// print_r(array_filter($a1,"test_odd"));



// // Hàm so sánh
// function cmp($a, $b) {
//     if ($a == $b) {
//         return 0;
//     }
//     return ($a < $b) ? -1 : 1;
// }

// // Mảng cần sắp xếp
// $array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);

// print_r($array); // Mảng ban đầu
// uasort($array, 'cmp'); // Sắp xếp
// print_r($array); // Mảng sau khi sắp xếp

// // Hàm so sánh
// function my_sort($a, $b) {
//     if ($a == $b) {
//         return 0;
//     }
//     return ($a < $b) ? -1 : 1;
// }

// // Mảng cần sắp xếp
// $arr = array('a' => 4, 'b' => 2, 'c' => 8, 'd' => 6);

// uksort($arr, 'my_sort');

// foreach ($arr as $key => $value) {
//     echo "[$key] => $value<br>";
// }


// function cmp($a, $b) {
//     if ($a == $b) {
//         return 0;
//     }
//     return ($a > $b) ? 1 : -1;
// }

// $a = array(4, 2, 5, 3, 1);
// usort($a, "cmp");

// foreach ($a as $key => $value) {
//     echo "$key: $value<br>";
// }


$input_array = array("FirSt" => 1, "SecOnd" => 4); // = 1 chữ hoa và = 0 chữ thường
print_r(array_change_key_case($input_array, CASE_UPPER)); // case_upper chuyển chuỗi thành chữ hoa
// Kết quả: Array ( [FIRST] => 1 [SECOND] => 4 )


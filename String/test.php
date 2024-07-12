<?php
// $text = "This is a 'test' string.";
// $escaped_text = addcslashes($text, "'");

// echo $escaped_text;

// $str = "one,two,three,four";
// $exploded_array = explode(",", $str);

// print_r($exploded_array);

// $colors = ["red", "green", "blue"];
// $combined_string = implode("-", $colors);

// echo $combined_string;

$str = "Giáp";
$md5_hash = md5($str);
echo $md5_hash;
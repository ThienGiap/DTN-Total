<?php
require "test1.php";
require "test2.php";

use Test1\SinhVien as SinhVienTest1;
use Test2\SinhVien as SinhVienTest2;

// 2 class trùng tên mà đã định danh namespace thì phải đặt bí danh cho class đó "as"
// Namespace giúp ta định danh riêng cho class
// Namespace luôn được đặt đầu trong file đóng vai trò là ko gian đại diện cho class/funtion/biến trong file đó
// Namespace giúp gom các class lại để quản lý code dễ dàng hơn

$svTest1 = new SinhVienTest1("Nguyễn Thiện Giáp", 2004);
$svTest1->hienThi();
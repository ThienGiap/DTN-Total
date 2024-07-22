<?php
namespace Test1;

class SinhVien{
    public $ten;
    public $namsinh;
    public function __construct($ten, $namsinh)
    {
        $this->ten = $ten;
        $this->namsinh = $namsinh;
    }
    public function hienThi(){
        echo $this->ten;
        echo '<br>';
        echo $this->namsinh;
    }
}
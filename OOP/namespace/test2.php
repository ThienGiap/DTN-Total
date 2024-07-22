<?php
namespace Test2;

class SinhVien{
    public $ten;
    public $tuoi;
    public function __construct($ten, $tuoi)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }
    public function hienThi(){
        echo $this->ten;
        echo '<br>';
        echo $this->tuoi;
    }
}
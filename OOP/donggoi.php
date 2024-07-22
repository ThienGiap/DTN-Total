<?php
class GiangVien{
    public $maGv;
    public $tenGv;
    public $namBatDau;
    public $luongGv;
    public $soGioDay;

    public function __construct($maGv, $tenGv, $namBatDau, $luongGv, $soGioDay)
    {
        $this->maGv = $maGv;
        $this->tenGv = $tenGv;
        $this->namBatDau = $namBatDau;
        $this->luongGv = $luongGv;
        $this->soGioDay = $soGioDay;
    }

    public function tongLuong(){
        $tong = $this->luongGv * $this->soGioDay;
        return $tong;
    }

    public function hienThi(){
        echo $this->maGv;
        echo $this->tenGv;
        echo $this->namBatDau;
        echo $this->luongGv;
        echo $this->soGioDay;
        echo $this->tongLuong();
    }
}
$gv1 = new GiangVien('FE0001', 'Nguyễn Văn A', 2000, 100000, 1000);
$gv1->hienThi();
<?php
// 1 class kế thừa từ class cha của nó 
// thì nó có thể sử dụng các thuộc tính và phương thức của class cha

class ConNguoi{
    public $ten;
    public $tuoi;
    public $chan;
    public $tay;

    public function an(){
        echo 'Ăn bằng miệng';
        echo '<br>';
    }
    public function setChan($soChan){
        $this->chan = $soChan;
    }
    public function setTay($soTay){
        $this->tay = $soTay;
    }
    public function hienThi(){

    }
}
class TreCon extends ConNguoi{
    public function bo(){
        parent::hienThi();
        echo 'Trẻ con bò bằng '.$this->tay.' tay và '.$this->chan.' chân';
        echo '<br>';
    }   
}
$trecon = new TreCon();
$trecon->setChan(2);
$trecon->setTay(2);
$trecon->bo();
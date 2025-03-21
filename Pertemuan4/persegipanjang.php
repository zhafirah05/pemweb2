<?php
class persegipanjang{
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        
    }

    public function hitungluas(){
        return $this->panjang * $this->lebar;
    }

    public function hitungkeliling(){
        return 2 * ($this->panjang + $this->lebar);
    }


}

$persegi1 = new persegipanjang(5, 6);
echo "Luas Persegi Panjang : " . $persegi1->hitungluas() . "<br>";
echo "Keliling Persegi Panjang : " . $persegi1->hitungkeliling() . "<br>";

?>
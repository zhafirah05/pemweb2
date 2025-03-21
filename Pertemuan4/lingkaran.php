<?php
class lingkaran{
    public $jari;
    public const PHI = 3.14;
    public function __construct($r){
        $this->jari = $r;
    }

    public function getluas(){
        $luas = self::PHI * $this->jari * $this->jari;
        return $luas;
    }

    public function getkeliling(){
        $keliling = 2.0 * self::PHI * $this->jari;
        return $keliling;
    }

    public function cetak(){
        echo "lingkaran dengan jari2" . $this->jari ;
        echo "<br>luas = " . $this->getluas();
        echo "<br>keliling = " .  $this->getkeliling();
    }

    }
   
?>
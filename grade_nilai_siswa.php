<?php
if (isset($_POST['submit'])) {
    $nama =$_POST['Nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $Nilai_tugas = $_POST['nilai_tugas'];
    
    //status kelulusan
    $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35)  + ($Nilai_tugas * 0.35);
    
    
    //grade nilai
    if ($nilai_total >= 85 && $nilai_total <= 100) {
        $grade = "A";
    } elseif ($nilai_total >= 70) {
        $grade = "B";
    } elseif ($nilai_total >= 56) {
        $grade = "C";
    } elseif ($nilai_total >= 36) {
        $grade = "D";
    } elseif ($nilai_total >= 0) {
        $grade = "E";
    } else {
        $grade = "I"; 
    }
    
    echo "<p>Nama  : $nama</p>";
    echo "<p>Mata Kuliah : $matkul</p>";
    echo "<p>Nilai UTS : $nilai_uts</p>";
    echo "<p>Nilai UAS : $nilai_uas</p>";
    echo "<p>Tugas/Praktikum : $Nilai_tugas</p>";
    echo"<p>Grade : $grade</p>";
    echo"<p>Total Nilai : $nilai_total</p>";
    //chek nilai total
    if ($nilai_total >= 55) {
        echo "<p>Status : lulus.</>";
    } else {
        echo "<p>Status : Tidak  Lulus.</p>";
    }
}

?>


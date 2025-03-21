<?php
require_once 'clas_nilaimahasiswa.php';

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Rizky";
$mhs1->matakuliah = "Pemrograman Web 1";
$mhs1->nilaitugas = 80;
$mhs1->nilai_uts = 90;
$mhs1->nilai_uas = 85;

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "fira";
$mhs2->matakuliah = "Dasar-Dasar Pemrograman";
$mhs2->nilaitugas = 88;
$mhs2->nilai_uts = 55;
$mhs2->nilai_uas = 70;

$mhs3 = new NilaiMahasiswa();
$mhs3->nama = "Rafi";
$mhs3->matakuliah = "Pemrograman Web 2";
$mhs3->nilaitugas = 50;
$mhs3->nilai_uts = 60;
$mhs3->nilai_uas = 66;

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "rika";
$mhs1->matakuliah = "Pemrograman Web 1";
$mhs1->nilaitugas = 80;
$mhs1->nilai_uts = 90;
$mhs1->nilai_uas = 85;

$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];


?>

<h2 style="text-align: center;">Daftar Nilai Mahasiswa</h2>
<table border="1" cellspacing ="2" cellpadding="2" style="width: 100%;">
    <tr> 
        <th style="width: 20%;">Nama</th>
        <th style="width: 20%;">Mata Kuliah</th>
        <th style="width: 20%;">Nilai Tugas</th>
        <th style="width: 20%;">Nilai UTS</th>
        <th style="width: 20%;">Nilai UAS</th>
        </tr>
        <tbody>
        <?php
        $no = 1;
        foreach ($ar_mahasiswa as $obj) {
            ?>
            <tr>
                <td><?=$no ?></td>
                <td><?=$obj->nama ?></td>
                <td><?=$obj->matakuliah ?></td>
                <td><?=$obj->nilaitugas; ?></td>
                <td><?=$obj->nilai_uts; ?></td>
                <td><?=$obj->nilai_uas; ?></td>
                <td><?=$obj->getNilaiAkhir(); ?></td>
                <td><?=$obj->kelulusan(); ?> </td>
                </tr>
                <?php
                
                $no++; 
                }
                ?>
                
                <?php
                include_once 'form_nilai.php'
                ?>
</tbody>
</table>

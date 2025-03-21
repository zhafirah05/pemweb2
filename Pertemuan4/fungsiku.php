<?php 
/**
 * Fungsi untuk menghitung nilai akhir
 * @param float $nilai_uts Nilai UTS (0-100)
 * @param float $nilai_uas Nilai UAS (0-100)
 * @param float $nilai_tugas Nilai Tugas (0-100)
 * @return float Nilai Akhir
 * @throws Exception Jika nilai tidak valid
 */
function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas) {
    // Validasi input
    if (!is_numeric($nilai_uts) || !is_numeric($nilai_uas) || !is_numeric($nilai_tugas)) {
        throw new Exception("Nilai harus berupa angka.");
    }
    if ($nilai_uts < 0 || $nilai_uts > 100 || $nilai_uas < 0 || $nilai_uas > 100 || $nilai_tugas < 0 || $nilai_tugas > 100) {
        throw new Exception("Nilai harus berada dalam rentang 0 hingga 100.");
    }

    // Bobot nilai
    define("UTS", 0.25);
    define("UAS", 0.30);
    define("TUGAS", 0.45);

    // Hitung nilai akhir
    return (UTS * $nilai_uts) + (UAS * $nilai_uas) + (TUGAS * $nilai_tugas);
}

/**
 * Fungsi untuk menentukan kelulusan
 * @param float $nilai_akhir Nilai Akhir
 * @param float $batas_nilai Batas Nilai Kelulusan (default 60)
 * @return string LULUS atau TIDAK LULUS
 * @throws Exception Jika nilai akhir tidak valid
 */
function kelulusan($nilai_akhir, $batas_nilai = 60) {
    // Validasi input
    if (!is_numeric($nilai_akhir)) {
        throw new Exception("Nilai akhir harus berupa angka.");
    }
    if ($nilai_akhir < 0 || $nilai_akhir > 100) {
        throw new Exception("Nilai akhir harus berada dalam rentang 0 hingga 100.");
    }

    // Tentukan kelulusan
    if ($nilai_akhir >= $batas_nilai) {
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}
?>
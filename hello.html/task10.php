<?php
function hitunggrade($nilai) {
    if ($nilai > 0 && $nilai < 50) {
        return 'E';
    } elseif ($nilai >= 50 && $nilai < 60) {
        return 'D';
    }elseif ($nilai >= 60 && $nilai < 70) {
        return 'C';
    }elseif ($nilai >= 70 && $nilai < 80) {
        return 'B';
    }elseif ($nilai >= 80 && $nilai < 90) {
        return 'A';
    } elseif ($nilai >= 90) {
        return 'A+';
    } else {
        return 'Nilai tidak valid';
    }
}
$nilaiMahasiswa = 100;
$grade = hitungGrade($nilaiMahasiswa);

echo "Nilai Mahasiswa : $nilaiMahasiswa <br>";
echo "Grade : $grade";

?>
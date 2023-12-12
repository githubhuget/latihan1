<?php
$tanggal = ["5","6","7"];
//  penulisan array dengan cara lama
$hari = array ("senin","selasa","ranu","kamis","jumat");
// var_dump($hari);
// echo $hari[4];
// penulisan array dengan cara baru 
$bulan = ["juli","agustus","september","oktober","november","desember"];
echo "<br>";
// var_dump($bulan);
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array </title>
</head>
<body>
    <h3>
        hari <?= $hari[3]; ?> tanggal  <?= $tanggal[2]; ?> bulan <?= $bulan[5]; ?>
    </h3>
</body>
</html>
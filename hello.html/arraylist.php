<?php
    $mahasiswa = ["teguh","23510031","sistem informasi","teguh@stimata.sc.id"]
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array multidimensi</title>
</head>
<body>
    <h2>Daftar mahasiswa</h2>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs;  ?></li>
            <?php endforeach;  ?>
    </ul>
</body>
</html>
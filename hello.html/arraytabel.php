<?php
$angka = [3,2,5,15,20,77,89];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array 2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{
            clear: both;
        }
    </style>
</head>

<body>
    <!-- <?php for($i=0; $i < 7;$i++){ ?>
        <div class="kotak">
            <?php $angka[$i]; ?>
        </div>
        <?php }; ?> -->
        <div class="clear"></div>
        <?php foreach ($angka as $a) : ?>
            <div class="kotak"><?= $a;    ?></div>
            <?php endforeach ?>
            <div class="clear"></div>
            <?php foreach ($angka as $a) : ?>
            <div class="kotak"><?= $a;    ?></div>
            <?php endforeach ?>
            <div class="clear"></div>
</body>
</html>
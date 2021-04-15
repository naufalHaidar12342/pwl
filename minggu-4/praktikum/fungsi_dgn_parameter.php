<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function cetak_ganjil($awal, $akhir)
    {
        for ($i = $awal; $i < $akhir; $i++) {
            if ($i % 2 == 1) {
                echo "$i ";
            }
        }
    } //pemanggilan fungsi
    $a = 10;
    $b = 50;
    echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
    cetak_ganjil($a, $b);


    ?>
</body>

</html>
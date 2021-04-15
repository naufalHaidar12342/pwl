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
    function luas_lingkaran($jari)
    {
        return 3.14 * $jari * $jari;
    }
    //pemanggilan fungsi
    $r = 10;
    echo "Luas lingkaran dengan jari-jari $r = ";
    echo luas_lingkaran($r);

    ?>
</body>

</html>
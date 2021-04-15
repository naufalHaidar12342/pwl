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
    function tambah_string($str)
    {
        $str = $str . ", Semarang";
        return $str;
    }
    //
    $str = "Universitas Dian Nuswantoro";
    echo "\$str = $str<br>";
    echo tambah_string($str) . "<br>";
    echo "\$str = $str<br>";

    ?>
</body>

</html>
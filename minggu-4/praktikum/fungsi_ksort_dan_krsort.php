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
    $arrayNilai = array("ani" => 80, "otim" => 90, "ana" => 75, "budi" => 85);
    echo "<pre>";
    print_r($arrayNilai);
    echo "</pre>";
    //
    ksort($arrayNilai);
    reset($arrayNilai);
    // 
    echo "<b>array sesudah pengurutan dengan ksort()</b>";
    echo "<pre>";
    print_r($arrayNilai);
    echo "</pre>";
    //
    krsort($arrayNilai);
    reset($arrayNilai);
    // 
    echo "<b>array sesudah pengurutan dengan ksort()</b>";
    echo "<pre>";
    print_r($arrayNilai);
    echo "</pre>";

    ?>
</body>

</html>
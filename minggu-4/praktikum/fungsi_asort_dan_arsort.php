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
        $arrayNilai=array("john"=>70,"deanne"=>67,"max"=>78,"tony"=>55);
        
        echo"<b>array sebelum pengurutan</b>";
        echo "<pre>";
        print_r($arrayNilai);
        echo "</pre>";

        echo "<br>";
        asort($arrayNilai);
        reset($arrayNilai);

        echo"<b>array setelah pengurutan dengan fungsi asort() </b>";
        echo "<pre>";
        print_r($arrayNilai);
        echo "</pre>";

        echo "<br>";
        arsort($arrayNilai);
        echo"<b>array setelah pengurutan dengan fungsi arsort()</b>";
        echo "<pre>";
        print_r($arrayNilai);
        echo "</pre>";

        /*Output
        array sebelum pengurutan

        Array
        (
            [john] => 70
            [deanne] => 67
            [max] => 78
            [tony] => 55
        )


        array setelah pengurutan dengan fungsi asort()

        Array
        (
            [tony] => 55
            [deanne] => 67
            [john] => 70
            [max] => 78
        )


        array setelah pengurutan dengan fungsi arsort()

        Array
        (
            [max] => 78
            [john] => 70
            [deanne] => 67
            [tony] => 55
        )


        */
    ?>
</body>

</html>
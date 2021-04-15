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
    $str = "Everything i do, i do it for YOU";
    echo "<b>String asli</b> : $str";
    echo "<br><b>strtolower()</b> : " . strtolower($str);
    echo "<br><b>strtoupper()</b> : " . strtoupper($str);
    echo "<br><b>ucfirst() :</b> " . ucfirst($str);
    echo "<br><b>ucwords() :</b> " . ucwords($str);
    echo "<br><b>strrev() :</b> " . strrev($str);
    echo "<br><b>Jumlah karakter</b> : " . strlen($str);

    ?>
</body>

</html>
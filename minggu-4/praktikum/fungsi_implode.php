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
    $buahan = array('mangga', 'jeruk', 'rambutan', 'apel', 'nanas');
    $buah = implode(",", $buahan);
    echo "Saya suka buah " . $buah;
    // mangga,jeruk,rambutan,apel,nanas

    ?>
</body>

</html>
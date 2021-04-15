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
    $arr = get_defined_functions();
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    ?>
</body>

</html>
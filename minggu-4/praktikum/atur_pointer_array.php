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
    $transport = array('foot', 'bike', 'car', 'plane');
    //
    echo ("mencetak/menampilkan struktur array");
    echo "<pre>";
    print_r($transport);
    echo "</pre>";
    $mode = current($transport);
    echo $mode . "<br>";
    // $mode = 'foot';


    $mode = next($transport);
    echo $mode . "<br>";
    // $mode = 'bike';

    $mode = current($transport);
    echo $mode . "<br>";
    // $mode = 'bike';

    $mode = prev($transport);
    echo $mode . "<br>";
    // $mode = 'foot';

    $mode = end($transport);
    echo $mode . "<br>";
    // $mode = 'plane';

    $mode = current($transport);
    echo $mode . "<br>";
    // $mode = 'plane';


    ?>
</body>

</html>
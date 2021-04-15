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
    $file = "test.this.txt";
    $ext1 = strstr($file, ".");
    $ext2 = strchr($file, ".");
    $ext3 = strrchr($file, ".");
    echo $ext1 . "<br>";
    //.this.txt
    echo $ext2 . "<br>";
    //.this.txt
    echo $ext3;
    //.txt

    ?>
</body>

</html>
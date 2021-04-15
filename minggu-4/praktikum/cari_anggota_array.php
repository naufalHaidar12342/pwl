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
    $arrBuah = array("Mangga", "Apel", "Pisang", "Kedondong", "Jeruk");
    if (in_array("Kedondong", $arrBuah)) {
        echo "Ada buah Kedondong di sini";
    } else {
        echo "Tidak ada buah Kedondong di sini";
    }
    ?>
</body>

</html>
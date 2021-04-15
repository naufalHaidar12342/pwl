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
    if (function_exists('exif_read_data')) {
        echo "Fungsi exif_read_data() ada di PHP.<br />\n";
    } else {
        echo "Fungsi exif_read_data() tidak ada di PHP.<br />\n";
    }

    ?>
</body>

</html>
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
    if (isset($_POST['Pilih'])) {
        echo "Band Favorit Anda adalah :<br>";
        if (isset($_POST['band01'])) {
            echo "+ " . $_POST['band01'] . "<br>";
        }
        if (isset($_POST['band02'])) {
            echo "+ " . $_POST['band02'] . "<br>";
        }
        if (isset($_POST['band03'])) {
            echo "+ " . $_POST['band03'] . "<br>";
        }
        if (isset($_POST['band04'])) {
            echo "+ " . $_POST['band04'] . "<br>";
        }
    }

    ?>
</body>

</html>
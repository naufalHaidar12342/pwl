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
    // Contoh 1
    $buah = "mangga pisang rambutan apel jeruk kedondong";
    $buahan = explode(" ", $buah);
    echo $buahan[0] . "<br>";
    // mangga
    echo $buahan[3] . "<br>";
    // apel

    // Contoh 2

    $data = "foo:*:1023:1000::/home/foo:/bin/sh";
    list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
    echo $user . "<br>";
    // foo
    echo $pass;
    // *

    ?>
</body>

</html>
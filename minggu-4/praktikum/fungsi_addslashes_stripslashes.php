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
    $str = "Is your name O'Reilly ?";
    $str2 = addslashes($str);
    $str3 = stripslashes($str2);
    echo "<b>String asli</b> : $str";
    echo "<br><b>addslashes()</b> : $str2";
    echo "<br><b>stripslashes()</b> : $str3";

    ?>
</body>

</html>
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
    $str = "<b><u>Everything I do, I do it for you</u></b>";
    echo $str . "<br>";

    //no tag html
    echo strip_tags($str) . "<br>";

    //allow tag <u>
    echo strip_tags($str, "<u>") . "<br>";

    //tampil apa adanya
    echo htmlspecialchars($str) . "<br>";

    //tampil apa adanya
    echo htmlentities($str);
    ?>
</body>

</html>
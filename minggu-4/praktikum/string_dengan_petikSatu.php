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
    echo 'this is a simple string<br>';
    echo 'You can also have embedded newlines in strings this way as it is okay to do';

    // Outputs: Arnold once said: "I'll be back"
    echo 'Arnold once said: "I\'ll be back"';

    // Outputs: You deleted C:\*.*?
    echo 'You deleted C:\\*.*?';

    // Outputs: You deleted C:\*.*?
    echo 'You deleted C:\*.*?';

    // Outputs: This will not expand: \n a newline
    echo 'This will not expand: \n a newline';

    // Outputs: Variables do not $expand $either
    echo 'Variables do not $expand $either';
    ?>
</body>

</html>
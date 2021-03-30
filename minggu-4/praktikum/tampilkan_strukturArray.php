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
        $arrayWarna=array("hijau","biru","krem","abu-abu");

        $arrayNilai=array("ani"=>80,"dodit"=>78,"tono"=>90);

        echo "<pre>";
        
        print_r($arrayWarna);
        echo "<br>";
        
        print_r($arrayNilai);
        echo "<br>";

        echo "</pre>";
        
        //outputnya
        /*
        
        Array
        (
            [0] => hijau
            [1] => biru
            [2] => krem
            [3] => abu-abu
        )

        Array
        (
            [ani] => 80
            [dodit] => 78
            [tono] => 90
        )
        
        */
    ?>
</body>

</html>
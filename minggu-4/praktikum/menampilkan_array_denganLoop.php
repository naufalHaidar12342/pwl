<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menampilkan array dengan loop</title>
</head>

<body>
    <?php
        $arrayWarna=array("biru","hitam","merah","jingga","ungu");

        echo"menampilkan array dengan for loop";echo"<br>";

        for ($i=0; $i<count($arrayWarna) ; $i++) { 
            echo "apakah anda suka warna <font color=$arrayWarna[$i]>".$arrayWarna[$i]."</font>?<br>";
        }

        echo"<br>";

        echo"menampilkan array dengan for each";echo"<br>";
        
        foreach ($arrayWarna as $pilihWarna){
            echo"apakah anda suka warna <font color=$pilihWarna>".$pilihWarna."</font>?<br>";
        }
    ?>
</body>

</html>
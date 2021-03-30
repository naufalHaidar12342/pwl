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
        $arrayNilai=array("ani"=>80, "otim"=>90,"ana"=>75,"budi"=>85);

        echo "menampilkan isi array dengan for loop<br>";

        foreach ($arrayNilai as $nama=>$nilai){
            echo "nilai $nama= $nilai<br>";
        }
        reset($arrayNilai);
        echo"<br>";

        echo"menampilkan isi array dengan while dan list<br>";

        while (list($nama,$nilai)=each($arrayNilai)) {
            echo"nilai $nama=$nilai<br>";
        }
        /*output
            menampilkan isi array dengan for loop
            nilai ani= 80
            nilai otim= 90
            nilai ana= 75
            nilai budi= 85

            menampilkan isi array dengan while dan list
            nilai ani=80
            nilai otim=90
            nilai ana=75
            nilai budi=85

        
        
        */
    ?>
</body>

</html>
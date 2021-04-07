<?php
    //menyambungkan ke database
    $sambung_ke_db=mysqli_connect("localhost","root","","rental_mobil");

    //mengambil data dari tabel kendaraan
    $tabel_kendaraan=mysqli_query($sambung_ke_db,"SELECT * FROM kendaraan");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman operator</title>
</head>

<body>
    
</body>
</html>
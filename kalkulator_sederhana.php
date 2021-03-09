<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator sederhana</title>
    <style type="text/css">
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box; 
        }
        body {
            font-size: 16px;
            padding-top: 4rem;
            padding-left: 2rem;
        }
    </style>
</head>
<body>
    <!-- bilangan pertama -->
    <label for="bil_1">bil. pertama :</label>
    <input type="text" name="bil_1" id="bil_1">
    <br>
    <br>

    <!-- bilangan kedua -->
    <label for="bil_2">bil. kedua :</label>
    <input type="text" name="bil_2" id="bil_2"><br>
    <br>

    <!-- pilih operasi aritmatika -->
    <label for="operasiMath">operasi :</label>
    <select name="operasiMath" id="operasiMath">
        <option value="">tambah(+)</option>
        <option value="">kurang(-)</option>
        <option value="">bagi(/)</option>
        <option value="">kali(*)</option>
    </select>

    <?php

    ?>
</body>
</html>



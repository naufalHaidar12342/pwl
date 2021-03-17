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

<?php
    /* bagian di bawah terinspirasi dari
    github fabiyudzaky*/ 
    
        $bil_1=0;
        $bil_2=0;
        $hasil=0;
        $operasiMath=0;  
        
        // inisiasi membaca isi form
    if(isset($_POST['operasiMath'])){
        $operasiMath=$_POST['operasiMath'];
    }

    if(isset($_POST['bil_1'])){
        $bil_1=$_POST['bil_1'];
    }

    if(isset($_POST['bil_2'])){
        $bil_2=$_POST['bil_2'];
    }
        
    if (isset($_POST['hasil'])) {
        $hasil=$_POST['hasil'];
    }
    else {
        $i=1;
    }
    
    if ($operasiMath=='+') {
        $hasil= $bil_1 + $bil_2;
        echo "hasilnya adalah ".$hasil;
        // return $hasil;
    }
    else if ($operasiMath=='-') {
        $hasil= $bil_1 - $bil_2;
        echo "hasilnya adalah ".$hasil;
        // return $hasil;
    }
    
    else if ($operasiMath=='*') {
        $hasil= $bil_1 * $bil_2;
        echo "hasilnya adalah ".$hasil;
        // return $hasil;
    }
    
    else if ($operasiMath=='/') {
        $hasil= $bil_1 / $bil_2;
        echo "hasilnya adalah ".$hasil;
        // return $hasil;
    }


    else {
        $hasil=$hasil;
        // echo "hasilnya adalah ".$hasil;
    }
    # code...
    
    
    /* bagian di bawah membaca input dari user */
        
    ?>

    <form action="" method="post">
        <!-- bilangan pertama -->
        <label for="">bil. pertama :</label>
        <input type="text" name="bil_1" id="bil_1">
        <br>
        <br>

        <!-- bilangan kedua -->
        <label for="bil_2">bil. kedua :</label>
        <input type="text" name="bil_2" id="bil_2"><br>
        <br>

        <!-- pilih operasi aritmatika -->
        <label for="">operasi :</label>
        <select name="operasiMath" id="operasiMath">
            <option value="">Pilih operasi...</option>
            <option value="+">tambah(+)</option>
            <option value="-">kurang(-)</option>
            <option value="/">bagi(/)</option>
            <option value="*">kali(*)</option>
        </select>

        <br>
        <!-- <label for="hasil">Hasil : </label> -->
        <input type="submit" name ="hasil" value="hasil"> <?php echo $hasil;?>
    
    
    </form>
    

    
</body>
</html>



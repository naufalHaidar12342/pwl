<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faktorial dengan for loop</title>
    <!-- sumber referensi : https://www.javatpoint.com/php-factorial-program -->
</head>

<body>
    <form action="" method="post">
        <!-- bagian untuk input angka -->
        <label for="">masukan angka =</label>
        <input type="text" name="angka_faktorial" id="angka_faktorial">

        <!-- submit -->
        <input type="submit" name="submit" value="Submit"/>


    </form>

    <?php
        // if ($_POST) {
        //     $faktorial=1;

        //     $angka_faktorial=$_POST['angka_fa']
        // }
        
        $angka_faktorial=0;
        if (isset($_POST['submit'])) {
            $faktorial=1;
            $angka_faktorial = $_POST['angka_faktorial'];
            

            for ($i=1; $i<=$angka_faktorial; $i++) {
                $faktorial=$faktorial*$i;       # code...
            }
            echo"<br>"; echo "hasil faktorial dari ".$angka_faktorial. " adalah ".$faktorial;
        }
    ?>
</body>

</html>
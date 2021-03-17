<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faktorial dengan do...while loop</title>
</head>

<body>
    <form action="" method="post">
        <label for="">masukkan angka = </label>

        <input type="text" name="angka_faktorial" id="angka_faktorial">

        <input type="submit" name="hasil" value="hasil">
    </form>
    <?php 
        $angka_faktorial=0;
        if (isset($_POST['hasil'])){
            $faktorial=1;
            $angka_faktorial=$_POST['angka_faktorial'];

            $i=1;
            do {
                $faktorial=$faktorial*$i;
                $i++;
            } while ($i <= $angka_faktorial);
                echo "<br>"; echo "hasil faktorial dari ".$angka_faktorial." adalah ".$faktorial;
        }
    ?>
</body>

</html>
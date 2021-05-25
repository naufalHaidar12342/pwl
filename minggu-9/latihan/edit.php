<?php
$id = $_GET['id_sekolah'];
require 'model.php';

$model = new Model();
$data = $model->edit($id);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>

<body>
    <a href="menu-utama.php">Kembali</a>
    <form action="proses.php?" method="post">
        <label for="">Nama</label>
        <br>
        <input type="text" name="nama-sekolah" id="" value="<?php echo $data->nama; ?>">


        <label for="">Alamat</label>
        <br>
        <input type="text" name="alamat-sekolah" id="" value="<?php echo $data->alamat; ?>">
        <br><br>

        <button type="submit" name="submit_edit">Submit</button>

    </form>
</body>

</html>
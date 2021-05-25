<?php
require 'daftar-sekolah.php';

$akses = new koneksi_database();
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
    <form action="proses.php?aksi=update" method="post">
        <?php
        foreach ($akses->edit($_GET['id']) as $d) {;
        ?>
            <table>
                <tr>
                    <td>Nama Sekolah</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama-sekolah" value="<?php echo $d['nama-sekolah']; ?>">
                    </td>

                </tr>

                <tr>
                    <td>Alamat Sekolah</td>
                    <td><input type="text" name="alamat-sekolah" id=""></td>
                </tr>

                <tr>
                    <td><input type="submit" value="kirim"></td>
                </tr>
            </table>
        <?php } ?>
    </form>
</body>

</html>
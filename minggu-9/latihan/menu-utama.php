<?php
//memanggil file daftar-sekolah
require 'daftar-sekolah.php';

//mengakses class koneksi-database
$aksesDaftar = new koneksi_database();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar sekolah di semarang</title>
    <link rel="stylesheet" href="css/styling.css">
</head>

<body>
    <form action="" method="post">
        <table>

            <tr>
                <th>Nomer</th>
                <th>Nama Sekolah</th>
                <th>Alamat Sekolah</th>
            </tr>

            <?php
            $no = 1;
            foreach ($aksesDaftar->tampilkanData() as $x) {


            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $x['nama']; ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=update">Update</a>
                        <a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>



    </form>
    <a href="tambah-data.php">Masukkan data baru</a>
</body>

</html>
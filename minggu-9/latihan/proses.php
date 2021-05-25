<?php
require 'model.php';

if (isset($_POST['kirim'])) {
    $nama = $_POST['nama-sekolah'];
    $alamat = $_POST['alamat-sekolah'];
    $model = new Model();
    $model->insert($nama, $alamat);
    header('Location:menu-utama.php');
}

//untuk memeriksa apakah tombol submit
//dari file 'edit.php' sudah ditekan
if (isset($_POST['submit_edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $model = new Model();
    $model->update($id, $nama, $alamat);
    header('Location:menu-utama.php');
}
if (isset($_GET['id_sekolah'])) {
    $id = $_GET['id_sekolah'];
    $model = new Model();
    $model->delete($id);
    header('Location:menu-utama.php');
}
// $aksesDariProses = new koneksi_database();

// $aksi = $_GET['aksi'];

// if ($aksi == "tambah") {
//     $aksesDariProses->masukkanData($_POST['nama'], $_POST['alamat']);
//     header("Location:menu-utama.php");
// } elseif ($aksi == "hapus") {
//     $aksesDariProses->hapusData($_GET['id']);
//     header("Location:menu-utama.php");
// } elseif ($aksi == "update") {
//     $aksesDariProses->updateData($_POST['id'], $_POST['nama'], $_POST['alamat']);
//     header("Location:menu-utama.php");
// }

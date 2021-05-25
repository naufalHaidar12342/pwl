<?php
require 'daftar-sekolah.php';

$aksesDariProses = new koneksi_database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    $aksesDariProses->masukkanData($_POST['nama'], $_POST['alamat']);
    header("Location:menu-utama.php");
} elseif ($aksi == "hapus") {
    $aksesDariProses->hapusData($_GET['id']);
    header("Location:menu-utama.php");
} elseif ($aksi == "update") {
    $aksesDariProses->updateData($_POST['id'], $_POST['nama'], $_POST['alamat']);
    header("Location:menu-utama.php");
}

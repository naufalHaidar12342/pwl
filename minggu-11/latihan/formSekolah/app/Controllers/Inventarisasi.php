<?php

namespace App\Controllers;

class Inventarisasi extends BaseController
{
    public function index()
    {
        $cek = new Pengecekan();
        //memanggil fungsi cekKirim.
        // fungsi ini memeriksa apakah
        //data dari add.php sudah di submit/kirimkan
        $cek->cekKiriman();

        //memanggil fungsi cekEdit().
        //fungsi ini memeriksa apakah
        //data dari edit.php sudah di submit_edit
        $cek->cekEdit();

        //memanggil fungsi cekHapus().
        $cek->cekHapus();

        return view('welcome_message');
    }

    public function mainPage()
    {
        return view('halaman_utama');
    }
}

include '../models/proses.php';

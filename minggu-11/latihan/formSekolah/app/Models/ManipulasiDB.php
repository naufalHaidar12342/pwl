<?php

namespace App\Models;

use CodeIgniter\Model;

class ManipulasiDB extends Model
{   //menyambungkan ke database
    protected $koneksiDB = db_connect('default');


    //menentukan nama grup database
    //dari App/Config/Database.php
    protected $DBGroup = 'default';

    //menentukan tabel dalam database 
    //yang akan digunakan
    protected $tableName = 'sekolah_terdekat';

    //nama primary key di dalam tabel
    //ingat! tabel dari database
    protected $primaryKey = 'id_sekolah';

    //menentukan datanya dikembalikan 
    //dalam bentuk apa (array, dsb)
    protected $returnsType = 'array';

    //menentukan field mana saja
    //yang boleh digunakan
    protected $allowedFields = ['nama', 'alamat'];

    //
    protected $useSoftDeletes = false;

    //
    protected $useTimestamps = false;

    //
    protected $createdField  = 'created_at';

    //
    protected $updatedField  = 'updated_at';

    //
    protected $deletedField  = 'deleted_at';

    //
    protected $validationRules = [];

    // 
    protected $validationMessages = [];

    //
    protected $skipValidation = true;


    //konstruktor
    public function __construct()
    {
    }
    public function insertRecord($nama, $alamat)
    {
        $sql = "INSERT INTO sekolah_terdekat (nama,alamat) VALUES ('$nama','$alamat')";

        $this->koneksiDB->query($sql);
    }

    public function showRecord()
    {
        $sql = "SELECT * FROM sekolah_terdekat";

        $storing = $this->koneksiDB->query($sql);

        while ($obj = $storing->getNextRow()) {
            $rows[] = $obj;
        }
        if (!empty($rows)) {
            return $rows;
        }
    }

    public function findRecord($id)
    {
        $sql = "SELECT * FROM sekolah_terdekat WHERE id_sekolah='$id'";

        $bind = $this->koneksiDB->query($sql);

        $rows = "";

        while ($obj = $bind->getNextRow()) {
            $rows = $obj;
        }
        return $rows;
    }


    public function updateRecord($id, $nama, $alamat)
    {
        $sql = "UPDATE sekolah_terdekat SET nama='$nama', alamat='$alamat' WHERE id_sekolah='$id'";
        $this->koneksiDB->query($sql);
    }

    public function deleteRecord($id)
    {
        $sql = "DELETE FROM sekolah_terdekat WHERE id_sekolah='$id'";
        $this->koneksiDB->query($sql);
    }
}

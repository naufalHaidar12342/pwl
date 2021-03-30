<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tampilkan Raport</title>
    
</head>

<body>
    <?php
        
        /*membungkus if-else dengan method/function*/
        function tampilkan_data(){
            /*if' yang digunakan
                untuk mengecek apakah tombol 'kirim'
                bernilai true(artinya, sudah di-klik
                atau belum)*/
            if (isset($_POST['kirim'])) {
                $nim=$_POST['nim_mhs'];
                $jurusan=$_POST['jurusan'];
                $nilaiTugas=$_POST['nilai_Tugas'];
                $nilaiUTS=$_POST['nilai_UTS'];
                $nilaiUAS=$_POST['nilai_UAS'];
    
                // bagian catatan khusus
                $kehadiran=$_POST['kehadiran'];
                $interaktif=$_POST['interaktif'];
                $tepat_waktu=$_POST['tepat_waktu'];
    
                //rumus umum untuk
                //mendapatkan nilai akhir
                $resepTugas=0.30*$nilaiTugas;
                $resepUTS=0.30*$nilaiUTS;
                $resepUAS=0.40*$nilaiUAS;
    
                $nilaiAkhir=($resepTugas+$resepUTS+$resepUAS);
    
                //membuat array asosiatif dari variabel
                //checkbox kehadiran, interaktif, dan tepat_waktu
                $kebutuhanLulus=array("kehadiran" =>"kehadiran minimal 70 persen","interaktif" =>"aktif interaksi di kelas", "tepat_waktu"=>"tugas dikumpulkan paling lambat hari-H");
                
                /*if-else
                 untuk cek apakah checkbox
                 kehadiran, interaktif, dan
                 tepat_waktu sudah terisi
                */
                if (isset($_POST['kehadiran'],$_POST['interaktif'],$_POST['tepat_waktu'])) {
                    /*mengecek apakah nilai akhir 
                    bernilai 'lebih dari 60'.
                    aturan lulus/tidak pada umumnya*/
                    if ($nilaiAkhir>=60) {
                        $status_mhs="LULUS";
                        echo "nim = $nim<br>";
                        echo "jurusan = $jurusan<br>";
                        echo $kebutuhanLulus['kehadiran']. " ". "terpenuhi,oke!";echo "<br>";
                        echo $kebutuhanLulus['interaktif']. " ". "terpenuhi,oke!";echo "<br>";
                        echo $kebutuhanLulus['tepat_waktu']. " ". "terpenuhi,oke!";echo "<br>";
                        echo "nilai akhir = $nilaiAkhir<br>";
                        echo "status = $status_mhs<br>";
                        echo "selamat!";
                        
                    }
                    else {
                        $status_mhs="TIDAK LULUS";
                        echo "nim = $nim<br>";
                        echo "jurusan = $jurusan<br>";
                        echo $kebutuhanLulus['kehadiran']. " ". "terpenuhi,oke!";echo "<br>";
                        echo $kebutuhanLulus['interaktif']. " ". "terpenuhi,oke!";echo "<br>";
                        echo $kebutuhanLulus['tepat_waktu']. " ". "terpenuhi,oke!";echo "<br>";
                        echo "nilai akhir = $nilaiAkhir<br>";
                        echo "status = $status_mhs<br>";
                        echo "tetap semangat dan jangan menyerah!";
                    }
                }
                /* bagian akhir if-else
                 untuk cek apakah checkbox
                 kehadiran, interaktif, dan
                 tepat_waktu sudah terisi*/
            }
            /*bagian akhir 'if' yang digunakan
            untuk mengecek apakah tombol 'kirim'
            bernilai true(artinya, sudah di-klik
            atau belum)*/
        }
        
        //memanggil fungsi 'tampilkan_data'
        tampilkan_data();
    ?>
</body>

</html>
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
        // echo" <link rel='stylesheet' type='text/css' href='style.css'> ";
        if (isset($_POST['kirim'])) {
            $nim=$_POST['nim_mhs'];
            $jurusan=$_POST['jurusan'];
            $nilaiTugas=$_POST['nilai_Tugas'];
            $nilaiUTS=$_POST['nilai_UTS'];
            $nilaiUAS=$_POST['nilai_UAS'];
            $kehadiran=$_POST['kehadiran'];
            $interaktif=$_POST['interaktif'];
            $tepat_waktu=$_POST['tepat_waktu'];


            $resepTugas=0.30*$nilaiTugas;
            $resepUTS=0.30*$nilaiUTS;
            $resepUAS=0.40*$nilaiUAS;

            $nilaiAkhir=($resepTugas+$resepUTS+$resepUAS);

            // $status_mhs="";

            if (isset($_POST['kehadiran'],$_POST['interaktif'],$_POST['tepat_waktu'])) {
                if ($nilaiAkhir>=60) {
                    $status_mhs="LULUS";
                    echo "nim = $nim<br>";
                    echo "jurusan = $jurusan<br>";
                    echo "nilai akhir = $nilaiAkhir<br>";
                    echo "status = $status_mhs<br>";
                    echo "selamat!";
                    
                }
                else {
                    $status_mhs="TIDAK LULUS";
                    echo "nim = $nim<br>";
                    echo "jurusan = $jurusan<br>";
                    echo "nilai akhir = $nilaiAkhir<br>";
                    echo "status = $status_mhs<br>";
                    echo "tetap semangat dan jangan menyerah!";
                }
            }
        }
    ?>
</body>

</html>
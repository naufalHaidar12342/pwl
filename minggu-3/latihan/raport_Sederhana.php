<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="proses_raportSederhana.php" method="post" name="rapot">
        <table>

            <!-- nim -->
            <tr>
                <td>Masukkan NIM :</td>
                <td>
                    <input type="text" name="nim_mhs" id="" placeholder="format :xxx.yyyy.zzzzz " required>
                </td>
            </tr>

            <!-- jurusan -->
            <tr>
                <td>Pilih jurusan :</td>
                <td>
                    <label for="jurusan"></label>
                    <select name="jurusan" id="jurusan" required>
                        <option value="">pilih jurusan...</option>
                        <option value="Teknik_Informatika">Teknik Informatika</option>
                        <option value="Sistem_Informasi">Sistem Informasi</option>
                        <option value="Broadcast_Radio">Broadcasting</option>
                    </select>
                </td>
            </tr>

            <!-- nilai tugas -->
            <tr>
                <td>Nilai Tugas :</td>
                <td><input type="number" name="nilai_Tugas" id="" min="0" max="100" placeholder="0-100" required>
                </td>
            </tr>

            <!-- nilai uts -->
            <tr>
                <td>Nilai UTS :</td>
                <td><input type="number" name="nilai_UTS" id="" min="0" max="100" placeholder="0-100" required>
                </td>
            </tr>

            <!-- nilai UAS -->
            <tr>
                <td>Nilai UAS</td>
                <td><input type="number" name="nilai_UAS" id="" min="0" max="100" placeholder="0-100" required>
                </td>
            </tr>

            <tr>
                <td>Catatan khusus: </td>
                <td>
                    <label for="kehadiran"></label>
                    <input type="checkbox" name="kehadiran" id="kehadiran"> Kehadiran >= 70 %
                    <br>

                    <label for="interaktif"></label>
                    <input type="checkbox" name="interaktif" id="interaktif"> interaktif di kelas
                    <br>

                    <label for="tepat_waktu"></label>
                    <input type="checkbox" name="tepat_waktu" id="tepat_waktu"> tugas tepat waktu
                    <br>

                </td>
            </tr>

            <tr>
                <td>

                </td>
                <td>
                    <input type="submit" value="kirim" name="kirim">
                </td>
            </tr>

        </table>
    </form>

</body>

</html>
<?php
    $sambutan="<h3>Halo, selamat datang!~</h3>";

    $nama_depan="M. Amirul";
    $nama_blkg="Mukminin";

    echo $sambutan; echo("<br>");
    echo("Menghitung luas dan keliling segitiga"); echo("<br>");

    $alas=10;
    $tinggi=12;
    $sisi=13;

    $hitungLuas=$alas*$tinggi*0.5;
    $hitungKel=$sisi*3;
    echo("d1/diketahui : "); echo("<br>");
    echo("alas = ".$alas ." cm"); echo("<br>");
    echo("tinggi = ".$tinggi." cm"); echo("<br>");
    echo("sisi = ".$sisi." cm"); echo("<br>");
    echo("<br>");
    echo("Luasnya adalah = ".$hitungLuas." cm^2"); echo("<br>");
    echo("Kelilingnya adalah = ".$hitungKel." cm."); echo("<br>");

?>
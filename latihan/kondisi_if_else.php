<?php
    $nilai=90;
    echo("diketahui nilai = ".$nilai); echo"<br>";
    echo("konversi ke huruf : "); echo"<br>";
    echo"<br>";

    if ($nilai>=85) {
        # kondisi 1
        echo"nilai = A";
    }
    elseif ($nilai>=70) {
        # kondisi 2
        echo"nilai = B";
    }
    elseif ($nilai>=50) {
        # kondisi 3
        echo"nilai = C";
    }
    elseif ($nilai>=1) {
        # kondisi 4
        echo"nilai = D";
    }
    else {
        # kondisi terakhir
        echo"nilai = E";
    }
?>
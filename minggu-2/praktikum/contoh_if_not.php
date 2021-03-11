<?php
    $user="";

    /*isset atau is set, adalah fungsi untuk 
    mengecek apakah variabel di dalam fungsi 
    tersebut sudah di set/ dideklarasikan/ di define.
    
    akan return TRUE jika variabel yang dimaksud
    sudah di deklarasikan sebelumnya DAN TIDAK BERISI NULL/NONE. 
    
    akan return FALSE jika sebaliknya.*/

    /*dalam contoh ini,jika TRUE
    diwakili oleh kondisi if yang mencetak 
    kalimat 'variabel belum terbentuk */
    if (!isset($user)) {
        echo "variabel belum terbentuk";
    }
    
    /*sebaliknya, kita lihat pada kondisi else.
    kondisi else mewakili yang FALSE (berarti $user 
    sudah di deklarasikan DAN tidak NULL). */
    else {
        echo "variabel sudah ada";
    }


?>
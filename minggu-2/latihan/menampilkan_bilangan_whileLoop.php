<?php

/*$patokan2 jika di deklarasikan
di luar while yang pertama [ while($patokan<=5){} ] 
, maka yang dihasilkan hanya 1-5 dari $patokan*/
    $patokan=1;
    // $patokan2=1;
    // $baris=5;
    while ($patokan <= 5) {
        // echo "";
        // $patokan2=0;
        // echo " ".$patokan;
        echo "<br>";
        $patokan2=1;
        while ($patokan2<=$patokan){
            echo $patokan;
            // echo "patokan2= $patokan2";
            // echo "$patokan2";
            # code...
            ++$patokan2;
            
            // echo $patokan2;
            // echo $patokan2;
            
         
        }
        ++$patokan;  
            
    }


?>
<?php

/* parameter M :
 A short textual representation of a month 
 (three letters) */

/*parameter lebih lengkap ada di sini:
https://www.w3schools.com/php/func_date_date.asp */
    $months=date("M");
    switch ($months) {
        case 'Jan':
            $months="Januari";
            # code...
            break;
        case 'Feb':
            $months="Februari";
            # code...
            break;
        case 'Mar':
            $months="Maret";
            # code...
            break;

        case 'April':
            $months="April";
            # code...
            break;

        case 'May':
            $months="Mei";
            # code...
            break;

        case 'June':
            $months="Juni";
            # code...
            break;

        case 'July':
            $months="Juli";
            # code...
            break;

        case 'Aug':
            $months="Agustus";
            # code...
            break;

        case 'Sep':
            $months="September";
            # code...
            break;

        case 'Oct':
            $months="Oktober";
            # code...
            break;

        case 'Nov':
            $months="November";
            # code...
            break;

        case 'Dec':
            $months="Desember";
            # code...
            break;
        
        default:
            $months="bulan baru";
            # code...
            break;
    }

    echo "sekarang bulan <b>$months</b>";
?>
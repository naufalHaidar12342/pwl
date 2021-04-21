<?php
    $engi ="mysql";
    $host = "localhost";
    $dbse="crud_pdo";
    $user = "root";
    $password = "";
    $koneksi=new PDO($engi.':dbname='.$dbse.";host=".$host,$user,$pass);
?>
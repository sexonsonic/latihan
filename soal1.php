<?php

    $hargaperkg = 15000; //15000/kg
    $dus = 5; // kg
    $hargadus = 2000; //perdus

    $hasiljambu =(6*$dus)*$hargaperkg;
    $hasildus = $hargadus*6;
    $total = $hasiljambu + $hasildus;

    echo "Total Harga Jambu : $hasiljambu <br>";
    echo "Total Harga Jual Dus : $hasildus <br>";
    echo "Total Hasil yang didapat : $total";

?>
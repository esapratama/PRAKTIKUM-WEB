<?php 
    $hargaAwal = 120000; 
    $diskonPersen = 20;

    if ($hargaAwal > 100000) {
    $diskon = ($diskonPersen / 100) * $hargaAwal; 
    $hargaSetelahDiskon = $hargaAwal - $diskon; 
    } else {
        $hargaSetelahDiskon = $hargaAwal; 
    }

    echo "Harga awal: Rp " . number_format($hargaAwal, 2, ',', '.') . "<br>";
    echo "Diskon: Rp " . number_format($diskon ?? 0, 2, ',', '.') . "<br>";
    echo "Harga yang harus dibayar setelah diskon: Rp " 
    . number_format($hargaSetelahDiskon, 2, ',', '.') . "<br>";
?>
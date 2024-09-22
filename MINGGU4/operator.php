<?php 
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil Penjumlahan: $hasilTambah <br>";
    echo "Hasil Pengurangan: $hasilKurang <br>";
    echo "Hasil Perkalian: $hasilKali <br>";
    echo "Hasil Pembagian: $hasilBagi <br>";
    echo "Sisa Bagi: $sisaBagi <br>";
    echo "Hasil Pangkat: $pangkat <br>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Apakah a sama dengan b? $hasilSama <br>";
    echo "Apakah a tidak sama dengan b? $hasilTidakSama <br>";
    echo "Apakah a lebih kecil dari b? $hasilLebihKecil <br>";
    echo "Apakah a lebih besar dari b? $hasilLebihBesar <br>";
    echo "Apakah a lebih kecil atau sama dengan b? $hasilLebihKecilSama <br>";
    echo "Apakah a lebih besar atau sama dengan b? $hasilLebihBesarSama <br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil A AND B: $hasilAnd <br>";
    echo "Hasil A OR B: $hasilOr <br>";
    echo "Hasil NOT A: $hasilNotA <br>";
    echo "Hasil NOT B: $hasilNotB <br>";

    $a += $b;
    echo "Hasil setelah A += B: $a <br>";

    $a -= $b;
    echo "Hasil setelah A -= B: $a <br>";

    $a *= $b;
    echo "Hasil setelah A *= B: $a <br>";

    $a /= $b;
    echo "Hasil setelah A /= B: $a <br>";

    $a %= $b;
    echo "Hasil setelah A %= B: $a <br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Apakah A identik dengan B? $hasilIdentik <br>";
    echo "Apakah A tidak identik dengan B? $hasilTidakIdentik <br>";
?>
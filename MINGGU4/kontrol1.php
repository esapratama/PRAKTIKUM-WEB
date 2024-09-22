<?php 
    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    sort($nilaiSiswa);

    $nilaiTerendah = array_slice($nilaiSiswa, 0, 2);
    $nilaiTertinggi = array_slice($nilaiSiswa, -2);

    $nilaiYangDigunakan = array_diff($nilaiSiswa, $nilaiTerendah, $nilaiTertinggi);
    $totalNilai = array_sum($nilaiYangDigunakan);
    $rataRata = $totalNilai / count($nilaiYangDigunakan);

    echo "Total nilai yang digunakan untuk rata-rata: $totalNilai <br>";
    echo "Rata-rata nilai setelah mengabaikan dua nilai tertinggi dan terendah: " 
    . number_format($rataRata, 2) . "<br>";
?>
<?php

$daftarNilai = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90],
];

$totalNilai = 0;
$jumlahSiswa = count($daftarNilai);

foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai[1];
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Daftar siswa dengan nilai di atas rata-rata ($rataRata): <br>";

foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $rataRata) {
        echo "Nama: $nilai[0], Nilai: $nilai[1] <br>";
    }
}
?>

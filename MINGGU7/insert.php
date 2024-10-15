<?php

$umur;

if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan." . "<br>";
}

$data = array("nama" => "Jane", "usia" => 25);

if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"] . "<br>";  // Menambahkan <br> agar tampilan di browser terpisah ke baris baru
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.<br>";
}

if (isset($data["usia"])) {
    echo "Usia: " . $data["usia"] . "<br>";
} else {
    echo "Variabel 'usia' tidak ditemukan dalam array.<br>";
}

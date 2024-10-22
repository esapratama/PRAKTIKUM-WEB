<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
</head>
<body>
    <h2>Keranjang Belanja</h2>

    <?php
    // Ambil nilai cookie jika ada
    $beliNovel = isset($_COOKIE['BeliNovel']) ? $_COOKIE['BeliNovel'] : 0;
    $beliBuku = isset($_COOKIE['BeliBuku']) ? $_COOKIE['BeliBuku'] : 0;

    // Tampilkan jumlah novel dan buku
    echo "Jumlah Novel: " . $beliNovel . "<br>";
    echo "Jumlah Buku: " . $beliBuku;
    ?>

</body>
</html>
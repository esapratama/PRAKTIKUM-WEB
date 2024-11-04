<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $berat = intval($_POST['berat']);
    $jenis = $_POST['jenis'];
    $kecepatan = $_POST['kecepatan'];
    $diskon = $_POST['diskon'];

    // Harga dasar berdasarkan jenis layanan
    $hargaPerKilo = 0;
    switch ($jenis) {
        case 'cuci_kering':
            $hargaPerKilo = 5000;
            break;
        case 'cuci_setrika':
            $hargaPerKilo = 8000;
            break;
        case 'setrika':
            $hargaPerKilo = 6000;
            break;
    }

    // Tambahan harga jika kecepatan Ekspress
    if ($kecepatan === 'ekspress') {
        $hargaPerKilo += 2000;
    }

    // Hitung total harga sebelum diskon
    $totalHarga = $berat * $hargaPerKilo;
    $diskonAmount = 0; // Inisialisasi diskon

    // Diskon untuk member
    if ($diskon === 'member') {
        $diskonAmount = $totalHarga * 0.1;
    }

    // Diskon untuk kupon (gratis 2 kg)
    if ($diskon === 'kupon' && $berat >= 2) {
        $diskonAmount = 2 * $hargaPerKilo;
    }

    // Hitung total setelah diskon
    $totalBayar = $totalHarga - $diskonAmount;

    
    echo "<p>Total transaksi adalah Rp " . number_format($totalHarga, 0, ',', '.') . "</p>";
    echo "<p>Total diskon adalah Rp " . number_format($diskonAmount, 0, ',', '.') . "</p>";
    echo "<p style='color: red;'>Yang harus dibayarkan adalah Rp " . number_format($totalBayar, 0, ',', '.') . "</p>";
}
?>

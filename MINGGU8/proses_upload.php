<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES["files"]["name"][0])) {
    $totalFiles = count($_FILES["files"]["name"]);
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES["files"]["name"][$i];
        $fileTmp = $_FILES["files"]["tmp_name"][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . $fileName;

        // Validasi tipe file (hanya gambar)
        if (in_array($fileExt, $allowedExtensions)) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($fileTmp, $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName bukan gambar yang valid.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
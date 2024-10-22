<!-- <?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/"; //Direktori tujuan untuk menyimpan file
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
        echo "file berhasil diunggah";
    } else {
        echo "file gagal diunggah";
    }
}
?> -->

<?php
if (isset($_POST["submit"])) {
    $target_dir = "uploads/"; // Direktori tujuan untuk menyimpan file
    $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Ekstensi file yang diizinkan
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    // Ukuran maksimum file (5MB)
    $max_size = 5 * 1024 * 1024;

    if (in_array($file_type, $allowed_extensions) && $_FILES["myfile"]["size"] <= $max_size) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
            echo "File berhasil diunggah.<br>";
            // Menampilkan thumbnail gambar setelah berhasil diunggah
            echo "<img src='" . $target_file . "' width='200' style='height: auto;' />";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
} ?>

<!-- <?php
if(isset($_POST["submit"])){
    $target_dir = "uploads/"; // Direktori tujuan untuk menyimpan file
    $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
    $file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Ekstensi file yang diizinkan
    $allowed_extensions = array("txt", "pdf", "doc", "dox");
    // Ukuran maksimum file (5MB)
    $max_size = 1 * 1024 * 1024;

    if(in_array($file_type, $allowed_extensions) && $_FILES["myfile"]["size"] <= $max_size){
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)){
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?> -->
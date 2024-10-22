<?php
if (isset($_FILES['file'])) {
    $errors = array();

    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
    $extensions = array("pdf", "doc", "docx", "txt");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }

    if ($file_size > 2097152) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
    }

    if (empty($errors) === true) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode(", ", $errors);
    }
}
?>

<!-- nomor 11 -->
<!-- $(document).ready(function () {
  // Ketika input file berubah (ada file yang dipilih)
  $("#file").change(function () {
    if (this.files.length > 0) {
      // Jika ada file yang dipilih, aktifkan tombol unggah
      $("#upload-button").prop("disabled", false).css("opacity", 1);
    } else {
      // Jika tidak ada file yang dipilih, nonaktifkan tombol unggah
      $("#upload-button").prop("disabled", true).css("opacity", 0.5);
    }
  });

  // Ketika formulir di-submit
  $("#upload-form").submit(function (e) {
    e.preventDefault(); // Mencegah pengiriman formulir secara default

    // Buat objek FormData untuk menyimpan data formulir
    var formData = new FormData(this);

    // Kirim data menggunakan AJAX
    $.ajax({
      type: "POST",
      url: "upload_ajax.php",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function (response) {
        // Tampilkan pesan sukses atau gagal di elemen dengan id "status"
        $("#status").html(response);
      },
      error: function () {
        $("#status").html("Terjadi kesalahan saat mengunggah file.");
      },
    });
  });
}); -->
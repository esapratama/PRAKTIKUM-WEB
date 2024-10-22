// prak 3 nomor 10\

<!DOCTYPE html>
<html>
<head>
    <title>Unggah File Dokumen</title>
</head>
<body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah File Dokumen</title>
</head>
<body>
    <div class="upload-form-container">
        <form id="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
            <h2>Unggah Dokumen</h2>
            <div class="file-input-container">
                <input type="file" name="file" id="file" class="file-input">
                <label for="file" class="file-label">Pilih File</label>
            </div>
            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
            <div id="status" class="upload-status"></div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>
</body>
</html> -->
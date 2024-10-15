<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi Password</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi Password</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="result"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah pengiriman form secara default

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Reset pesan error
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text("");

                // Validasi nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                // Validasi email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                }

                // Validasi password (minimal 8 karakter)
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                }

                // Jika valid, kirim data via AJAX
                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php", // Ganti dengan nama file PHP yang memproses data
                        type: "POST",
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            $("#result").html(response); // Tampilkan hasil dari PHP
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
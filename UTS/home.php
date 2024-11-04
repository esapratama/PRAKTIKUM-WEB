<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: halamanLogin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Seventeen</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js">
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5dc;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #28a745;
            color: beige;
            padding: 10px;
            text-align: center;
        }

        nav {
            text-align: right;
            background-color: #28a745;
            padding: 10px;
        }

        nav a {
            color: beige;
            margin: 0 15px;
            text-decoration: none;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: beige;
        }

        .login-container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background-color: beige;
            border-radius: 8px;
            box-shadow: 0 0 10px green;
        }

        h1 {
            color: #28a745;
            text-align: center;
        }

        .profile {
            text-align: left;
        }

        .slider {
            width: 100%;
            height: 300px;
            margin: 20px 0;
            position: relative;
        }

        .slides img {
            width: 50%;
            height: 100%;
            border-radius: 5px;
        }

        .slider img {
            width: 50%;
            height: 100%;
            border-radius: 5px;
        }

        .slider img:first-child {
            width: 50%;
            height: 100%;
            border-radius: 5px;
        }

        .footer {
            background-color: #28a745;
            color: f5f5dc;
            text-align: center;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
        <h1>Laundry Seventeen</h1>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="home.php">Home</a> <!-- Tautan ke halaman home -->
        <a href="cetakHarga.html">Cek Harga</a> <!-- Tautan ke halaman cek harga -->
        <a href="logout.php">Logout</a> <!-- Tautan ke logout -->
    </nav>


    <!-- Container -->
    <div class="container">
        <div class="slider">
            <div class="slides">
                <!-- <img src="img/banner1.jpg" alt="Banner1">
                <img src="img/banner2.jpg" alt="Banner2"> -->
                <img src="img/banner3.jpg" alt="Banner3">
            </div>
        </div>

        <h2>Seventeen Here</h2>
        <p>
            Laundry Seventeen adalah bisnis laundry yang didirikan oleh Esa, 
            yang mengutamakan pelayanan terbaik dalam mencuci, mengeringkan, dan merapikan pakaian pelanggan. 
            Laundry Seventeen berkomitmen untuk memberikan hasil cuci yang bersih, harum, dan terawat, 
            menggunakan teknologi terbaru dan bahan yang aman bagi semua jenis kain. 
            Dengan layanan yang cepat dan efisien, Laundry Seventeen menjadi pilihan yang tepat bagi mereka 
            yang membutuhkan solusi laundry yang praktis dan berkualitas tinggi.
        </p>
    </div>

    <!-- Footer Section -->
    <footer class="footer">
        Laundry Seventeen Here
    </footer>

    <!-- jQuery for Slider -->
    <script>
        $(document).ready(function () {
            var currentIndex = 0;
            var slides = $('.slider img');
            var slideCount = slides.length;

            function showNextSlide() {
                slides.eq(currentIndex).fadeOut(1000, function () {
                    currentIndex = (currentIndex + 1) % slideCount;
                    slides.eq(currentIndex).fadeIn(1000);
                });
            }

            setInterval(showNextSlide, 3000); // durasi slide 3 detik
        });
    </script>
</body>

</html>
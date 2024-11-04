<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Harga Laundry</title>
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

        h1 {
            color: #28a745;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 15px;
            background-color: #28a745;
            color: beige;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #28a745;
        }

        #result {
            margin-top: 20px;
            font-size: 16px;
        }
    </style>
    <script>
        function calculatePrice(event) {
            event.preventDefault(); // Mencegah form submit biasa
            const formData = new FormData(document.getElementById('priceForm'));

            fetch('prosesHarga.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('result').innerHTML = data; // Menampilkan hasil di bawah form
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</head>

<body>
    <header>
        <h1>Cek Harga</h1>
    </header>

    <nav>
        <a href="home.php">Home</a> 
        <a href="cetakHarga.html">Cek Harga</a> 
        <a href="logout.php">Logout</a> 
    </nav>

    <div class="container">
        <h2>Cek Harga</h2>
        <form id="priceForm" onsubmit="calculatePrice(event)">
            <div class="form-group">
                <label for="berat">Berat (kg):</label>
                <input type="number" id="berat" name="berat" min="1" value="1" required>
            </div>

            <div class="form-group">
                <label for="jenis">Jenis:</label>
                <select id="jenis" name="jenis">
                    <option value="cuci_kering">Cuci Kering - 5000/kg</option>
                    <option value="cuci_setrika">Cuci Setrika - 8000/kg</option>
                    <option value="setrika">Setrika - 6000/kg</option>
                </select>
            </div>

            <div class="form-group">
                <label for="kecepatan">Kecepatan:</label>
                <select id="kecepatan" name="kecepatan">
                    <option value="reguler">Reguler (Tanpa biaya tambahan)</option>
                    <option value="ekspress">Ekspress (+2000/kg)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="diskon">Diskon:</label>
                <select id="diskon" name="diskon">
                    <option value="non_member">Non Member</option>
                    <option value="member">Member (Diskon 10%)</option>
                    <option value="kupon">Kupon (Gratis 2kg setelah 5x laundry)</option>
                </select>
            </div>

            <button type="submit">CHECK</button>
        </form>

        <div id="result"></div> <!-- Hasil perhitungan akan ditampilkan di sini -->
    </div>
</body>
</html>

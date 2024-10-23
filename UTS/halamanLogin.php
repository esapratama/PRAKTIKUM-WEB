<!-- login.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <span id="usernameError"></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <span id="passwordError"></span><br><br>

        <button type="submit">Login</button>
    </form>

    <script src="validation.js"></script> <!-- Memasukkan file JavaScript validasi -->
</body>
</html>

document.getElementById('loginForm').addEventListener('submit', function (event) {
    let isValid = true;

    // Clear previous error messages
    document.getElementById('usernameError').textContent = '';
    document.getElementById('passwordError').textContent = '';

    // Get form values
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Username validation
    if (username === '') {
        document.getElementById('usernameError').textContent = 'Harus terisi';
        isValid = false;
    }

    // Password validation
    if (password === '') {
        document.getElementById('passwordError').textContent = 'Harus terisi';
        isValid = false;
    } else if (password.length > 6) {
        document.getElementById('passwordError').textContent = 'Password maksimal 6 karakter';
        isValid = false;
    } else if (!/[A-Z]/.test(password) || !/[a-z]/.test(password)) {
        document.getElementById('passwordError').textContent = 'Password harus terdiri dari huruf besar dan kecil';
        isValid = false;
    }

    if (!isValid) {
        event.preventDefault(); // Stop form submission if validation fails
    }
});

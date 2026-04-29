<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pramuka_Id</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logo">⚜️</div>
            <h2>Selamat Datang</h2>
            <p>Silakan masuk ke akun <strong>Pramuka_Id</strong> kamu</p>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="/login" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Masukkan username" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Masukkan password" required>
                </div>

                <button type="submit" class="btn-login">Masuk Sekarang 🚀</button>
            </form>

            <div class="login-footer">
                <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>
            </div>
        </div>
    </div>
</body>
</html>
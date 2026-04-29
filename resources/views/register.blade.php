<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Register</title>
</head>
    <body class="auth-body">
    <div class="auth-card">
        <h2>Daftar Akun ✨</h2>
        <h3>Halo, Selamat datang di aplikasi kami! cantik dan ganteng😘</h3>
        @if ($errors->any())
    <div style="color: red; margin-bottom: 15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="/register" method="POST" class="auth-form">
            @csrf
            <input type="text" name="username" placeholder="Username unik kamu" required>
            <input type="email" name="email" placeholder="Gmail aktif kamu" required>
            <input type="password" name="password" placeholder="Password yang kuat" required>
            
            <button type="submit" class="btn-auth">Buat Akun Sekarang 🚀</button>
        </form>
        
        <div class="auth-footer">
            Sudah punya akun? <a href="/login">Masuk di sini</a>
        </div>
    </div>
</body>

</html>
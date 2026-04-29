<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Akun | Pramuka_Id</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* CSS khusus untuk halaman verifikasi */
        .otp-input-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }
        .otp-digit {
            width: 45px;
            height: 55px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            background: #f9f9f9;
        }
        .otp-digit:focus {
            border-color: #f1c40f; /* Kuning saat fokus */
            outline: none;
            box-shadow: 0 0 5px rgba(241, 196, 15, 0.5);
        }
    </style>
</head>
<body class="auth-body">
    <div class="auth-card">
        <h2>Verifikasi Email 📧</h2>
        <p style="text-align: center; color: #7f8c8d; font-size: 14px;">
            Masukkan 6 digit kode unik yang baru saja kami kirim ke email kamu ya.
        </p>
    @if (session('error'))
    <div style="color: #e74c3c; background: #fadbd8; padding: 10px; border-radius: 8px; margin-bottom: 15px; text-align: center;">
        {{ session('error') }}
    </div>
    @endif
        <form action="/verify" method="POST" class="auth-form">
            @csrf
            <div class="otp-input-container">
                <input type="text" name="otp" class="otp-digit" maxlength="6" placeholder="000000" style="width: 100%; letter-spacing: 10px;" required>
            </div>
            
            <button type="submit" class="btn-auth">Verifikasi Sekarang ✅</button>
        </form>
        
        <div class="auth-footer">
            Belum terima kode? <a href="#">Kirim ulang kode</a>
        </div>
    </div>
</body>
</html>
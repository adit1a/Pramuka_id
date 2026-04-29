<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Pramuka_Id</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
    <nav class="navbar-custom">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">Pramuka_Id ⚜️</div>
            <ul class="nav-links">
                <li><a href="/">Kembali ke Beranda</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="form-container">
            <h2 class="text-center mb-4">Form Data Pramuka</h2>
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nta" class="form-label">Nomor Tanda Anggota (NTA)</label>
                    <input type="text" class="form-control" id="nta" placeholder="Masukkan NTA kamu" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" required>
                    <div id="emailHelp" class="form-text">Kami tidak akan membagikan email Anda kepada siapapun.</div>
                </div>
                <div class="mb-3">
         <label for="password" class="form-label">Password</label>
    <div class="input-group">
        <input type="password" class="form-control" id="password" name="password" required>
        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
            <i class="fa fa-eye" id="eyeIcon"></i>
        </button>
    </div>
     </div>           
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Saya menyetujui syarat dan ketentuan</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-primary-custom">Kirim Data 🚀</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/form.js') }}"></script>
</body>
</html>
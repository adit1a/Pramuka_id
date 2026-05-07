<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Pramuka_Id</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="container navbar-content">
            <div class="nav-left">
                <div class="logo">Pramuka_Id <span>⚜️</span></div>
                <button class="btn-sidebar-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarProfil">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <ul class="nav-menu mb-0">
                <li><a href="/">Home</a></li>
                <li><a href="/form">Form</a></li>
                <li><a href="#achievement">Achievement</a></li>
                <li><a href="#">Contact Us</a></li>
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Log out
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <header class="hero">
        <div class="hero-content">
            <h1>Halo, {{ Auth::user()->username }}! 👋</h1>
            <h2>Satu Pramuka, Untuk Satu Indonesia</h2>
            <p class="pp">Mari kita bangun karakter pramuka yang kuat dan bermoral</p>
            <a href="#main" class="btn-hero">Jelajahi Sekarang</a>
        </div>
    </header>

    <main id="main">
        <section class="headline">
            <h2>Kreatif, Inovatif, dan Berkarakter</h2>
            <div class="line"></div>
        </section>

        <section class="parallax">
            <div class="parallax-text">Membangun Bangsa</div>
        </section>

        <section class="banner-area">
            <div class="card-hover">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1504221507732-5246c045949b?q=80&w=500" alt="Kegiatan">
                </div>
                <h3>Kegiatan Baru</h3>
                <p>Cek Agenda Perkemahan Terbaru di Sini.</p>
            </div>

            <div class="card-hover">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=500" alt="Materi">
                </div>
                <h3>Materi Kepramukaan</h3>
                <p>Pelajari SKU, SKK, dan Sandi-sandi Digital</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Pramuka_Id - Sulawesi Tenggara. Dibuat dengan senang dan gembira tanpa paksaan ✨</p>
    </footer>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarProfil" aria-labelledby="sidebarProfilLabel">
        <div class="offcanvas-header text-white">
            <h5 class="offcanvas-title" id="sidebarProfilLabel">Profil Anggota ⚜️</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            @if($anggota)
                <div class="text-center mb-4">
                    <img src="{{ asset('uploads/foto/' . $anggota->foto_pramuka) }}" 
                         class="rounded-circle img-thumbnail shadow-sm"
                         style="width:150px; height:150px; object-fit:cover;"
                         alt="Foto profil">
                    <h4 class="mt-3 fw-bold">{{ $anggota->nama_lengkap }}</h4>
                    <span class="badge bg-secondary px-3">{{ $anggota->nta }}</span>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>TTL:</strong> {{ $anggota->tempat_lahir }}, {{ $anggota->tanggal_lahir }}</li>
                    <li class="list-group-item"><strong>Agama:</strong> {{ $anggota->agama }}</li>
                    <li class="list-group-item"><strong>Pangkalan:</strong> {{ $anggota->pangkalan }}</li>
                    <li class="list-group-item"><strong>Ambalan:</strong> {{ $anggota->ambalan }}</li>
                    <li class="list-group-item"><strong>Alamat:</strong> {{ $anggota->alamat }}</li>  
                </ul>

                <div class="d-grid mt-4">
                    <a href="{{ asset('uploads/sertifikat/' . $anggota->sertifikat_sfh) }}" class="btn btn-success" target="_blank">
                        <i class="fas fa-certificate me-2"></i>Lihat Sertifikat SFH
                    </a>
                </div>
                <div class="d-grid mt-4 gap-2">
    
            <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-warning fw-bold">
                <i class="fas fa-edit me-2"></i>Edit Profil
            </a>
</div>
            @else
                <div class="text-center p-5">
                    <p class="text-muted small">Data belum diinput.</p>
                    <a href="/form-anggota" class="btn btn-primary btn-sm rounded-pill">Isi Form 🚀</a>
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
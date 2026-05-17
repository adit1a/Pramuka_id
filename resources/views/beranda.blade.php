<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Pramuka_Id</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        .foto-ketua {
            max-height: 300px;
            object-fit: cover;
            width: 100%;
        }
        @media (min-width: 768px) {
            .foto-ketua { max-height: 450px; width: auto; }
        }
        /* Perbaikan Navbar Menu di Layar HP */
        @media (max-width: 576px) {
            .nav-menu { font-size: 12px; gap: 10px; padding-left: 0; }
            .logo { font-size: 1.2rem; }
        }
    </style>
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
                <li><a href="{{ url('/contactUs') }}">Contact Us</a></li>
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
        <div class="hero-content px-3">
            @auth
                <h1>Halo, {{ Auth::user()->username }}! 👋</h1>
            @else
                <h1>Halo, Selamat Datang! 👋</h1>
            @endauth
            
            <h2>Satu Pramuka, Untuk Satu Indonesia</h2>
            <p class="pp">Mari kita bangun karakter pramuka yang kuat dan bermoral</p>
            <a href="#main" class="btn-hero">Jelajahi Sekarang</a>
        </div>
    </header>

    <main id="main">
        <section class="headline px-3">
            <h2>Kreatif, Inovatif, dan Berkarakter</h2>
            <div class="line"></div>
        </section>

        <section class="py-4 py-md-5 bg-light">
            <div class="container px-3 px-md-4">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5 mb-4 mb-md-0 text-center" data-aos="fade-right">
                        <img src="{{ secure_asset('img/ketua.png') }}" alt="Ketua Kwarcab Kolaka Utara" class="img-fluid rounded-4 shadow foto-ketua">
                    </div>

                    <div class="col-lg-8 col-md-7" data-aos="fade-left">
                        <div class="ms-lg-4 text-center text-md-start">
                            <h5 class="text-warning fw-bold mb-1 fs-6 fs-md-5">Sambutan</h5>
                            <h3 class="fw-bold mb-3 mb-md-4 fs-4 fs-md-3">Ketua Kwarcab Kolaka Utara</h3>

                            <div class="card border-0 shadow-sm rounded-4 p-3 p-md-4 p-lg-5 text-start">
                                <p class="fw-bold text-dark mb-2">Assalamu’alaikum Wr. Wb.</p>
                                <p class="text-muted text-justify" style="font-size: 15px;">
                                    Selamat datang di website Raimuna Cabang III Kolaka Utara. Raimuna bukan sekadar perkemahan biasa, melainkan forum pertemuan akbar yang dirancang penuh dengan kegiatan kreatif, produktif, dan inovatif. 
                                </p>
                                <p class="text-muted text-justify" style="font-size: 15px;">
                                    Oleh karena itu, saya mengajak seluruh Pramuka Penegak dan Pramuka Pandega se-Kwartir Cabang Kolaka Utara untuk segera bergabung dan mendaftarkan diri. Raimuna adalah kesempatan emas bagi Kakak untuk memperluas jaringan persaudaraan antarsesama anggota Pramuka, meningkatkan keterampilan melalui berbagai zona edukasi praktis, serta menunjukkan potensi dan kreativitas terbaik generasi muda. 
                                </p>
                                <p class="text-muted text-justify" style="font-size: 15px;">
                                    Kepada para Pembina, saya minta dukungan sepenuhnya untuk memfasilitasi keberangkatan kakak-kakak kita. Ayo persiapkan diri, fisik, dan mental kalian. Sampai jumpa di Raimuna Cabang III Kolaka Utara! Terima kasih.
                                </p>

                                <div class="mt-3 border-start border-4 border-warning ps-3">
                                    <h6 class="fw-bold text-dark mb-1">Salam Pramuka!</h6>
                                    <p class="fw-bold text-dark mb-0" style="font-size: 14px;">Wassalamu’alaikum Wr. Wb.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="parallax">
            <div class="parallax-text text-center px-3">Membangun Bangsa</div>
        </section>

        <section class="banner-area px-3">
            <div class="card-hover">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1504221507732-5246c045949b?q=80&w=500" alt="Kegiatan">
                </div>
                <h3 class="mt-3">Kegiatan Baru</h3>
                <p class="text-muted">Cek Agenda Perkemahan Terbaru di Sini.</p>
            </div>

            <div class="card-hover">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=500" alt="Materi">
                </div>
                <h3 class="mt-3">Materi Kepramukaan</h3>
                <p class="text-muted">Pelajari SKU, SKK, dan Sandi-sandi Digital</p>
            </div>
        </section>

        <section class="ontopfoot py-5 bg-white">
            <div class="container card-ontop shadow-sm p-4 p-md-5">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-12 text-center text-lg-start mb-4 mb-lg-0">
                        <div class="d-flex flex-column flex-lg-row align-items-center mb-4">
                            <img src="{{ asset('img/gambar.jpeg.jpeg') }}" alt="Logo" style="width: 80px;" class="me-lg-3 mb-3 mb-lg-0">
                            <h4 class="fw-bold mb-0">Raimuna Cabang III Kolaka Utara</h4>
                        </div>
                        <h5 class="text-danger fw-bold">Sejarah Singkat</h5>
                        <h6 class="text-primary fw-bold small">Awal Mula</h6>
                        <p class="text-justify text-muted small">Jambore adalah pertemuan besar Pramuka di alam terbuka yang diisi dengan kegiatan edukatif, rekreatif, dan produktif. Tradisi jambore berakar dari gerakan kepanduan dunia yang dipelopori oleh Lord Robert Baden-Powell melalui World Scout Jamboree pertama tahun 1920 di Olympia, London. Pertemuan itu melibatkan puluhan ribu pandu dari berbagai negara dan menjadi tonggak lahirnya jambore sebagai ajang silaturahmi dan pembelajaran kepanduan.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="d-flex flex-column align-items-center mb-3">
                            <div class="circle-icon bg-orange shadow-sm">
                                <i class="fas fa-binoculars fa-2x text-white"></i>
                            </div>
                            <span class="badge bg-orange text-white px-4 py-2 mt-3">VISI</span>
                        </div>
                        <p class="fst-italic fw-bold small text-center px-lg-3">"TERWUJUDNYA PRAMUKA PENGGALANG SULAWESI TENGGARA YANG GEMBIRA, BERDAYA, DAN BERBUDAYA MELALUI PERTEMUAN BESAR JAMBORE DAERAH SEBAGAI WADAH PERSAUDARAAN, PENGEMBANGAN DIRI, SERTA PENGUATAN KARAKTER BANGSA."</p>
                    </div>

                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="d-flex flex-column align-items-center mb-3">
                            <div class="circle-icon bg-blue shadow-sm">
                                <i class="fas fa-rocket fa-2x text-white"></i>
                            </div>
                            <span class="badge bg-blue text-white px-4 py-2 mt-3">MISI</span>
                        </div>
                        <ol class="text-start small text-muted ps-3 ms-4 ms-lg-0" style="display: inline-block; text-align: left;">
                            <li>Menumbuhkan keceriaan dan semangat kebersamaan.</li>
                            <li>Meningkatkan kemandirian dan keterampilan.</li>
                            <li>Melestarikan dan mengembangkan budaya lokal.</li>
                            <li>Memperkuat persaudaraan antar kwartir cabang.</li>
                            <li>Mendorong kepedulian terhadap lingkungan.</li>
                        </ol>
                    </div>
                </div>
            </div> 
        </section>

        <section class="formulir-online py-5" style="background-color:#eee">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 mb-4 mb-lg-0 text-center text-lg-start">
                        <h1 class="fw-bold display-5 mb-3">Formulir <br class="d-none d-lg-block"> Online</h1>
                        <p class="text-muted mb-4">Pilih formulir sesuai kategori Anda dan lengkapi data dengan mudah melalui Google Forms</p>
                        <img src="{{ asset('img/gambar.jpeg.jpeg') }}" alt="Logo Jamda" style="width: 100px;">
                    </div>
                    <div class="col-lg-8">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-6 col-sm-12">
                                <div class="card-form shadow-sm text-white p-4" style="background-color: #8e44ad;">
                                    <div class="text-center">
                                        <i class="fas fa-plus-circle float-end opacity-50 fs-4"></i>
                                        <h3 class="fw-bold mt-3">Form Peserta</h3>
                                        <p class="small mb-4">Formulir Pendaftaran Peserta</p>
                                        <a href="https://forms.gle/JJYC4oHDv16N2iVY7" target="_blank" class="btn btn-light btn-isi rounded-pill px-4 fw-bold w-100">Tolong Isi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card-form shadow-sm text-white p-4" style="background-color: #008891;">
                                    <div class="text-center">
                                        <i class="fas fa-plus-circle float-end opacity-50 fs-4"></i>
                                        <h3 class="fw-bold mt-3">Form Pembina</h3>
                                        <p class="small mb-4">Formulir Pendaftaran Pembina</p>
                                        <a href="https://forms.gle/CXhzRsbiAcAeJiy96" target="_blank" class="btn btn-light btn-isi rounded-pill px-4 fw-bold w-100">ISI FORMULIR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://unpkg.com/html5-qrcode"></script>

    </main>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarProfil" aria-labelledby="sidebarProfilLabel">
        <div class="offcanvas-header bg-dark text-white">
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

                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><strong>TTL:</strong> {{ $anggota->tempat_lahir }}, {{ $anggota->tanggal_lahir }}</li>
                    <li class="list-group-item"><strong>Agama:</strong> {{ $anggota->agama }}</li>
                    <li class="list-group-item"><strong>Pangkalan:</strong> {{ $anggota->pangkalan }}</li>
                    <li class="list-group-item"><strong>Ambalan:</strong> {{ $anggota->ambalan }}</li>
                    <li class="list-group-item"><strong>Alamat:</strong> {{ $anggota->alamat }}</li>  
                </ul>

                <div class="d-grid mt-4">
                    <a href="{{ asset('uploads/sertifikat/' . $anggota->sertifikat_sfh) }}" class="btn btn-success rounded-pill fw-bold" target="_blank">
                        <i class="fas fa-certificate me-2"></i>Lihat Sertifikat
                    </a>
                </div>
                <div class="d-grid mt-3">
                    <a href="/edit-anggota/{{ $anggota->id }}" class="btn btn-warning rounded-pill fw-bold text-dark">
                        <i class="fas fa-edit me-2"></i>Edit Profil
                    </a>
                </div>
            @else
                <div class="text-center p-5">
                    <p class="text-muted small mb-3">Data profil belum dilengkapi.</p>
                    <a href="/form-anggota" class="btn btn-primary rounded-pill fw-bold w-100">Isi Form 🚀</a>
                </div>
            @endif
        </div>
    </div>

    <footer>
        <p class="mb-0 small">&copy; 2026 Pramuka_Id - Sulawesi Tenggara. Dibuat dengan senang dan gembira tanpa paksaan ✨</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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
                <li><a href="/achievement">Achievement</a></li>
                <li><a href="{{ url('/contactUs') }}" class="nav-link">Contact Us</a></li>
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
    
            <a href="/edit-anggota/{{ $anggota->id }}" class="btn btn-warning fw-bold">
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
    <section class="ontopfoot py-5">
    <div class="container card-ontop shadow-sm p-4 p-md-5">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-12">
                <div class="d-flex align-items-center mb-4">
                    <img src="{{ asset('img/gambar.jpeg.jpeg') }}" alt="Logo" style="width: 80px;" class="me-3">
                    <h2 class="fw-bold mb-0">Raimuna Cabang III Kolaka Utara</h2>
                </div>
                <h5 class="text-danger fw-bold">Sejarah Singkat</h5>
                <h6 class="text-primary fw-bold small">Awal Mula</h6>
                <p class="text-justify text-muted small">Jambore adalah pertemuan besar Pramuka di alam terbuka yang diisi dengan kegiatan edukatif, rekreatif, dan produktif. Tradisi jambore berakar dari gerakan kepanduan dunia yang dipelopori oleh Lord Robert Baden-Powell melalui World Scout Jamboree pertama tahun 1920 di Olympia, London. Pertemuan itu melibatkan puluhan ribu pandu dari berbagai negara dan menjadi tonggak lahirnya jambore sebagai ajang silaturahmi dan pembelajaran kepanduan.</p>
            </div>

            
            <div class="col-lg-4 col-md-12 text-center">
                <div class="d-flex flex-column align-items-center mb-3">
                    <div class="circle-icon bg-orange">
                        <i class="fas fa-binoculars fa-2x text-white"></i>
                        <span class="d-block text-white fw-bold small mt-1">VISI</span>
                    </div>
                    <span class="badge bg-orange mt-3 px-4 py-2">VISI</span>
                </div>
                <p class="fst-italic fw-bold small text-center px-lg-3">"TERWUJUDNYA PRAMUKA PENGGALANG SULAWESI TENGGARA YANG GEMBIRA, BERDAYA, DAN BERBUDAYA MELALUI PERTEMUAN BESAR JAMBORE DAERAH SEBAGAI WADAH PERSAUDARAAN, PENGEMBANGAN DIRI, SERTA PENGUATAN KARAKTER BANGSA."</p>
            </div>

            
            <div class="col-lg-4 col-md-12 text-center">
                <div class="d-flex flex-column align-items-center mb-3">
                    <div class="circle-icon bg-blue">
                        <i class="fas fa-rocket fa-2x text-white"></i>
                        <span class="d-block text-white fw-bold small mt-1">MISI</span>
                    </div>
                    <span class="badge bg-blue mt-3 px-4 py-2">MISI</span>
                </div>
                <ol class="text-start small text-muted ps-3">
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
<section class="formulir-online py-5 " style="background-color:#eee">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 mb-5 mb-lg-0 text-center text-lg-start">
                <h1 class="fw-bold display-4 mb-3">Formulir <br> Online</h1>
                <p class="text-muted mb-4 mb-3">Pilih formulir sesuai kategori Anda dan lengkapi data dengan mudah melalui Google Forms</p>
                <img src="{{ asset('img/gambar.jpeg.jpeg') }}" alt="Logo Jamda" style="width: 120px;">
            </div>
            <div class="col-lg-8">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-4 col-sm-6">
            <div class="card-form shadow-sm text-white" style="background-color: #8e44ad;">
                <div class="card-body p-4 text-center">
           
                     <i class="fas fa-plus-circle float-end opacity-50"></i>
                    <h3 class="fw-bold mt-3">Form</h3>
                    <p class="small mb-4">Formulir Peserta</p>
                     <a href="https://forms.gle/JJYC4oHDv16N2iVY7" 
                     target="_blank" 
                    class="btn btn-light btn-isi rounded-pill px-4 fw-bold">
                    Tolong Isi
                    </a>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card-form shadow-sm text-white" style="background-color: #008891;">
                            <div class="card-body p-4 text-center">
                                <i class="fas fa-plus-circle float-end opacity-50"></i>
                                <h3 class="fw-bold mt-3">Form </h3>
                                <p class="small mb-4">Formulir Pembina</p>
                                <a href="https://forms.gle/CXhzRsbiAcAeJiy96" target="_blank" class="btn btn-light btn-isi rounded-pill px-4 fw-bold">ISI FORMULIR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 1. Panggil Library di Atas -->
<script src="https://unpkg.com/html5-qrcode"></script>

<section class="scan-achievement py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow border-0 text-center p-4" style="border-radius: 25px;">
                    <div class="card-body">
                        <div class="icon-scan mb-3">
                            <i class="fas fa-qrcode fa-4x text-primary"></i>
                        </div>
                        <h3 class="fw-bold">Scan Achievement</h3>
                        <p class="text-muted">Dekatkan kamera ke QR Code kegiatan untuk mencatat kehadiran atau pencapaianmu.</p>
                        
                        <button class="btn btn-primary btn-lg rounded-pill px-5 fw-bold" onclick="startScanner()">
                            <i class="fas fa-camera me-2"></i> Buka Kamera
                        </button>
                        <div class="mb-3">
                            <span class="badge bg-light text-muted">ATAU</span>
                        </div>
                        <div class="mx-auto" style="max-width: 300px;">
                        <label for="qr-input-file" class="form-label small fw-bold text-muted">Upload Gambar QR dari Galeri</label>
                        <input type="file" id="qr-input-file" accept="image/*" class="form-control form-control-sm rounded-pill">
                        </div>
                        <div id="reader" class="mt-4 shadow-sm" style="display:none; border-radius: 15px; overflow: hidden;"></div>
                        <div id="reader" class="mt-4 shadow-sm" style="display:none; border-radius: 15px; overflow: hidden;"></div>
                        
                        <button id="stop-scan" class="btn btn-danger mt-3 rounded-pill" style="display:none;" onclick="stopScanner()">
                            Tutup Kamera
                        </button>

                        <!-- FORM TERSEMBUNYI UNTUK KIRIM KE DATABASE -->
                        <form id="qr-form-beranda" action="{{ route('process.scan') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="event_name" id="beranda_event_name">
                            <input type="hidden" name="category" id="beranda_category">
                            <input type="hidden" name="achievement" id="beranda_achievement">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<footer>
    <p>&copy; 2026 Pramuka_Id - Sulawesi Tenggara. Dibuat dengan senang dan gembira tanpa paksaan ✨</p>
</footer>

<!-- 2. Panggil Library Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- 3. Buat Tag Script BARU untuk Logika Scanner -->
<script>
    let html5QrCode;
    const qrForm = document.getElementById('qr-form-beranda');

    // Inisialisasi library saat halaman dimuat
    window.onload = () => {
        html5QrCode = new Html5Qrcode("reader");
    };

    // FUNGSI 1: SCAN VIA KAMERA
    function startScanner() {
        document.getElementById('reader').style.display = 'block';
        document.getElementById('stop-scan').style.display = 'inline-block';

        const qrCodeSuccessCallback = (decodedText) => {
            handleScanResult(decodedText);
            stopScanner();
        };

        const config = { fps: 10, qrbox: { width: 250, height: 250 } };
        html5QrCode.start({ facingMode: "environment" }, config, qrCodeSuccessCallback)
        .catch(err => alert("Gagal membuka kamera: " + err));
    }

    // FUNGSI 2: SCAN VIA UPLOAD FILE
    const fileInput = document.getElementById('qr-input-file');
    fileInput.addEventListener('change', e => {
        if (e.target.files.length == 0) return;

        const imageFile = e.target.files[0];
        // Scan file gambar
        html5QrCode.scanFile(imageFile, true)
            .then(decodedText => {
                handleScanResult(decodedText);
            })
            .catch(err => {
                alert("QR Code tidak ditemukan pada gambar. Pastikan gambar jelas.");
                console.error(err);
            });
    });

    // FUNGSI 3: PROSES DATA (Dipakai oleh Kamera & File)
    function handleScanResult(decodedText) {
        // Format: Nama Kegiatan|Kategori|Achievement
        const data = decodedText.split('|');

        if(data.length === 3) {
            document.getElementById('beranda_event_name').value = data[0];
            document.getElementById('beranda_category').value = data[1];
            document.getElementById('beranda_achievement').value = data[2];

            alert("Berhasil membaca data: " + data[0]);
            qrForm.submit();
        } else {
            alert("Format QR tidak valid! Gunakan pemisah '|' (Contoh: Lomba|Teknis|Juara)");
        }
    }

    function stopScanner() {
        if (html5QrCode && html5QrCode.isScanning) {
            html5QrCode.stop().then(() => {
                document.getElementById('reader').style.display = 'none';
                document.getElementById('stop-scan').style.display = 'none';
            });
        }
    }
</script>
</body>
</html>
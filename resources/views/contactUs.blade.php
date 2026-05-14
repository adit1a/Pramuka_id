<!-- AOS Library & FontAwesome untuk Ikon -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

<!-- Header Navigasi -->
<nav class="nav-header">
    <div class="container-fluid d-flex justify-content-between align-items-center px-4">
        <div class="header-spacer d-none d-lg-block"></div>
        <h5 class="mb-0 fw-bold text-white project-title">
            Pramuka_Id ⚜️
        </h5>
        <div class="back-wrapper">
            <a href="{{ url('/') }}" class="text-decoration-none back-link-header">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</nav>

<!-- Container Utama agar konten ke tengah -->
<main class="contact-wrapper py-5">
    <div class="container">
        <!-- Judul & Logo -->
        <div class="d-flex align-items-center justify-content-center justify-content-lg-start mb-4 ms-lg-5 ps-lg-4" data-aos="fade-right">
            <img src="{{ asset('img/gambar.jpeg.jpeg') }}" alt="Logo Jambore" style="width: 80px;" class="me-3">
            <div>
                <h2 class="fw-bold mb-0" style="line-height: 1.2; letter-spacing: 2px;">Kontak <br> Kami</h2>
            </div>
        </div>
        
        <p class="text-center text-lg-start mb-5 ms-lg-5 ps-lg-5" style="font-size: 20px;">
            Punya pertanyaan? Pengurus siap membantu kamu!
        </p>

        <!-- Baris Kartu Sejajar -->
        <div class="row g-4 justify-content-center">
            
            <!-- Kartu 1: Kak Zahra -->
            <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="200">
                <div class="card-panitia shadow-sm">
                    <div class="p-4">
                        <div class="profile-wrapper mb-3">
                            <img src="{{ asset('img/zahra.jpeg.jpeg') }}" alt="Admin Zahra">
                        </div>
                        <div class="text-start mb-2">
                            <h5 class="fw-bold mb-1" style="font-size: 25px;">Kak Zahra</h5>
                            <h5 class="fw-normal text-muted">Pengurus</h5>
                        </div>
                    </div>
                    <a href="https://wa.me/6282349632368" target="_blank" class="btn-wa-purple py-3">
                        <i class="fab fa-whatsapp fa-lg me-2"></i>
                        <span class="fw-bold">0823-4963-2368</span>
                    </a>
                </div>
            </div>

            <!-- Kartu 2: Kak Farel -->
            <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="500">
                <div class="card-panitia shadow-sm">
                    <div class="p-4">
                        <div class="profile-wrapper mb-3">
                            <img src="{{ asset('img/farel.jpeg.jpeg') }}" alt="Kak Farel">
                        </div>
                        <div class="text-start mb-2">
                            <h5 class="fw-bold mb-1" style="font-size: 25px;">Kak Farel</h5>
                            <h5 class="fw-normal text-muted">Pengurus</h5>
                        </div>
                    </div>
                    <a href="https://wa.me/6282231471133" target="_blank" class="btn-wa-purple py-3">
                        <i class="fab fa-whatsapp fa-lg me-2"></i>
                        <span class="fw-bold">082231471133</span>
                    </a>
                </div>
            </div>

        </div> 
    </div>
</main>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ once: true });
</script>
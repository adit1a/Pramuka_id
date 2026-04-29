<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Beranda - Pramuka_Id</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">Pramuka_Id ⚜️</div>
            <ul class="nav-menu">
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
</body>
</html>
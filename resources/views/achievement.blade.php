<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievement - Pramuka_Id</title>
    <link rel="stylesheet" href="{{ asset('css/achive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>

    <nav class="nav-header">
        <div class="container-fluid d-flex justify-content-between align-items-center px-4">
            <div class="header-spacer d-none d-lg-block"></div>
            <h5 class="mb-0 fw-bold text-white project-title">
                Pramuka_Id ⚜️
            </h5>
            <div class="back-wrapper">
                <a href="{{ url('/beranda') }}" class="text-decoration-none back-link-header">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </nav>

    <main class="py-5">
        <div class="container">
            <div class="row align-items-center mb-5" data-aos="fade-up">
                <div class="col-lg-12">
                    <h2 class="fw-bold border-start border-4 border-primary ps-3">Achievement & Kegiatan</h2>
                    <p class="text-muted">Daftar riwayat partisipasi dan pencapaian dalam organisasi.</p>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th class="py-3 ps-4">Nama Kegiatan</th>
                                <th class="py-3">Kategori</th>
                                <th class="py-3">Achievement</th>
                                <th class="py-3">Waktu</th>
                                <th class="py-3 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($activities as $activity)
                            <tr>
                                <td class="ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-box bg-light-blue me-3">
                                            <i class="fas fa-medal text-primary"></i>
                                        </div>
                                        <span class="fw-bold">{{ $activity->event_name }}</span>
                                    </div>
                                </td>
                                <td>{{ $activity->category }}</td>
                                <td>
                                    <span class="badge bg-warning text-dark">
                                        <i class="fas fa-star me-1"></i> {{ $activity->achievement }}
                                    </span>
                                </td>
                                <td>{{ \Carbon\Carbon::parse($activity->scanned_at)->format('d M Y, H:i') }}</td>
                                <td class="text-center">
                                    <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">
                                        <i class="fas fa-check-circle me-1"></i> {{ $activity->status }}
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-5 text-muted">
                                    Belum ada riwayat kegiatan.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

<footer>
    <p>&copy; 2026 Pramuka_Id - Sulawesi Tenggara. Dibuat dengan senang dan gembira tanpa paksaan ✨</p>
</footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true });
    </script>
</body>
</html>
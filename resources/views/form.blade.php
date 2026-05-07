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

    <div class="container my-5">
        <div class="form-container">
            <h2 class="text-center mb-4">Lengkapi Profil Anggota</h2>
    @if(session('succes'))
        <div class="alert alert-success">
            {{ session ('success') }}
        </div>
    @endif 
    @if ($errors -> any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ error }}</li>
                @endforeach
            </ul>
        </div> 
    @endif       
            <form action="{{ isset($anggota) ? route('anggota.update', $anggota->id) : '/simpan-anggota' }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($anggota))
                  @method('PUT')
                @endif
                
                <div class="mb-3">
                    <label for="nta" class="form-label">Nomor Tanda Anggota (NTA)</label>
                    <input type="text" class="form-control" id="nta" name="nta" placeholder="Contoh: 12345678"
                    value="{{ isset($anggota) ? $anggota->nta : '' }}" required>
                </div>

                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap"
                    value="{{ isset($anggota) ? $anggota->nama_lengkap : '' }}" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <select class="form-select" name="agama" id="agama" required>
                        <option value="" selected disabled>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="pangkalan" class="form-label">Pangkalan</label>
                        <input type="text" class="form-control" id="pangkalan" name="pangkalan" placeholder="Gugus Depan..." required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ambalan" class="form-label">Ambalan</label>
                        <input type="text" class="form-control" id="ambalan" name="ambalan" placeholder="Nama Ambalan..." required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="sertifikat_sfh" class="form-label">Sertifikat SFH (PDF/Gambar)</label>
                    <input class="form-control" type="file" id="sertifikat_sfh" name="sertifikat_sfh">
                </div>

                <div class="mb-3">
                    <label for="foto_pramuka" class="form-label">Foto Pramuka (Seragam Lengkap)</label>
                    <input class="form-control" type="file" id="foto_pramuka" name="foto_pramuka">
                </div>

                <hr class="my-4">

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Saya menyatakan data di atas adalah benar</label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                      {{ isset($anggota) ? 'Ubah Data ✍️' : 'Kirim Data 🚀' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/form.js') }}"></script>
</body>
</html>
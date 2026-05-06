<!DOCTYPE html>
<html>
<head>
    <title>Form Aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #4facfe, #00f2fe); min-height:100vh;">

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Pendaftaran</a>
    <a class="navbar-brand" href="/aspirasi">Aspirasi</a>
  </div>
</nav>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="card shadow-lg p-4" style="max-width: 600px; width:100%; border-radius:15px;">
        
        <h2 class="text-center mb-3">💬 Form Aspirasi</h2>
        <p class="text-center text-muted mb-4">Sampaikan aspirasi kamu di sini</p>

        <form method="POST" action="/aspirasi/simpan">
            @csrf

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Angkatan</label>
                <input type="text" name="angkatan" class="form-control" placeholder="Contoh: 2023" required>
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <select name="kategori" class="form-select" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option>Fasilitas</option>
                    <option>Akademik</option>
                    <option>Kegiatan</option>
                    <option>Lainnya</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Aspirasi</label>
                <textarea name="aspirasi" class="form-control" rows="4" required></textarea>
            </div>

            <button class="btn btn-primary w-100 mb-3">📨 Kirim Aspirasi</button>

        </form>

        <a href="/" class="btn btn-secondary w-100">
            ← Kembali ke Pendaftaran
        </a>

    </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
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
        
        <h2 class="text-center mb-3">📝 Form Pendaftaran</h2>
        <p class="text-center text-muted mb-4">Isi data dengan lengkap</p>

        <form method="POST" action="/simpan">
            @csrf

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Prodi</label>
                <input type="text" name="prodi" class="form-control" placeholder="Contoh: Informatika" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Alasan Bergabung</label>
                <textarea name="alasan" class="form-control" rows="3" required></textarea>
            </div>

            <button class="btn btn-primary w-100 mb-3"> Daftar</button>

        </form>

        <a href="/aspirasi" class="btn btn-warning w-100">
            💬 Ke Form Aspirasi
        </a>

    </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Aspirasi</title>
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

    <div class="card shadow-lg p-4 text-center" style="max-width: 600px; width:100%; border-radius:15px;">
        
        <h2 class="text-success mb-3">✅ Aspirasi Terkirim</h2>
        <p class="text-muted mb-4">Terima kasih atas masukan kamu</p>

        <ul class="list-group text-start mb-4">
            <li class="list-group-item"><b>Nama:</b> {{ $nama }}</li>
            <li class="list-group-item"><b>Angkatan:</b> {{ $angkatan }}</li>
            <li class="list-group-item"><b>Kategori:</b> {{ $kategori }}</li>
            <li class="list-group-item"><b>Aspirasi:</b> {{ $aspirasi }}</li>
        </ul>

        <a href="/aspirasi" class="btn btn-primary w-100">
            ← Kembali ke Form Aspirasi
        </a>

    </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #43e97b, #38f9d7); min-height:100vh;">

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Pendaftaran</a>
    <a class="navbar-brand" href="/aspirasi">Aspirasi</a>
  </div>
</nav>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="card shadow-lg p-4 text-center" style="max-width: 600px; width:100%; border-radius:15px;">
        
        <h2 class="text-success mb-3"> Berhasil!</h2>
        <p class="text-muted mb-4">Pendaftaran kamu sudah diterima</p>

        <ul class="list-group text-start mb-4">
            <li class="list-group-item"><b>Nama:</b> {{ $nama }}</li>
            <li class="list-group-item"><b>NIM:</b> {{ $nim }}</li>
            <li class="list-group-item"><b>Prodi:</b> {{ $prodi }}</li>
            <li class="list-group-item"><b>Email:</b> {{ $email }}</li>
            <li class="list-group-item"><b>Alasan:</b> {{ $alasan }}</li>
        </ul>

        <a href="/" class="btn btn-primary w-100">
            ← Kembali ke Form
        </a>

    </div>
</div>

</body>
</html>
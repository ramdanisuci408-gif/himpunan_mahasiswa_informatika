<!DOCTYPE html>
<html>
<head>
<title>Tambah Anggota</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
<div class="card p-4 shadow">

<h4 class="text-success">Tambah Anggota</h4>

<form method="POST">
@csrf

<input class="form-control mb-2" name="nama" placeholder="Nama">
<input class="form-control mb-2" name="nim" placeholder="NIM">
<input class="form-control mb-2" name="angkatan" placeholder="Angkatan">
<input class="form-control mb-3" name="wa" placeholder="No WhatsApp">

<button class="btn btn-success">Simpan</button>
<a href="/dashboard_admin" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>

</body>
</html>
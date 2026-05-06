<!DOCTYPE html>
<html>
<head>
<title>Dashboard Mahasiswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-success px-3">
    <span class="navbar-brand">Dashboard Mahasiswa</span>
    <a href="/logout" class="text-white">Logout</a>
</nav>

<div class="container mt-5">

<div class="card shadow p-4">

<h4 class="text-success">Profil Mahasiswa</h4>

@if($mhs)
<ul class="list-group">
<li class="list-group-item">Nama: {{ $mhs['nama'] }}</li>
<li class="list-group-item">NIM: {{ $mhs['nim'] }}</li>
<li class="list-group-item">Angkatan: {{ $mhs['angkatan'] }}</li>
<li class="list-group-item">No WA: {{ $mhs['wa'] }}</li>
</ul>
@else
<div class="alert alert-danger mt-3">Data tidak ditemukan</div>
@endif

</div>

</div>

</body>
</html>
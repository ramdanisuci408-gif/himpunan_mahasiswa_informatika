<!DOCTYPE html>
<html>
<head>
<title>Detail</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
<div class="card p-4 shadow">

<h4 class="text-success">Detail Anggota</h4>

<p><b>Nama:</b> {{ $a['nama'] }}</p>
<p><b>NIM:</b> {{ $a['nim'] }}</p>
<p><b>Angkatan:</b> {{ $a['angkatan'] }}</p>
<p><b>No WA:</b> {{ $a['wa'] }}</p>

<a href="/dashboard_admin" class="btn btn-success">Kembali</a>

</div>
</div>

</body>
</html>
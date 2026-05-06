<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
<div class="card p-4 shadow">

<h4 class="text-warning">Edit Anggota</h4>

<form method="POST">
@csrf

<input class="form-control mb-2" name="nama" value="{{ $a['nama'] }}">
<input class="form-control mb-2" name="nim" value="{{ $a['nim'] }}">
<input class="form-control mb-2" name="angkatan" value="{{ $a['angkatan'] }}">
<input class="form-control mb-3" name="wa" value="{{ $a['wa'] }}">

<button class="btn btn-warning">Update</button>
<a href="/dashboard_admin" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>

</body>
</html>
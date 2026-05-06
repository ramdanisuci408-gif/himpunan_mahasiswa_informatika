<!DOCTYPE html>
<html>
<head>
<title>Dashboard Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-dark bg-success px-3">
    <span class="navbar-brand">Dashboard Admin</span>
    <a href="/logout" class="text-white">Logout</a>
</nav>

<div class="container mt-4">

<a href="/tambah" class="btn btn-success mb-3">+ Tambah Anggota</a>

<table class="table table-bordered table-striped">
<tr class="table-success text-center">
<th>No</th><th>Nama</th><th>NIM</th><th>Angkatan</th><th>WA</th><th>Aksi</th>
</tr>

@foreach(session('anggota', []) as $i => $a)
<tr>
<td>{{ $i+1 }}</td>
<td>{{ $a['nama'] }}</td>
<td>{{ $a['nim'] }}</td>
<td>{{ $a['angkatan'] }}</td>
<td>{{ $a['wa'] }}</td>
<td class="text-center">
<a href="/detail/{{ $i }}" class="btn btn-info btn-sm">Detail</a>
<a href="/edit/{{ $i }}" class="btn btn-warning btn-sm">Edit</a>
<a href="/hapus/{{ $i }}" class="btn btn-danger btn-sm">Hapus</a>
</td>
</tr>
@endforeach

</table>

</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-success px-3">
    <span class="navbar-brand">HMIT</span>
    <a href="/login_admin" class="text-white">Admin</a>
</nav>

<div class="container d-flex justify-content-center align-items-center" style="height:90vh;">
<div class="card p-4 shadow" style="width:350px;">

<h4 class="text-success text-center">Login Mahasiswa</h4>

@if(session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form method="POST" action="/login_mahasiswa">
@csrf
<input class="form-control mb-2" name="username" placeholder="Nama">
<input class="form-control mb-3" name="password" type="password">
<button class="btn btn-success w-100">Login</button>
</form>

</div>
</div>

</body>
</html>
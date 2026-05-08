<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Mahasiswa</title>
</head>
<body style="font-family:Arial;background:#f1f8e9">

<div style="padding:30px">

    <h1>Dashboard Mahasiswa</h1>

    <h3>Selamat datang, {{ $user }}</h3>

    <a href="/logout_mahasiswa"
    style="background:red;color:white;padding:10px;text-decoration:none;border-radius:5px">
        Logout
    </a>

</div>

</body>
</html>

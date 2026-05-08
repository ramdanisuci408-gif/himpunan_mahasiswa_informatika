<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
</head>
<body style="font-family:Arial;background:#f5f5f5">

<div style="padding:30px">

    <h1>Dashboard Admin</h1>

    <h3>Selamat datang Admin, {{ $admin }}</h3>

    <br

    <a href="/data_anggota"
    style="background:green;color:white;padding:10px;text-decoration:none;border-radius:5px">
        Data Anggota
    </a>

    <a href="/logout_admin"
    style="background:red;color:white;padding:10px;text-decoration:none;border-radius:5px">
        Logout
    </a>

</div>

</body>
</html>
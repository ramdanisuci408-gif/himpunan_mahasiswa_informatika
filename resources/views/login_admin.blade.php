<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
</head>

<body style="margin:0;font-family:Arial;background:#e8f5e9;">

<!-- NAVBAR -->
<div style="background:green;padding:15px;color:white;">

    <h2 style="margin:0;">
        Sistem Informasi Himpunan Mahasiswa
    </h2>

</div>

<!-- FORM LOGIN -->
<div style="
width:400px;
margin:80px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px #ccc;
">

    <h2 align="center" style="color:green;">
        Login Admin
    </h2>

    <p align="center" style="color:gray;">
        Silakan login sebagai admin
    </p>

    <form method="POST" action="/login_admin">

        @csrf

        <!-- USERNAME -->
        <label>Username</label>

        <input type="text"
        name="username"
        placeholder="Masukkan username"
        style="
        width:100%;
        padding:12px;
        margin-top:5px;
        margin-bottom:15px;
        border:1px solid #ccc;
        border-radius:5px;
        ">

        <!-- PASSWORD -->
        <label>Password</label>

        <input type="password"
        name="password"
        placeholder="Masukkan password"
        style="
        width:100%;
        padding:12px;
        margin-top:5px;
        margin-bottom:20px;
        border:1px solid #ccc;
        border-radius:5px;
        ">
        
        <!-- BUTTON LOGIN -->
        <button type="submit"
        style="
        width:100%;
        padding:12px;
        background:green;
        color:white;
        border:none;
        border-radius:5px;
        font-size:16px;
        ">

            Login

        </button>

    </form>

    <br>

    <!-- LINK LOGIN MAHASISWA -->
    <div align="center">

        <a href="/"
        style="
        text-decoration:none;
        color:green;
        font-weight:bold;
        ">

            Login Mahasiswa

        </a>

    </div>

</div>

</body>
</html>

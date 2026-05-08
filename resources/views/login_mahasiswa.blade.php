<!DOCTYPE html>
<html>
<head>
    <title>Login Mahasiswa</title>
</head>
<body style="margin:0;font-family:Arial;background:#e8f5e9;">

<div style="width:350px;margin:100px auto;background:white;padding:30px;border-radius:10px">

    <h2 align="center">Login Mahasiswa</h2>

    <form method="POST" action="/login_mahasiswa">
        @csrf

        <input type="text" name="username" placeholder="Username"
        style="width:100%;padding:10px;margin-top:10px">

        <input type="password" name="password" placeholder="Password"
        style="width:100%;padding:10px;margin-top:10px">

        <button type="submit"
        style="width:100%;padding:10px;background:green;color:white;border:none;margin-top:15px">
            Login
        </button>

    </form>

    <br>

    <a href="/admin">Login Admin</a>

</div>

</body>
</html>

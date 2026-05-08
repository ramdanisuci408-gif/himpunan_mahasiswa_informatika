<!DOCTYPE html>
<html>
<head>
    <title>Tambah Anggota</title>
</head>
<body style="margin:0;font-family:Arial;background:#e8f5e9;">

<!-- NAVBAR -->
<div style="background:green;padding:15px;color:white;">
    <h2 style="margin:0;">Sistem Himpunan Mahasiswa</h2>
</div>

<!-- FORM -->
<div style="width:500px;margin:40px auto;background:white;padding:30px;border-radius:10px;box-shadow:0 0 10px #ccc;">

    <h2 align="center">Tambah Anggota</h2>

    <form method="POST" action="/simpan_anggota">
        @csrf

        <label>Nama Lengkap</label>
        <input type="text" name="nama"
        style="width:100%;padding:12px;margin-top:5px;margin-bottom:15px;border:1px solid #ccc;border-radius:5px;">

        <label>NIM</label>
        <input type="text" name="nim"
        style="width:100%;padding:12px;margin-top:5px;margin-bottom:15px;border:1px solid #ccc;border-radius:5px;">

        <label>Jurusan</label>
        <input type="text" name="jurusan"
        style="width:100%;padding:12px;margin-top:5px;margin-bottom:15px;border:1px solid #ccc;border-radius:5px;">

        <label>Angkatan</label>
        <input type="text" name="angkatan"
        placeholder="Contoh : 2024"
        style="width:100%;padding:12px;margin-top:5px;margin-bottom:15px;border:1px solid #ccc;border-radius:5px;">

        <label>Nomor WhatsApp</label>
        <input type="text" name="whatsapp"
        placeholder="08xxxxxxxxxx"
        style="width:100%;padding:12px;margin-top:5px;margin-bottom:15px;border:1px solid #ccc;border-radius:5px;">

        <button type="submit"
        style="width:100%;padding:12px;background:green;color:white;border:none;border-radius:5px;font-size:16px;">
            Simpan Data
        </button>

    </form>

    <br>

    <a href="/data_anggota"
    style="text-decoration:none;background:#2196f3;color:white;padding:10px 15px;border-radius:5px;">
        Kembali
    </a>

</div>

</body>
</html>

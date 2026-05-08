<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
</head>

<body style="margin:0;font-family:Arial;background:#f5f5f5;">

<!-- NAVBAR -->
<div style="background:green;color:white;padding:15px;">

    <h2 style="margin:0;">
        Sistem Informasi Himpunan Mahasiswa
    </h2>

</div>

<!-- CONTENT -->
<div style="padding:30px;">

    <h1>Data Anggota Himpunan</h1>

    <br>

    <!-- TOMBOL -->
    <a href="/dashboard_admin"
    style="background:#4caf50;
    color:white;
    padding:10px 15px;
    text-decoration:none;
    border-radius:5px;">

        Dashboard

    </a>

    <a href="/tambah_anggota"
    style="background:#2196f3;
    color:white;
    padding:10px 15px;
    text-decoration:none;
    border-radius:5px;">

        Tambah Anggota

    </a>

    <a href="/logout_admin"
    style="background:red;
    color:white;
    padding:10px 15px;
    text-decoration:none;
    border-radius:5px;">

        Logout

    </a>

    <br><br>

    <!-- TABEL -->
    <table border="1"
    width="100%"
    cellpadding="10"
    cellspacing="0"
    style="background:white;border-collapse:collapse;">

        <tr style="background:green;color:white;text-align:center;">

            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
            <th>No WhatsApp</th>
            <th>Aksi</th>

        </tr>

        @foreach($anggota as $key => $a)

        <tr align="center">

            <td>{{ $key + 1 }}</td>

            <td>{{ $a['nama'] ?? '-' }}</td>

            <td>{{ $a['nim'] ?? '-' }}</td>

            <td>{{ $a['jurusan'] ?? '-' }}</td>

            <td>{{ $a['angkatan'] ?? '-' }}</td>

            <td>{{ $a['whatsapp'] ?? '-' }}</td>

            <td>

                <!-- EDIT -->
                <a href="/edit/{{ $key }}"
                style="background:orange;
                color:white;
                padding:8px 12px;
                text-decoration:none;
                border-radius:5px;">

                    Edit

                </a>

                <!-- HAPUS -->
                <a href="/hapus/{{ $key }}"
                onclick="return confirm('Yakin ingin hapus data ini?')"
                style="background:red;
                color:white;
                padding:8px 12px;
                text-decoration:none;
                border-radius:5px;">

                    Hapus

                </a>

            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>
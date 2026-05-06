<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/* LOGIN MAHASISWA */
Route::get('/', fn () => view('login_mahasiswa'));

Route::post('/login_mahasiswa', function (Request $req) {

    $data = session('anggota', []);

    foreach ($data as $a) {
        if ($req->username == $a['nama'] && $req->password == '123') {
            cookie()->queue('mahasiswa', $a['nama'], 60);
            return redirect('/dashboard_mahasiswa');
        }
    }

    return back()->with('error', 'Login gagal');
});

/* LOGIN ADMIN */
Route::get('/login_admin', fn () => view('login_admin'));

Route::get('/login_admin', function (Request $req) {
    if ($req->username == 'admin' && $req->password == '123') {
        session(['admin' => true]);
        return redirect('/dashboard_admin');
    }
    return back();
});

/* DASHBOARD ADMIN */
Route::get('/dashboard_admin', function () {
    if (!session('admin')) return redirect('/login_admin');
    return view('dashboard_admin');
});

/* DASHBOARD MAHASISWA */
Route::get('/dashboard_mahasiswa', function () {

    $nama = request()->cookie('mahasiswa');
    if (!$nama) return redirect('/');

    $data = session('anggota', []);
    $mhs = collect($data)->firstWhere('nama', $nama);

    return view('dashboard_mahasiswa', compact('mhs'));
});

/* TAMBAH */
Route::get('/tambah', fn () => view('tambah'));

Route::get('/tambah', function (Request $req) {

    $data = session('anggota', []);

    $data[] = [
        'nama'=>$req->nama,
        'nim'=>$req->nim,
        'angkatan'=>$req->angkatan,
        'wa'=>$req->wa
    ];

    session(['anggota'=>$data]);

    return redirect('/dashboard_admin');
});

/* DETAIL */
Route::get('/detail/{id}', function ($id) {
    $data = session('anggota', []);
    return view('detail', ['a'=>$data[$id]]);
});

/* EDIT */
Route::get('/edit/{id}', function ($id) {
    $data = session('anggota', []);
    return view('edit', ['a'=>$data[$id], 'id'=>$id]);
});

Route::get('/edit/{id}', function (Request $req, $id) {

    $data = session('anggota', []);

    $data[$id] = [
        'nama'=>$req->nama,
        'nim'=>$req->nim,
        'angkatan'=>$req->angkatan,
        'wa'=>$req->wa
    ];

    session(['anggota'=>$data]);

    return redirect('/dashboard_admin');
});

/* HAPUS */
Route::get('/hapus/{id}', function ($id) {
    $data = session('anggota', []);
    unset($data[$id]);
    session(['anggota'=>array_values($data)]);
    return redirect('/dashboard_admin');
});

/* LOGOUT */
Route::get('/logout', function () {
    session()->flush();
    cookie()->queue(cookie()->forget('mahasiswa'));
    return redirect('/');
});
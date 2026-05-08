<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| LOGIN MAHASISWA (COOKIE)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('login_mahasiswa');
});

Route::post('/login_mahasiswa', function (Request $request) {

    $username = $request->username;
    $password = $request->password;

    // akun mahasiswa
    if ($username == "mahasiswa" && $password == "123") {

        return redirect('/dashboard_mahasiswa')
            ->cookie('mahasiswa', $username, 60);
    }

    return back()->with('error', 'Login gagal');
});

Route::get('/dashboard_mahasiswa', function (Request $request) {

    if (!$request->cookie('mahasiswa')) {
        return redirect('/');
    }

    return view('dashboard_mahasiswa', [
        'user' => $request->cookie('mahasiswa')
    ]);
});

Route::get('/logout_mahasiswa', function () {

    return redirect('/')
        ->cookie('mahasiswa', '', -1);
});


/*
|--------------------------------------------------------------------------
| LOGIN ADMIN (SESSION)
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {
    return view('login_admin');
});

Route::post('/login_admin', function (Request $request) {

    $username = $request->username;
    $password = $request->password;

    // akun admin
    if ($username == "admin" && $password == "admin123") {

        session([
            'admin' => $username
        ]);

        return redirect('/dashboard_admin');
    }

    return back()->with('error', 'Login gagal');
});

Route::get('/dashboard_admin', function () {

    if (!session('admin')) {
        return redirect('/admin');
    }

    return view('dashboard_admin', [
        'admin' => session('admin')
    ]);
});

Route::get('/logout_admin', function () {

    session()->forget('admin');

    return redirect('/admin');
});


/*
|--------------------------------------------------------------------------
| DATA ANGGOTA
|--------------------------------------------------------------------------
*/

Route::get('/data_anggota', function () {

    if (!session('admin')) {
        return redirect('/admin');
    }

    $anggota = session('anggota', []);

    return view('data_anggota', compact('anggota'));
});


/*
|--------------------------------------------------------------------------
| TAMBAH ANGGOTA
|--------------------------------------------------------------------------
*/

Route::get('/tambah_anggota', function () {

    if (!session('admin')) {
        return redirect('/admin');
    }

    return view('tambah_anggota');
});

Route::post('/simpan_anggota', function (Request $request) {

    if (!session('admin')) {
        return redirect('/admin');
    }

    $anggota = session('anggota', []);

    $anggota[] = [

        'nama' => $request->nama,
        'nim' => $request->nim,
        'jurusan' => $request->jurusan,
        'angkatan' => $request->angkatan,
        'whatsapp' => $request->whatsapp,

    ];

    session([
        'anggota' => $anggota
    ]);

    return redirect('/data_anggota');
});


/*
|--------------------------------------------------------------------------
| HAPUS ANGGOTA
|--------------------------------------------------------------------------
*/

Route::get('/hapus/{id}', function ($id) {

    if (!session('admin')) {
        return redirect('/admin');
    }

    $anggota = session('anggota', []);
    unset($anggota[$id]);

    $anggota = array_values($anggota);

    session([
    'anggota' => $anggota
    ]);

    return redirect('/data_anggota');
});


/*
|--------------------------------------------------------------------------
| EDIT ANGGOTA
|--------------------------------------------------------------------------
*/

Route::get('/edit/{id}', function ($id) {

    if (!session('admin')) {
        return redirect('/admin');
    }

    $anggota = session('anggota', []);

    return view('edit_anggota', [
        'data' => $anggota[$id],
        'id' => $id
    ]);
});

Route::post('/update/{id}', function (Request $request, $id) {

    if (!session('admin')) {
        return redirect('/admin');
    }

    $anggota = session('anggota', []);

    $anggota[$id] = [

        'nama' => $request->nama,
        'nim' => $request->nim,
        'jurusan' => $request->jurusan,
        'angkatan' => $request->angkatan,
        'whatsapp' => $request->whatsapp,

    ];

    session([
        'anggota' => $anggota
    ]);

    return redirect('/data_anggota');
});
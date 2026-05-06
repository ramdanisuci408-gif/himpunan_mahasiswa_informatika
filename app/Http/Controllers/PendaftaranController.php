<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    // tampilkan form
    public function form()
    {
        return view('daftar');
    }

    // proses simpan
    public function simpan(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'alasan' => $request->alasan // 🔥 WAJIB ADA
        ];

        return view('hasil', $data);
    }

    // form aspirasi
    public function formAspirasi()
    {
        return view('aspirasi');
    }

    // simpan aspirasi
    public function simpanAspirasi(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'kategori' => $request->kategori,
            'aspirasi' => $request->aspirasi
        ];

        return view('hasil_aspirasi', $data);
    }
}
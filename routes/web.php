<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

Route::get('/', [PendaftaranController::class, 'form']);
Route::post('/simpan', [PendaftaranController::class, 'simpan']);

Route::get('/aspirasi', [PendaftaranController::class, 'formAspirasi']);
Route::post('/aspirasi/simpan', [PendaftaranController::class, 'simpanAspirasi']);
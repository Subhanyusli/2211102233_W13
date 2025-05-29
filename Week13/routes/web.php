<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/signup', [AuthController::class, 'showSignup']);
Route::post('/signup', [AuthController::class, 'signup']);

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/produk', function () {
        return view('produk');
    });

    Route::get('/detail', function () {
        return view('detail');
    });

    Route::get('/profil', function () {
        return view('profil');
    });

    Route::get('/keranjang', function () {
        return view('keranjang');
    });

    Route::get('/riwayat', function () {
        return view('riwayat');
    });

    Route::get('/bantuan', function () {
        return view('bantuan');
    });
});

Route::get('/', function () {
    return redirect('/login');
});
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/master', function () {
    return view('user.layout.master');
});
Route::get('/', function () {
    return view('user.pages.index');
});

// user
Route::get('/berita', function () {
    return view('user.pages.berita');
});
Route::get('/berita-detail', function () {
    return view('user.pages.berita-detail');
});

Route::get('/daftar-pengunjung', function () {
    return view('user.pages.daftar-pengunjung');
});
Route::get('/form-pengunjung', function () {
    return view('user.pages.form-pengunjung');
});

Route::get('/profil', function () {
    return view('user.pages.profil');
});

// admin
Route::get('/lpp', function () {
    return view('admin.layout.master');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/berita', function () {
    return view('admin.berita.index');
});

Route::get('/tambah-berita', function () {
    return view('admin.berita.add');
});

Route::get('/edit-berita', function () {
    return view('admin.berita.edit');
});

Route::get('/lihat-berita', function () {
    return view('admin.berita.show');
});


Route::get('/blank', function () {
    return view('user.pages.blank');
});

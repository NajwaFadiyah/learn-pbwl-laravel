<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('mhs', function () {
    return view('mahasiswa');
});

Route::get('abt', function () {
    return view('about');
});

Route::get('profil', function () {
    $nama = "Junior";
    return view('profile', compact('nama'));
});

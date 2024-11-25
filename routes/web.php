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

// To understand how to use array, and benefit of array
Route::get('array', function () {
    // Contoh penggunaan while

    // Infinite loop (perulangan yang tidak akan berhenti karena bernilai true)
    // Tentukan nilai falsenya agar berhenti
    $nilai_awal = 1;
    while ($nilai_awal <= 5) {
        echo 'SELAMAT DATANG ' . $nilai_awal . 'x <br>';
        // Nilai awal bertambah 1
        $nilai_awal++;
    }
});

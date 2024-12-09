<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('mhs', function () {
//     $nim = [1009, 1010, 1027, 3127, 3128];
//     $nama = ['Najwa', 'Tri', 'Tiara', 'Yayi', 'Rosita'];
//     // untuk menghitung jumlah data pada array count($nim)
//     $jumlah = count($nim);
//     return view('mahasiswa', compact('nim', 'nama', 'jumlah'));
// });

// Route::get('abt', function () {
//     return view('about');
// });

// Route::get('profil', function () {
//     $nama = "Junior";
//     return view('profile', compact('nama'));
// });

// // To understand how to use array, and benefit of array
// Route::get('array', function () {
//     // Contoh penggunaan while

//     // Infinite loop (perulangan yang tidak akan berhenti karena bernilai true)
//     // Tentukan nilai falsenya agar berhenti
//     // $nilai_awal = 1;
//     // while ($nilai_awal <= 5) {
//     //     echo 'SELAMAT DATANG ' . $nilai_awal . 'x <br>';
//     //     // Nilai awal bertambah 1
//     //     $nilai_awal++;
//     // }

//     // Contoh penggunaan for

//     for ($i = 0; $i < 5; $i++) {
//         echo 'Selamat ' . $i . 'x <br>';
//     }
// });

Route::resource('/', mahasiswaController::class);

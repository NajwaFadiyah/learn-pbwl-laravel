<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses simpan tambah

        Session::flash('nim', $request->nim);
        Session::flash('nama_mahasiswa', $request->nama_mahasiswa);
        Session::flash('tgl_lahir', $request->tgl_lahir);
        Session::flash('alamat', $request->alamat);

        $request->validate(
            [
                'nim' => 'required|numeric|unique:mahasiswa,nim',
                'nama_mahasiswa' => 'required',
                'jk' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required'
            ],
            [
                'nim.required' => 'NIM Tidak Boleh Kosong!!',
                'nim.numeric' => 'NIM Harus Berbentuk Angka',
                'nim.unique' => 'Maaf, NIM tersebut telah ada',
                'nama_mahasiswa.required' => 'Nama Mahasiswa Tidak Boleh Kosong!!',
                'jk.required' => 'Jenis Kelamin Tidak Boleh Kosong!!',
                'tgl_lahir.required' => 'Tanggal Lahir Tidak Boleh Kosong!!',
                'alamat.required' => 'Alamat Tidak Boleh Kosong!!'
            ]
        );

        // return $request->nim;
        // data yang dikirim tinggal diletak di dalam array

        // yang pertama nama table, yang kedua name di inputannya
        $data = [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat
        ];

        mahasiswa::create($data);
        return redirect('/')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //proses hapus
    }
}

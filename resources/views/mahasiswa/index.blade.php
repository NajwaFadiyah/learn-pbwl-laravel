<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Mahasiswa </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">NAJWA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/mhs">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/abt">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profil">Profile</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
  <h1> Ini adalah halaman Mahasiswa </h1>

  <div class="row">
    <div class="col-sm-6">
      <h4> Tabel Mahasiswa </h4>
    </div>
    
    
    <div class="col-sm-6" style="text-align: right">
      <a href="create" class="btn btn-success btn-sm mb-2"> Tambah Data </a>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-12">
      @if (Session::has('success'))
          <div class="pt-3">
            <div class="alert alert-success">
              {{ Session::get('success') }}
            </div>
          </div>
      @endif
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-warning table-sm table-hover table-striped table-bordered text-center">
        <thead>
          <tr>
            <th> No </th>
            <th> NIM </th>
            <th> Nama Mahasiswa </th>
            <th> Jenis Kelamin </th>
            <th> Tanggal Lahir </th>
            <th> Alamat </th>
          </tr>
        </thead>
        <tbody>
          {{-- <//?php //$no=1; ?> --}}
          @foreach ($mahasiswa as $m)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->nama_mahasiswa }}</td>
                <td>{{ $m->jk }}</td>
                <td>{{ $m->tgl_lahir }}</td>
                <td>{{ $m->alamat }}</td>
              </tr>
          @endforeach

          {{-- Menggunakan WHILE dengan BLADE --}}
          {{-- Perintahnya b:while --}}
          {{-- <//?php //$nilai_awal = 0; ?> --}}
          {{-- @while ($nilai_awal < $jumlah)
          <tr>
            <td> {{ $nim[$nilai_awal] }} </td>
            <td> {{ $nama[$nilai_awal]}} </td>
            <td> Perempuan </td>
            <td> 23 Desember 2027 </td>
            <td> Kota Medan </td>
          </tr> --}}
          {{-- <//?//php $nilai_awal++ ?> --}}
          {{-- @endwhile --}}
    
          {{-- Menggunakan FOR dengan BLADE --}}
          {{-- Perintahnya b:for --}}
          {{-- @for ($i = 0; $i < $jumlah; $i++) --}}
          {{-- <tr> --}}
            {{-- <td> {{ $nim[$i] }} </td>
            <td> {{ $nama[$i]}} </td>
            <td> Perempuan </td>
            <td> 23 Desember 2027 </td>
            <td> Kota Medan </td> --}}
          {{-- </tr> --}}
          {{-- @endfor --}}
        </tbody>
      </table>
    </div>
  </div>

</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
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
  <table class="table table-warning table-sm table-hover table-striped table-bordered">
    <thead>
      <tr>
        <th> NIM </th>
        <th> Nama Mahasiswa </th>
        <th> Jenis Kelamin </th>
        <th> Tanggal Lahir </th>
        <th> Alamat </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> 0702225511 </td>
        <td> Erika Putri </td>
        <td> Perempuan </td>
        <td> 23 Desember 2027 </td>
        <td> Kota Medan </td>
      </tr>
      <tr>
        <td> 0702921010 </td>
        <td> Ziyaah Amelia </td>
        <td> Perempuan </td>
        <td> 12 Februari 2027 </td>
        <td> Medan </td>
      </tr>
      <tr>
        <td> 0702291033 </td>
        <td> Jessica Jelita </td>
        <td> Perempuan </td>
        <td> 31 Oktober 2027 </td>
        <td> Medan </td>
      </tr>
    </tbody>
  </table>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php

date_default_timezone_get("Asia/Jakarta");

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di tambah');
    document.location.href = 'index.php';
    </script>";
  } else {
    "<script>
    alert('data gagal di tambah');
    </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- font -->
  <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

  <title>CRUD</title>
</head>

<body>
  <!--- navbar --->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">SISTEM PENERIMAAN MAHASISWA BARU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        <div class="text-white">
          <?php echo date("l, d-m-y"); ?>
        </div>
      </div>
    </div>
  </nav>

  <!--sidebar -->

  <div class="row mt-4">
    <div class="col-md-2 pr-2 pt-4 bg-secondary">
      <!--menu-->
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> DASHBOARD</a>
          <hr class="bg-dark">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php"><i class="fas fa-users"></i> CALON MAHASISWA</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tambah.php"><i class="fas fa-user-edit"></i> INPUT MABA</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher"></i> DAFTAR DOSEN</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-calendar-week"></i> JADWAL KULIAH</a>
          <hr>
        </li>
      </ul>
    </div>
    <div class="col-md-10 p-2 pt-5">
      <!--konten-->
      <h3> <i class="fas fa-users"></i> INPUT DATA CALON MAHASISWA </h3>
      <hr>

      <form method="POST" action="">
        <div class="mb-3">
          <label for="nama" class="form-label">NAMA :</label>
          <input type="text" class="form-control" id="nama" placeholder="NAMA LENGKAP" name="nama" autofocus Required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">ALAMAT :</label>
          <input type="text" class="form-control" id="alamat" placeholder="ALAMAT LENGKAP" name="alamat" Required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label">JENIS KELAMIN :</label>
          <input type="text" class="form-control" id="jenis_kelamin" placeholder="JENIS KELAMIN" name="jenis_kelamin" Required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="agama" class="form-label">AGAMA :</label>
          <input type="text" class="form-control" id="agama" placeholder="AGAMA" name="agama" Required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="sekolah asal" class="form-label">SEKOLAH ASAL :</label>
          <input type="text" class="form-control" id="sekolah_asal" placeholder="SEKOLAH ASAL" name="sekolah_asal" Required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label">FOTO :</label>
          <input type="text" class="form-control" id="foto" placeholder="FOTO MABA" name="foto" Required autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="tambah">SIMPAN</button>
      </form>

    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
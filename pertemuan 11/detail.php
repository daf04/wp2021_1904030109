<?php

// date_default_timezone_get("Asia/Jakarta");

require 'functions.php';

if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id  = $_GET['id'];
$camaba = query("SELECT * FROM calon_mhs WHERE id =$id");

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
      <h3> <i class="fas fa-users"></i> DAFTAR CALON MAHASISWA </h3>
      <hr>

      <ul class="list-group">
        <li class="list-group-item active"><?= $camaba['nama']; ?></li>
        <li class="list-group-item ">ALAMAT :<?= $camaba['alamat']; ?></li>
        <li class="list-group-item ">JENIS KELAMIN :<?= $camaba['jenis_kelamin']; ?></li>
        <li class="list-group-item ">AGAMA :<?= $camaba['agama']; ?></li>
        <li class="list-group-item ">SEKOLAH ASAL :<?= $camaba['sekolah_asal']; ?></li>
        <li class="list-group-item "><img src="image/<?= $camaba['foto_maba']; ?>" alt=""></li>
        <li class="list-group-item ">
          <a href="edit.php?id=<?= $camaba['id'] ?>" class="btn btn-warning" role="button">EDIT</a>
          <a href="hapus.php?id=<?= $camaba['id'] ?>" onclick="return confirm('apakah anda yakin akan menghapus data ini');" class="btn btn-danger" role="button">HAPUS</a>
          <a href="index.php" class="btn btn-primary" role="button">KEMBALI</a>
        </li>
      </ul>
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
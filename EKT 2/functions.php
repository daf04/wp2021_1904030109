<?php

$conn = mysqli_connect('localhost', 'root', '', 'wpsmt5');
// pemanggil table
function query($query)
{
  global $conn;

  //memanggil data pada seluruh table
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //pemanggilan data
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $agama = htmlspecialchars($data['agama']);
  $sekolah_asal = htmlspecialchars($data['sekolah_asal']);
  $foto = htmlspecialchars($data['foto_maba']);
  $query = "INSERT INTO calon_mhs
    VALUES
    (null,'$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$foto');";

  mysqli_query($conn, $query);
  echo  mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
function hapus($id)
{
  global  $conn;
  mysqli_query($conn, "DELETE FROM calon_mhs WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $agama = htmlspecialchars($data['agama']);
  $sekolah_asal = htmlspecialchars($data['sekolah_asal']);
  $foto = htmlspecialchars($data['foto_maba']);

  $query = "UPDATE calon_mhs SET 
    nama = '$nama',
    alamat = '$alamat',
    jenis_kelamin = '$jenis_kelamin',
    agama = '$agama',
    sekolah_asal = '$sekolah_asal',
    foto = '$foto'
    WHERE id =$id;";

  mysqli_query($conn, $query);
  echo  mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT  * FROM calon_mhs WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function hapusdosen($id)
{
  global  $conn;
  mysqli_query($conn, "DELETE FROM daftar_dosen WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function caridosen($keyword)
{
  global $conn;

  $query = "SELECT  * FROM daftar_dosen WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

<?php
$conn = mysqli_connect('localhost', 'root', '', 'wpsmt5');

//pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada table
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $nama = ($data['nama']);
  $alamat = ($data['alamat']);
  $jenis_kelamin = ($data['jenis_kelamin']);
  $agama = ($data['agama']);
  $sekolah_asal = ($data['sekolah_asal']);
  $foto = ($data['foto']);
  $query = "INSERT INTO calon_mhs
    VALUES
    (null,'$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$foto_maba');";

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

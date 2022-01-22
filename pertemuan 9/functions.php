<?php
$conn = mysqli_connect('localhost','root','','wpsmt5');

//pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada table
  $result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1) {
  return mysqli_fetch_assoc($result);
}

  // pemanggilan elemen data dengan rapih
  $rows = [] ;
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

<?php

require "functions.php";
// agar tidak  bisa masuk pada pengetikan manual pada url

if (!isset($_GET['id'])) {
  header("location: dosen.php");
  exit;
}

$id = $_GET['id'];
if (hapusdosen($id) > 0) {
  echo
  "<script>
    alert('data berhasil di hapus');
    document.location.href = 'dosen.php';
    </script>";
} else {
  "<script>
    alert('data gagal di hapus');
    </script>";
}

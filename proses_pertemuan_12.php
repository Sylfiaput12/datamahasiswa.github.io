<?php

include "koneksi.php";

// Mengambil data inputan
$nama_mhs = $_POST['nama'];
$prodi_mhs = $_POST['prodi'];
$perulangan = $_POST['ulangi'];

$proses = mysqli_query($koneksi, "INSERT INTO `mahasiswa` (nama_mahasiswa, prodi) VALUES ('" . $nama_mhs . "', '" . $prodi_mhs . "')") or die(mysqli_error($koneksi));

if ($proses) {
    echo "<script>alert ('Data disimpan')</script>";
} else {
    echo "<script>alert ('Data gagal disimpan')</script>";
}

echo "<script>window.location.href='index.php'</script>";


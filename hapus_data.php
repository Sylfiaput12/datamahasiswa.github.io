<?php
include "koneksi.php";

$npm = $_GET['id'];

$proses = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $npm") or die(mysqli_error($koneksi));

if ($proses) {
    echo "<script>alert ('Data dihapus')</script>";
} else {
    echo "<script>alert ('Data gagal dihapus')</script>";
}

echo "<script>window.location.href='index.php'</script>";

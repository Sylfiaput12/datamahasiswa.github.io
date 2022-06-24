<?php

$hostname = "localhost";
$userDatabase = "root";
$passwordUser = "";
$databaseName = "kuliah_pemrograman_web";

$koneksi = mysqli_connect($hostname, $userDatabase, $passwordUser, $databaseName) or die(mysqli_error($koneksi));

// if ($koneksi) {
//     echo "sukses";
// } else {
//     echo "gagal";
// }
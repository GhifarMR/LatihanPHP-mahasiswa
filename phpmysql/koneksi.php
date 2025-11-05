<?php
$koneksi = mysqli_connect("localhost", "root", "");

$database = mysqli_select_db($koneksi, "LatihanPHP");

if ($koneksi and $database) {
    echo "Koneksi dan database berhasil";
} else {
    echo "Koneksi dan database gagal";
}

?>
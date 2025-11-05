<?php
include "koneksi.php";

$nim = $_GET['nim'];

$hapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE NIM='$nim'");

if ($hapus) {
    echo "<meta http-equiv='refresh' content='0; url=tambah.php'>";
} else {
    echo "Proses hapus gagal: " . mysqli_error($koneksi);
}
?>

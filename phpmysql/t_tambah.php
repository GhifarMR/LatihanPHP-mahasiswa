<?php
include "koneksi.php";

$NIM    = $_POST['NIM'];
$Nama   = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Kota   = $_POST['Kota'];
$JK     = $_POST['JK'];

$sql = "INSERT INTO mahasiswa (NIM, Nama, Alamat, Kota, JK)
        VALUES ('$NIM', '$Nama', '$Alamat', '$Kota', '$JK')";


$result = mysqli_query($koneksi, $sql);

if ($result) {
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data: ";
}
?>
<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $NIM = $_POST['NIM'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Kota = $_POST['Kota'];
    $JK = $_POST['JK'];

    $ubah = mysqli_query($koneksi, "UPDATE mahasiswa SET Nama='$Nama', Alamat='$Alamat', Kota='$Kota', JK='$JK' WHERE NIM='$NIM'");

    if ($ubah) {
        echo "<meta http-equiv='refresh' content='0; url=tambah.php'>";
    } else {
        echo "Proses ubah gagal";
    }
}
?>
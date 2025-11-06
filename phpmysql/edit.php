<?php
include "koneksi.php";

$NIM = $_GET['NIM'];

$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE NIM='$NIM'"));

if ($data['JK'] == 'L') {
    $a = "checked";
} else {
    $a = "";
}

if ($data['JK'] == 'P') {
    $b = "checked";
} else {
    $b = "";
}
?>

<h4>Tambah Data</h4>
<form method="post" action="t_edit.php?NIM=<?php echo $data['NIM']; ?>">

    <table border="1">
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="NIM" value="<?php echo $data['NIM']; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="Nama" value="<?php echo $data['Nama']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="Alamat" value="<?php echo $data['Alamat']; ?>"></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type="text" name="Kota" value="<?php echo $data['Kota']; ?>"></td>
        </tr>
        <tr>
            <td>JK</td>
            <td>:</td>
            <td>
                <input type="radio" name="JK" value="L" <?php echo $a; ?>> L &nbsp; &nbsp;
                <input type="radio" name="JK" value="P" <?php echo $b; ?>> P
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
</form>

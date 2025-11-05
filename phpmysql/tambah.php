<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h4>Tambah Data</h4>
    <form method="post" action="tambah.php">

        <table border="1">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td> <input type="text" name="NIM"> </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td> <input type="text" name="Nama"> </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td> <input type="text" name="Alamat"> </td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:</td>
                <td> <input type="text" name="Kota"> </td>
            </tr>
            <tr>
                <td>JK</td>
                <td>:</td>
                <td> <input type="radio" name="JK" value="L"> L &nbsp; &nbsp;
                    <input type="radio" name="JK" value="P">P
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="simpan" value="Simpan"> </td>
            </tr>
        </table>
    </form>

    <!-- Menampilkan Data -->

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>JK</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include "koneksi.php";

        if (isset($_POST['simpan'])) {
            $NIM = $_POST['NIM'];
            $Nama = $_POST['Nama'];
            $Alamat = $_POST['Alamat'];
            $Kota = $_POST['Kota'];
            $JK = $_POST['JK'];

            mysqli_query($koneksi, "INSERT INTO mahasiswa (NIM, Nama, Alamat, Kota, JK) 
                                    VALUES ('$NIM', '$Nama', '$Alamat', '$Kota', '$JK')");
        }

        // Tampilkan data
        $i = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        while ($data = mysqli_fetch_array($sql)) {
            echo "
                <tr>
                    <td>$i</td>
                    <td>$data[Nama]</td>
                    <td>$data[Alamat]</td>
                    <td>$data[Kota]</td>
                    <td>$data[JK]</td>
                    <td><a href='edit.php?NIM=$data[NIM]'>Edit</a></td>
                    <td><a href='hapus.php?NIM=$data[NIM]'>Hapus</a></td>
                </tr>
            ";
            $i++;
        }
        ?>
    </table>

</body>

</html>

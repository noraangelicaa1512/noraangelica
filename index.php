<?php
require 'koneksi.php';

// Proses Tambah Data
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO data_siswa (nama, umur, kelas, alamat) VALUES ('$nama', '$umur', '$kelas', '$alamat')";
    mysqli_query($conn, $query);
    header("Location: index.php");
}

// Proses Hapus Data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM data_siswa WHERE id = $id";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Sederhana</title>
</head>

<body>
    <h1>Data Siswa</h1>
    <!-- Form Tambah Data -->
    <form action="" method="post">
        <label>Nama: <input type="text" name="nama" required></label><br>
        <label>Umur: <input type="number" name="umur" required></label><br>
        <label>Kelas: <input type="text" name="kelas" required></label><br>
        <label>Alamat: <textarea name="alamat" required></textarea></label><br>
        <button type="submit" name="submit">Tambah</button>
    </form>

    <hr>

    <!-- Menampilkan Data -->
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM data_siswa");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['umur']}</td>
                <td>{$row['kelas']}</td>
                <td>{$row['alamat']}</td>
                <td>
                    <a href='update.php?id={$row['id']}'>Edit</a> |
                    <a href='index.php?hapus={$row['id']}' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>

</html>
<?php
require 'koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM data_siswa WHERE id = $id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE data_siswa SET nama = '$nama', umur = '$umur', kelas = '$kelas', alamat = '$alamat' WHERE id = $id";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <h1>Update Data Siswa</h1>
    <form action="" method="post">
        <label>Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required></label><br>
        <label>Umur: <input type="number" name="umur" value="<?= $data['umur'] ?>" required></label><br>
        <label>Kelas: <input type="text" name="kelas" value="<?= $data['kelas'] ?>" required></label><br>
        <label>Alamat: <textarea name="alamat" required><?= $data['alamat'] ?></textarea></label><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>

</html>
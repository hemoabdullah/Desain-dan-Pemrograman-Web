<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $sql = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $params = array($nama, $jenis_kelamin, $alamat, $no_telp);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        header('Location: index.php');
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Create</title>
</head>
<body>
    <h1>Add New Anggota</h1>
    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br>
        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <label>Alamat:</label><br>
        <input type="text" name="alamat" required><br>
        <label>No Telp:</label><br>
        <input type="text" name="no_telp" required><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
<link rel="stylesheet" type="text/css" href="style.css">

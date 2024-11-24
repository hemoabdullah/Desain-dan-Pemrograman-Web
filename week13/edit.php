<?php
include 'koneksi.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $sql = "UPDATE anggota SET nama = ?, jenis_kelamin = ?, alamat = ?, no_telp = ? WHERE id = ?";
    $params = array($nama, $jenis_kelamin, $alamat, $no_telp, $id);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        header('Location: index.php');
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
} else {
    $sql = "SELECT * FROM anggota WHERE id = ?";
    $params = array($id);
    $stmt = sqlsrv_query($conn, $sql, $params);
    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Edit</title>
</head>
<body>
    <h1>Edit Anggota</h1>
    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki" <?php echo $row['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
            <option value="Perempuan" <?php echo $row['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
        </select><br>
        <label>Alamat:</label><br>
        <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required><br>
        <label>No Telp:</label><br>
        <input type="text" name="no_telp" value="<?php echo $row['no_telp']; ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

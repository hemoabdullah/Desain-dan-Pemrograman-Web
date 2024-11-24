<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM anggota WHERE id = ?";
$params = array($id);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt) {
    header('Location: index.php');
} else {
    die(print_r(sqlsrv_errors(), true));
}
?>

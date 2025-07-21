<?php
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = get_db();
    $stmt = $db->prepare('UPDATE pegawai SET nama=?, nik=?, tanggal_lahir=?, jabatan=?, kontak=?, updated_at=datetime("now") WHERE id=?');
    $stmt->execute([
        $_POST['nama'] ?? '',
        $_POST['nik'] ?? '',
        $_POST['tanggal_lahir'] ?? '',
        $_POST['jabatan'] ?? '',
        $_POST['kontak'] ?? '',
        $_POST['id'] ?? 0
    ]);
    header('Location: ../AdminLTE-4.0.0-rc1/pages/admin/allpegawai.php');
    exit();
}
?>

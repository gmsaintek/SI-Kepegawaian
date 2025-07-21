<?php
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = get_db();
    $stmt = $db->prepare('INSERT INTO pegawai (nama, nik, tanggal_lahir, jabatan, kontak, created_at, updated_at) VALUES (?, ?, ?, ?, ?, datetime("now"), datetime("now"))');
    $stmt->execute([
        $_POST['nama'] ?? '',
        $_POST['nik'] ?? '',
        $_POST['tanggal_lahir'] ?? '',
        $_POST['jabatan'] ?? '',
        $_POST['kontak'] ?? ''
    ]);
    header('Location: ../AdminLTE-4.0.0-rc1/pages/admin/allpegawai.php');
    exit();
}
?>

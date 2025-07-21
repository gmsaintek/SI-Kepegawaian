<?php
require_once __DIR__ . '/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = get_db();
    $stmt = $db->prepare('INSERT INTO presensi (pegawai_id, tanggal, status, created_at) VALUES (?, ?, ?, datetime("now"))');
    $stmt->execute([
        $_POST['pegawai_id'] ?? 0,
        $_POST['tanggal'] ?? '',
        $_POST['status'] ?? 'Hadir'
    ]);
    header('Location: ../AdminLTE-4.0.0-rc1/pages/admin/addpresensi.php');
    exit();
}
?>

<?php
require_once __DIR__ . '/db.php';

$db = get_db();

$db->exec("CREATE TABLE IF NOT EXISTS pegawai (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nama TEXT,
    nik TEXT,
    tanggal_lahir TEXT,
    jabatan TEXT,
    kontak TEXT,
    created_at TEXT,
    updated_at TEXT
);");

$db->exec("CREATE TABLE IF NOT EXISTS presensi (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    pegawai_id INTEGER,
    tanggal TEXT,
    status TEXT,
    created_at TEXT,
    FOREIGN KEY(pegawai_id) REFERENCES pegawai(id)
);");

$db->exec("CREATE TABLE IF NOT EXISTS cuti (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    pegawai_id INTEGER,
    tanggal_awal TEXT,
    tanggal_akhir TEXT,
    jenis TEXT,
    alasan TEXT,
    status TEXT,
    alasan_penolakan TEXT,
    created_at TEXT,
    FOREIGN KEY(pegawai_id) REFERENCES pegawai(id)
);");

echo "Database initialized\n";
?>

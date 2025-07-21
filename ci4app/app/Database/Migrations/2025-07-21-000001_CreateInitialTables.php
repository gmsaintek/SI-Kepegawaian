<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInitialTables extends Migration
{
    public function up(): void
    {
        // Pegawai table
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
            ],
            'nama' => ['type' => 'TEXT'],
            'nik'  => ['type' => 'TEXT'],
            'tanggal_lahir' => ['type' => 'TEXT'],
            'jabatan' => ['type' => 'TEXT'],
            'kontak' => ['type' => 'TEXT', 'null' => true],
            'created_at' => ['type' => 'TEXT'],
            'updated_at' => ['type' => 'TEXT'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pegawai');

        // Presensi table
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
            ],
            'pegawai_id' => ['type' => 'INTEGER'],
            'tanggal' => ['type' => 'TEXT'],
            'status' => ['type' => 'TEXT'],
            'created_at' => ['type' => 'TEXT'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pegawai_id', 'pegawai', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('presensi');

        // Cuti table
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
            ],
            'pegawai_id' => ['type' => 'INTEGER'],
            'tanggal_awal' => ['type' => 'TEXT'],
            'tanggal_akhir' => ['type' => 'TEXT'],
            'jenis' => ['type' => 'TEXT'],
            'alasan' => ['type' => 'TEXT', 'null' => true],
            'status' => ['type' => 'TEXT'],
            'alasan_penolakan' => ['type' => 'TEXT', 'null' => true],
            'created_at' => ['type' => 'TEXT'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pegawai_id', 'pegawai', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('cuti');
    }

    public function down(): void
    {
        $this->forge->dropTable('cuti');
        $this->forge->dropTable('presensi');
        $this->forge->dropTable('pegawai');
    }
}

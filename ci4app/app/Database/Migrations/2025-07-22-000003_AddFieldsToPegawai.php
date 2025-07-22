<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFieldsToPegawai extends Migration
{
    public function up(): void
    {
        $fields = [
            'document' => ['type' => 'TEXT', 'null' => true],
            'sisa_cuti' => ['type' => 'INTEGER', 'default' => 0],
        ];
        $this->forge->addColumn('pegawai', $fields);
    }

    public function down(): void
    {
        $this->forge->dropColumn('pegawai', ['document', 'sisa_cuti']);
    }
}

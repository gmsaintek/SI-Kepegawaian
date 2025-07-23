<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class AddFieldsToPresensi extends Migration
{
    public function up(): void
    {
        $fields = [
            'photo' => ['type' => 'TEXT', 'null' => true],
            'location' => ['type' => 'TEXT', 'null' => true],
        ];
        $this->forge->addColumn('presensi', $fields);
    }

    public function down(): void
    {
        $this->forge->dropColumn('presensi', ['photo', 'location']);
    }
}

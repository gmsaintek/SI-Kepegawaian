<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCutiLogsTable extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INTEGER',
                'auto_increment' => true,
            ],
            'cuti_id' => ['type' => 'INTEGER'],
            'message' => ['type' => 'TEXT'],
            'created_at' => ['type' => 'TEXT'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('cuti_id', 'cuti', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('cuti_logs');
    }

    public function down(): void
    {
        $this->forge->dropTable('cuti_logs');
    }
}

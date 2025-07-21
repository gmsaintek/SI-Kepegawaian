<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INTEGER',
                'auto_increment' => true,
            ],
            'google_id' => ['type' => 'TEXT'],
            'email' => ['type' => 'TEXT'],
            'name' => ['type' => 'TEXT'],
            'role' => ['type' => 'TEXT'],
            'created_at' => ['type' => 'TEXT'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down(): void
    {
        $this->forge->dropTable('users');
    }
}

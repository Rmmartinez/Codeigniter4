<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bancos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'sucursal' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'direccion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            
        ]);
        $this->forge->addKey(['sucursal','nombre'], true);
        $this->forge->createTable('bancos');
    }

    public function down()
    {
        $this->forge->dropTable('bancos');
    }
}

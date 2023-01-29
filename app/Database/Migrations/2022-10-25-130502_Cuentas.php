<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cuentas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'numero' => [
                'type'       => 'VARCHAR',
                'constraint' => '8'
            ],
            'tipo' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'moneda' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'monto_actual' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'nombre_titular' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'dni_titular' => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
            ],
            'banco' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'fcreacion' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            
        ]);
        $this->forge->addKey('numero', true);
        $this->forge->createTable('cuentas');
    }

    public function down()
    {
        $this->forge->dropTable('cuentas');
    }
}

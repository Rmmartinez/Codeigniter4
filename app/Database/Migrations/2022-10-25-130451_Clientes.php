<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'apellido' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'domicilio' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'fnac' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'cuit_cuil' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'dni' => [
                'type'           => 'VARCHAR',
                'constraint'     => '11',
            ],
            'tel' => [
                'type'           => 'VARCHAR',
                'constraint'     => '15',
            ],
        ]);
        $this->forge->addKey('dni', true);
        $this->forge->createTable('clientes');
    }

    public function down()
    {
        $this->forge->dropTable('clientes');
    }
}

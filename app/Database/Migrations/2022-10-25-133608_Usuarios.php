<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'contraseña' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'rol' => [
                'type'           => 'VARCHAR',
                'constraint'     => '8',
            ],
            'dni' => [
                'type'           => 'VARCHAR',
                'constraint'     => '8',
            ],
            
        ]);
        $this->forge->addKey('dni', true);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}

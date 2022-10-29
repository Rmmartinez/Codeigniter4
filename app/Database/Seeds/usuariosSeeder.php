<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class usuariosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'usuario'    => 'user',
            'contraseña'    => "1234",
            'dni'    => '123',
            'rol' => 'user'
        ];

        // Using Query Builder
        $this->db->table('usuarios')->insert($data);
    }
}
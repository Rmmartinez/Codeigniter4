<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class bancosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nombre'    => 'Santander',
            'sucursal'    => '12',
            'direccion'    => 'San Martín 1234',
        ];

        // Using Query Builder
        $this->db->table('bancos')->insert($data);
    }
}
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class clientesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'dni' => '40000000',
            'nombre'    => 'Juan',
            'apellido'    => 'Perez',
            'domicilio'    => 'casa 1, manzana A, barrio ABC',
            'fnac'    => '10/10/1998',
            'cuit_cuil'    => 'Cuil',
            'tel'    => '2664000000',
        ];
 
        // Using Query Builder
        $this->db->table('clientes')->insert($data);
    }
}
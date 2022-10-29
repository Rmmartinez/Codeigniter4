<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class cuentasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'numero' => '4585',
            'tipo'    => 'Caja de Ahorros',
            'moneda'    => 'Peso',
            'monto_actual'    => '21.874',
            'nombre_titular'    => 'Juan Perez',
            'dni_titular'    => '1234',
            'banco' => 'Patagonia',
            'fcreacion' => '12/11/2009'
        ];

        // Using Query Builder
        $this->db->table('cuentas')->insert($data);
    }
}
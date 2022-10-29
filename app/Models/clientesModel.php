<?php

namespace App\Models;

use CodeIgniter\Model;

class clientesModel extends Model
{
    public function getClientes()
    {
        $clientes = $this->db->query('SELECT * FROM clientes');
        return $clientes->getResult();
    }

    public function setClientes($datos){
        $clientes = $this->db->table('clientes');
        $clientes->insert($datos);
        return 1;
    }

    public function deleteClientes($data) {
        $clientes = $this->db->table('clientes');
        $clientes->where($data);
        return $clientes->delete();
    }

    public function updateClientes($data, $dni) {
        $clientes = $this->db->table('clientes');
        $clientes->set($data);
        $clientes->where('dni', $dni);
        return $clientes->update();
    }

    public function obtenerClientes($data) {
        $clientes = $this->db->table('clientes');
        $clientes->where($data);
        return $clientes->get()->getResultArray();
    }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class cuentasModel extends Model
{
    public function getCuentasTipo($tipo)
    {
        $cuentas = $this->db->query("SELECT * FROM cuentas WHERE tipo = '$tipo'");
        return $cuentas->getResult();
    }


    public function getCuentas()
    {
        $cuentas = $this->db->query('SELECT * FROM cuentas');
        return $cuentas->getResult();
    }


    public function getCuentasTitular($dni)
    {
        $cuentas = $this->db->table('cuentas');
        $cuentas->where($dni);
        return $cuentas->get()->getResultArray();
    }

    public function setCuentas($datos){
        $cuentas = $this->db->table('cuentas');
        $cuentas->insert($datos);
        return 1;
    }

    public function deleteCuentas($data) {
        $cuentas = $this->db->table('cuentas');
        $cuentas->where($data);
        return $cuentas->delete();
    }

    public function updateCuentas($data, $numero) {
        $cuentas = $this->db->table('cuentas');
        $cuentas->set($data);
        $cuentas->where('numero', $numero);
        return $cuentas->update();
    }

    public function obtenerCuentas($data) {
        /*$cuenta =  $this->db->table('cuentas');
        $cuenta->where('dni_titular',$data);
        return $cuenta->get()getResultArray();*/
        
        $cuentas = $this->db->query("SELECT * FROM cuentas WHERE dni_titular = '$data'");
        return $cuentas->getResult();

        //$cuentas = $this->db->table('cuentas');
        //$cuentas->where($data);
        //return $cuentas->get()->getResultArray();
    }

    public function obtenerCuentasAdmin($data) {
        /*$cuenta =  $this->db->table('cuentas');
        $cuenta->where('dni_titular',$data);
        return $cuenta->get()getResultArray();*/
        
        //$cuentas = $this->db->query("SELECT * FROM cuentas WHERE dni_titular = '$data'");
        //return $cuentas->getResult();

        $cuentas = $this->db->table('cuentas');
        $cuentas->where($data);
        return $cuentas->get()->getResultArray();
    }

    public function obtenerCuentasBanco($data) {
        /*$cuenta =  $this->db->table('cuentas');
        $cuenta->where('dni_titular',$data);
        return $cuenta->get()getResultArray();*/
        $cuentas = $this->db->query("SELECT * FROM cuentas WHERE banco = '$data'");
        return $cuentas->getResult();
    }
}
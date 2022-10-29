<?php

namespace App\Models;

use CodeIgniter\Model;

class bancosModel extends Model
{
    public function getBancos()
    {
        $bancos = $this->db->query('SELECT * FROM bancos');
        return $bancos->getResult();
    }

    public function setBancos($datos){
        $bancos = $this->db->table('bancos');
        $bancos->insert($datos);
        return 1;
    }

    public function getSucursales($nombre)
    {
        $sucursales = $this->db->query("SELECT * FROM bancos WHERE nombre = '$nombre'");
        return $sucursales->getResult();

        
    }

    public function deleteBancos($data,$data2) {
        $bancos = $this->db->table('bancos');
        $bancos->where('sucursal', $data);
        $bancos->where('nombre',$data2);
        return $bancos->delete();
    }

    public function updateBancos($data, $nombre, $sucursal) {
        $bancos = $this->db->table('bancos');
        $bancos->set($data);
        $bancos->where('nombre', $nombre);
        $bancos->where('sucursal',$sucursal);
        return $bancos->update();
    }


    public function obtenerTodo($nombre, $sucursal) {
        $banco = $this->db->query("SELECT * FROM bancos WHERE nombre = '$nombre' and sucursal ='$sucursal'");
        return $banco->getResultArray();
    }
    

}
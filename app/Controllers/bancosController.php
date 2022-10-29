<?php

namespace App\Controllers;

use App\Models\bancosModel;

class bancosController extends BaseController
{
    public function index()
    {
        $bancos = new bancosModel();
        $data = $bancos->getBancos();


        $data["datos"] = $data;
        return view('abmBancos',$data);
    }

    public function crearbanco(){
        $datos = [
            "nombre" => $_POST['nombre'],
            "sucursal" => $_POST['sucursal'],
            "direccion" => $_POST['direccion'],
        ];

        $banco = new bancosModel();
        $respuesta = $banco->setBancos($datos);

        if($respuesta == 1){
            return redirect()->to(base_url('bancos'));
        }else{
            return redirect()->to(base_url());
        }
    }

    public function eliminarbanco($nombre, $sucursal){
        $banco = new bancosModel();
		$data = ["sucursal" => $sucursal];
        $data2= ["nombre" => $nombre];

		$respuesta = $banco->deleteBancos($data,$data2);
        return redirect()->to(base_url('bancos'));
    }


    public function modificarbanco(){

        $datos = [
            "nombre" => $_POST['nombre'],
            "sucursal" => $_POST['sucursal'],
            "direccion" => $_POST['direccion']
        ];
        $nombre = $_POST['nombre'];
        $sucursal = $_POST['sucursal'];

        $banco = new bancosModel();

        $respuesta = $banco->updateBancos($datos, $nombre, $sucursal);
 
        return redirect()->to(base_url('bancos'));
    }

    public function obtenerBanco($nombre, $sucursal) {
		//$data = ["nombre" => $nombre,
                //"sucursal" => $sucursal];
		$banco = new bancosModel();
		$respuesta = $banco->obtenerTodo($nombre, $sucursal);

		$datos = ["datos" => $respuesta];
		return view('editarBancos', $datos);
	}

    public function obtenerTodos(){
        $bancos = new bancosModel();
        $data = $bancos->getBancos();


        $data["datos"] = $data;
        return view('listarBancos',$data);
    }

    public function obtenerSucursales($banco){
        $sucursales = new bancosModel();
        $data = $sucursales->getSucursales($banco);
        $data["datos"] = $data;
        return view('listarSucursales', $data);
    }
}

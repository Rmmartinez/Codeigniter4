<?php

namespace App\Controllers;

use App\Models\clientesModel;

class clientesController extends BaseController
{
    public function index()
    {
        $clientes = new clientesModel();
        $data = $clientes->getClientes();


        $data["data"] = $data;
        return view('abmClientes',$data);
    }

    public function crearcliente(){
        $datos = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "domicilio" => $_POST['domicilio'],
            "fnac" => $_POST['fnac'],
            "cuit_cuil" => $_POST['cuit_cuil'],
            "dni" => $_POST['dni'],
            "tel" => $_POST['tel']
        ];

        $cliente = new clientesModel();
        $respuesta = $cliente->setClientes($datos);

        if($respuesta == 1){
            return redirect()->to(base_url('clientes'));
        }else{
            return redirect()->to(base_url());
        }
    }

    public function eliminarcliente($dni){
        $cliente = new clientesModel();
		$data = ["dni" => $dni];

		$respuesta = $cliente->deleteClientes($data);
        return redirect()->to(base_url('clientes'));
    }

    public function obtenercliente($dni) {
		$data = ["dni" => $dni];
		$cliente = new clientesModel();
		$respuesta = $cliente->obtenerClientes($data);

		$datos = ["datos" => $respuesta];

		return view('editarClientes', $datos);
	}


    public function modificarcliente(){
		$datos = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "domicilio" => $_POST['domicilio'],
            "fnac" => $_POST['fnac'],
            "cuit_cuil" => $_POST['cuit_cuil'],
            "dni" => $_POST['dni'],
            "tel" => $_POST['tel']
				];
		$dni = $_POST['dni'];

		$clientes = new clientesModel();

		$respuesta = $clientes->updateClientes($datos, $dni);

		return redirect()->to(base_url('clientes'));
	}

}

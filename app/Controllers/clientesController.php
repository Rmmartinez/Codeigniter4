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

        $datosUser = [
            "usuario" => $_POST['dni'],
            "contraseña" => $_POST['dni'],
            "dni" => $_POST['dni'],
            "rol" => 'user'
        ];

        $cliente = new clientesModel();
        $clientes = new clientesModel();
        $buscoCuenta = $clientes->getClienteDNI(['dni' => $datos["dni"]]);
    
        if ( count($buscoCuenta) >0){
            echo'<script>alert("El cliente ya existe."); 
            window.location.href="/sociedadbancaria/clientes";
            </script>';
            
        }else{ 
            $cliente->setUser($datosUser);
            $cliente->setClientes($datos);
            echo'<script>alert("Cliente cargado exitosamente.")
            window.location.href="/sociedadbancaria/clientes";
            </script>';
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
        echo'<script>alert("Modificación exitosa."); 
            window.location.href="/sociedadbancaria/clientes";
            </script>';
	}

}

<?php

namespace App\Controllers;

use App\Models\cuentasModel;
use App\Models\clientesModel;


class cuentasController extends BaseController
{
    public function index()
    {
        $cuentas = new cuentasModel();
        $data = $cuentas->getCuentas();

        
        $data["datos"] = $data;
        return view('abmCuentas',$data);
    }

    public function crearcuenta(){
        $datos = [
            "numero" => $_POST['numero'],
            "tipo" => $_POST['tipo'],
            "moneda" => $_POST['moneda'],
            "monto_actual" => $_POST['monto_actual'],
            "nombre_titular" => $_POST['nombre_titular'],
            "dni_titular" => $_POST['dni_titular'],
            "fcreacion" => $_POST['fcreacion'],
            "banco" => $_POST['banco']
        ];

        $cuenta = new cuentasModel();
        $clientes = new clientesModel();
        $buscoCuenta = $clientes->getClienteDNI(['dni' => $datos["dni_titular"]]);
        $buscoNumero = $cuenta->getCuentaNum(['numero' => $datos["numero"]]);
    
        if ( count($buscoCuenta) == 0 || count($buscoNumero) > 0){
            echo'<script>alert("Cliente inexistente, o número de cuenta repetida."); 
            window.location.href="/sociedadbancaria/cuentas";
            </script>';
            
        }else{ 
            $cuenta->setCuentas($datos);
            echo'<script>alert("Cuenta cargada exitosamente.")
            window.location.href="/sociedadbancaria/cuentas";
            </script>';
        }
    }

    public function eliminarcuenta($numero){
        $cuenta = new cuentasModel();
		$data = ["numero" => $numero];

		$respuesta = $cuenta->deleteCuentas($data);
        return redirect()->to(base_url('cuentas'));
    }

    public function obtenercuenta($numero) {
		$data = ["numero" => $numero];
		$cuenta = new cuentasModel();
		$respuesta = $cuenta->obtenerCuentasAdmin($data);

		$data = ["datos" => $respuesta];

		return view('editarCuentas', $data);
	}

    public function modificarcuenta(){
		$datos = [
            "numero" => $_POST['numero'],
            "tipo" => $_POST['tipo'],
            "moneda" => $_POST['moneda'],
            "monto_actual" => $_POST['monto_actual'],
            "nombre_titular" => $_POST['nombre_titular'],
            "dni_titular" => $_POST['dni_titular'],
            "fcreacion" => $_POST['fcreacion'],
            "banco" => $_POST['banco']
				];
		$numero = $_POST['numero'];

		$cuenta = new cuentasModel();

		$respuesta = $cuenta->updateCuentas($datos, $numero);

        echo'<script>alert("Modificación exitosa."); 
            window.location.href="/sociedadbancaria/cuentas";
            </script>';
	}

    public function obtenercuentaTodo($data){
        $cuentas = new cuentasModel();
        $data = $cuentas->obtenerCuentas($data);
        $data["datos"] = $data;
        return view('misCuentas', $data);
    }

    public function obtenercuentaTipo(){
        $data = $_POST['tipo'];
        $cuentas = new cuentasModel();
        $data = $cuentas->getCuentasTipo($data);
        $data["datos"] = $data;
        return view('cuentasTipo', $data);
    }

    public function obtenercuentaBanco($data){
        $cuentas = new cuentasModel();
        $data = $cuentas->obtenerCuentasBanco($data);
        $data["datos"] = $data;
        return view('cuentas', $data);
    }

    public function cuentascliente($data){
        $cuentas = new cuentasModel();
        $data = $cuentas->obtenerCuentas($data);
        $data["datos"] = $data;
        return view('cuentas', $data);
    }
}

        

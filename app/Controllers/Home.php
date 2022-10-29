<?php

namespace App\Controllers;

use App\Models\usuariosModel;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        return view('welcome_message',["mensaje" => $mensaje]);
    }

    public function inicio(){
        return view('inicio');
    }
	public function inicioUser(){
        return view('inicioUser');
    }

    public function login(){
        $usuario = $this->request->getPost('usuario');
		$contraseña = $this->request->getPost('contraseña');
		$Usuario = new usuariosModel();

		$datosUsuario = $Usuario->getUsuario(['usuario' => $usuario]);

		if (count($datosUsuario) > 0 && ($contraseña == $datosUsuario[0]['contraseña'])) {

			$data = [
						"usuario" => $datosUsuario[0]['usuario'],
						"rol" => $datosUsuario[0]['rol'],
                        "dni" => $datosUsuario[0]['dni'],
					];

			
			$session = session();
			$session->set($data);
			if($datosUsuario[0]['rol'] == 'admin'){
				return redirect()->to('/inicio')->with('mensaje','1');
			}else{
				return redirect()->to('/inicioUser')->with('mensaje','1');
			}
            

		} else {
            //echo "1";
			return redirect()->to(base_url())->with('mensaje','0');
		}

    }

    public function salir() {
		$session = session();
		$session->destroy();
		return redirect()->to(base_url());
	}


}

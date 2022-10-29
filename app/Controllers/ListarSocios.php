<?php

namespace App\Controllers;

use App\Models\infantilesModel;
use App\Models\juvenilesModel;
use App\Models\mayoresModel;
use App\Models\veteranosModel;

class ListarSocios extends BaseController
{
    public function index()
    {
        $infantiles = new infantilesModel();
        $datosI = $infantiles->getInfantiles();
        $juveniles = new juvenilesModel();
        $datosJ = $juveniles->getJuveniles();
        $mayores = new mayoresModel();
        $datosM = $mayores->getMayores();
        $veteranos = new veteranosModel();
        $datosV = $veteranos->getVeteranos();

        $data["datosI"] = $datosI;
        $data["datosJ"] = $datosJ; 
        $data["datosM"] = $datosM; 
        $data["datosV"] = $datosV; 


        return view('listar', $data);
    }

    public function creari(){

        $datos = [
            "nombre" => $_POST['nombreI'],
            "apellido" => $_POST['apellidoI'],
            "dni" => $_POST['dniI'],
            "fnac" => $_POST['fnacI'],
            "domicilio" => $_POST['domicilioI'],
            "nombre_tutor" => $_POST['nombreTutor'],
            "apellido_tutor" => $_POST['apellidoTutor'],
            "dni_tutor" => $_POST['dniTutor'],
            "tel_tutor" => $_POST['telTutor']
        ];

        $infantiles = new infantilesModel();
        $respuesta = $infantiles->setInfantiles($datos);

        if($respuesta == 1){
            return redirect()->to(base_url());
        }else{
            return redirect()->to(base_url());
        }
    }
    public function crearj(){
        $datos = [
            "nombre" => $_POST['nombreJ'],
            "apellido" => $_POST['apellidoJ'],
            "dni" => $_POST['dniJ'],
            "fnac" => $_POST['fnacJ'],
            "domicilio" => $_POST['domicilioJ']
        ];

        $juveniles = new juvenilesModel();
        $respuesta = $juveniles->setJuveniles($datos);

        if($respuesta == 1){
            return redirect()->to(base_url());
        }else{
            return redirect()->to(base_url());
        }
    }
    public function crearm(){
        $datos = [
            "nombre" => $_POST['nombreM'],
            "apellido" => $_POST['apellidoM'],
            "dni" => $_POST['dniM'],
            "fnac" => $_POST['fnacM'],
            "domicilio" => $_POST['domicilioM']
        ];

        $mayores = new mayoresModel();
        $respuesta = $mayores->setMayores($datos);

        if($respuesta == 1){
            return redirect()->to(base_url());
        }else{
            return redirect()->to(base_url());
        }
    }

    public function crearv(){
        $datos = [
            "nombre" => $_POST['nombreV'],
            "apellido" => $_POST['apellidoV'],
            "dni" => $_POST['dniV'],
            "fnac" => $_POST['fnacV'],
            "domicilio" => $_POST['domicilioV'],
            "enfermedades" => $_POST['enfermedades']
        ];

        $veteranos = new veteranosModel();
        $respuesta = $veteranos->setVeteranos($datos);

        if($respuesta == 1){
            return redirect()->to(base_url());
        }else{
            return redirect()->to(base_url());
        }
    }

}

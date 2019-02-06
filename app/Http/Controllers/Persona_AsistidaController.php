<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ Persona_Asistida;

class Persona_AsistidaController extends Controller
{

    public function agregar(Request $form){


    $reglas=["nombre_persona_asistida"=>"",
    "vinculo_persona_asistida"=>"",
    "otro_vinculo_persona_asistida_cual"=>"",
    "telefono_persona_asistida"=>"",
    "domicilio_persona_asistida"=>"",
    "localidad_persona_asistida"=>"",
    "localidad_persona_asistida"=>""];

    $mensajes=["string"=>"El campo debe ser un texto","integer"=>"El campo debe ser un número entero"];

    $this->validate($form,$reglas,$mensajes);

    $persona_asistida= new Persona_Asistida( );

    $persona_asistida->nombre_persona_asistida= $form [ "nombre_persona_asistida"];
    $persona_asistida->vinculo_persona_asistida= $form [ "vinculo_persona_asistida"];
    $persona_asistida->cual_otro_vinculo_persona_asistida= $form [ "cual_otro_vinculo_persona_asistida"];
    $persona_asistida->telefono_persona_asistida= $form [ "telefono_persona_asistida"];
    $persona_asistida->domicilio_persona_asistida= $form [ "domicilio_persona_asistida"];
    $persona_asistida->localidad_persona_asistida= $form [ "localidad_persona_asistida"];

    $persona_asistida->save( );

    return redirect ("victima");
}
}

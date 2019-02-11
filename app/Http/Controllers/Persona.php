<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ Persona;

class Persona extends Controller
{

    public function agregar(Request $form){

/*
    $reglas=["nombre_persona_asistida"=>"",
    "vinculo_persona_asistida"=>"",
    "otro_vinculo_persona_asistida_cual"=>"",
    "telefono_persona_asistida"=>"",
    "domicilio_persona_asistida"=>"",
    "localidad_persona_asistida"=>"",
    "localidad_persona_asistida"=>""];

    $mensajes=["string"=>"El campo debe ser un texto","integer"=>"El campo debe ser un número entero"];

    $this->validate($form,$reglas,$mensajes);
*/
    $persona_asistida= new Persona( );

    $persona->nombre_persona_asistida= $form [ "nombre_persona_asistida"];
    $persona->vinculo_persona_asistida= $form [ "vinculo_persona_asistida"];
    $persona->cual_otro_vinculo_persona_asistida= $form [ "cual_otro_vinculo_persona_asistida"];
    $persona->telefono_persona_asistida= $form [ "telefono_persona_asistida"];
    $persona->domicilio_persona_asistida= $form [ "domicilio_persona_asistida"];
    $persona->localidad_persona_asistida= $form [ "localidad_persona_asistida"];
    $persona->idCaso= $form [ "idCaso"];


    $persona->save( );

    return redirect ("victima");
}
}

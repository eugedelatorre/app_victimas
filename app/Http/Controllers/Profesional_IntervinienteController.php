<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ Profesional_Interviniente;

class Profesional_Interviniente extends Controller
{

public function agregar(Request $form){

  $reglas=["nombre_profesional_interviniente"=>"string",
  "desde_profesional_interviniente"=>"date",
  "actual_profesional_interviniente"=>"date",
  "hasta_profesional_interviniente"=>"date"];

  $mensajes=["string"=>"El campo debe ser un texto","date"=>"El campo debe ser una fecha"];

  $this->validate($form,$reglas,$mensajes);

  $profesional_interviniente= new Profesional_Interviniente( );

  $profesional_interviniente->nombre_profesional_interviniente= $form ["nombre_profesional_interviniente"];
  $profesional_interviniente->desde_profesional_interviniente= $form ["desde_profesional_interviniente"];
  $profesional_interviniente->actual_profesional_interviniente= $form ["actual_profesional_interviniente"];
  $profesional_interviniente->hasta_profesional_interviniente= $form ["hasta_profesional_interviniente"];

  $profesional_interviniente->save( );

  return redirect ("victima");
}
}

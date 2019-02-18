<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profesional;

class ProfesionalController extends Controller
{
public function agregar(Request $form){



  $reglas = ["nombre_profesional_interviniente"=>"required|string","desde_profesional_interviniente"=>"required",
  "actual_profesional_interviniente"=>"required",
  "hasta_profesional_interviniente"=>"required"];

  $mensajes=["string"=>"El campo :attribute debe ser un texto","integer"=>"El campo :attribute debe ser un número entero",
  "date"=>"El campo :attribute debe ser una fecha","unique"=>"El campo :attribute está repetido",
  "required"=>"Complete el campo :attribute"];$this->validate($form,$reglas,$mensajes);

$profesional= new Profesional( );


$profesional->nombre_profesional_interviniente= $form [ "nombre_profesional_interviniente"];
$profesional->desde_profesional_interviniente= $form [ "desde_profesional_interviniente"];
$profesional->actual_profesional_interviniente= $form [ "actual_profesional_interviniente"];
$profesional->hasta_profesional_interviniente= $form [ "hasta_profesional_interviniente"];
$profesional->idCaso= $form [ "idCaso"];


$profesional->save( );
return redirect ("agregarProfesional");
}
public function detalle($id) {

    $profesional = Profesional::find($id);


    $vac = compact("profesional");

    return view("detalleProfesional", $vac);
  }

  public function eliminar($id) {
    $profesional = Profesional::find($id);
    $profesional->delete();
      return redirect("agregarProfesional");

  }

}

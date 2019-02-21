<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profesional;

use Validator;

class ProfesionalController extends Controller
{
public function agregar(Request $form){

  $reglas = [
    "nombre_profesional_interviniente"=>"required|string",
    "desde_profesional_interviniente"=>"required",
    "actual_profesional_interviniente"=>"required"
  ];

  $validator = Validator::make($form->all(), $reglas);

  $validator->sometimes('hasta_profesional_interviniente', 'required|after:desde_profesional_interviniente', function ($input) {
    return $input->actual_profesional_interviniente == 2;
  });

  if ($validator->fails()) {
      return back()
                  ->withErrors($validator)
                  ->withInput();
  }

  $profesional= new Profesional( );

  $profesional->nombre_profesional_interviniente= $form [ "nombre_profesional_interviniente"];
  $profesional->desde_profesional_interviniente= $form [ "desde_profesional_interviniente"];
  $profesional->actual_profesional_interviniente= $form [ "actual_profesional_interviniente"];
  $profesional->hasta_profesional_interviniente= $form [ "hasta_profesional_interviniente"];
  $profesional->idCaso= session("idCaso");

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

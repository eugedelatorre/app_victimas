<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Persona;

class PersonaController extends Controller
{
public function agregar(Request $form){


$reglas = ["nombre_persona_asistida"=>"required|string","vinculo_persona_asistida"=>"required","telefono_persona_asistida"=>"required|integer",
"domicilio_persona_asistida"=>"required|string","localidad_persona_asistida"=>"required|string"];

$mensajes=["string"=>"El campo :attribute debe ser un texto","integer"=>"El campo :attribute debe ser un número entero",
"date"=>"El campo :attribute debe ser una fecha","unique"=>"El campo :attribute está repetido","required"=>"Complete el campo :attribute "];


$this->validate($form,$reglas,$mensajes);

$persona= new Persona();

$persona->nombre_persona_asistida= $form ["nombre_persona_asistida"];
$persona->vinculo_persona_asistida= $form ["vinculo_persona_asistida"];
$persona->otro_vinculo_persona_asistida_cual= $form ["otro_vinculo_persona_asistida_cual"];
$persona->telefono_persona_asistida= $form ["telefono_persona_asistida"];
$persona->domicilio_persona_asistida= $form ["domicilio_persona_asistida"];
$persona->localidad_persona_asistida= $form ["localidad_persona_asistida"];
$persona->idCaso= session("idCaso");


$persona->save();

return redirect ("agregarPersona");
}


public function detalle($id) {

    $persona = Persona::find($id);


    $vac = compact("persona");

    return view("detallePersona", $vac);
  }

  public function eliminar($id) {
    $persona = Persona::find($id);
    $persona->delete();
      return redirect("agregarPersona");

  }

  public function editar(Request $form) {
      $persona = Persona::find($form["idPersona"]);

      $persona->nombre_persona_asistida= $form ["nombre_persona_asistida"];
      $persona->vinculo_persona_asistida= $form ["vinculo_persona_asistida"];
      $persona->otro_vinculo_persona_asistida_cual= $form ["otro_vinculo_persona_asistida_cual"];
      $persona->telefono_persona_asistida= $form ["telefono_persona_asistida"];
      $persona->domicilio_persona_asistida= $form ["domicilio_persona_asistida"];
      $persona->localidad_persona_asistida= $form ["localidad_persona_asistida"];
      $persona->idCaso= $form ["idCaso"];


     $persona->save();
      return redirect("home");}


}

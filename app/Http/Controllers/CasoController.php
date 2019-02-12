<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Caso;
use App\Delito;
//use App\Cavaj;
//use App\Cavaj;

class CasoController extends Controller
{



  public function agregar(Request $form){

/*


$reglas = [
<<<<<<< HEAD
  "nombre_referencia"=>"required|string|unique:Casos,nombre_referencia","delitos"=>"required", "descripcion_caso"=>"required|string",
  "fecha_ingreso"=>"required","modalidad_ingreso"=>"required","cavaj"=>"required","fiscalia_juzgado"=>"required|string",  "causa_id_judicial"=>"required|integer" ,"comisaria"=>"string|required","denuncias_previas"=>"required",
  "departamento_judicial"=>"required",  "estado"=>"required", "nombre_y_apellido_de_la_victima"=>"required|string","persona_asistida"=>"required"];/*
  "cual_otro_organismo"=>"requi",




"nombre_y_apellido_de_la_victima"=>"required1string",

=======
  "nombre_referencia"=>"string|unique:Casos,nombre_referencia",
    "descripcion_caso"=>"string",
  "fecha_ingreso"=>"date",
  "modalidad_ingreso"=>"integer",
  "organismos"=>"",
  "cual_otro_organismo"=>"requi",
  "fiscalia_juzgado"=>"string",
  "causa_id_judicial"=>"integer",
  "comisaria"=>"string",
  "denuncias_previas"=>"integer",
  "departamento_judicial"=>"integer ",
  "estado"=>"integer",
>>>>>>> 7d1ed7c695470c431055bcae88ee9c2d1e5ee997
  "motivospasivos"=>"",
  "cual_motivospasivos"=>"string",,
  "organismos"=>"required"
];*/

$mensajes=["string"=>"El campo :attribute debe ser un texto","integer"=>"El campo :attribute debe ser un número entero",
"date"=>"El campo :attribute debe ser una fecha","unique"=>"El campo :attribute está repetido","required"=>"Complete el campo :attribute "];

$this->validate($form,$reglas,$mensajes);

$caso= new Caso();

$caso->nombre_referencia= $form["nombre_referencia"];
$caso->descripcion_caso= $form["descripcion_caso"];
$caso->fecha_ingreso= $form["fecha_ingreso"];
$caso->modalidad_ingreso= $form["modalidad_ingreso"];
$caso->organismos= $form["organismos"];
$caso->cual_otro_organismo= $form["cual_otro_organismo"];
$caso->fiscalia_juzgado= $form["fiscalia_juzgado"];
$caso->causa_id_judicial= $form["causa_id_judicial"];
$caso->comisaria= $form["comisaria"];
$caso->denuncias_previas= $form["denuncias_previas"];
$caso->departamento_judicial= $form["departamento_judicial"];
$caso->estado= $form["estado"];
$caso->nombre_y_apellido_de_la_victima=$form["nombre_y_apellido_de_la_victima"];
$caso->motivospasivos= $form["motivospasivos"];
$caso->cual_otro_motivospasivo= $form["cual_otro_motivospasivos"];

$caso->save();

$idCaso = $caso->id;
$_SESSION["idCaso"] = $idCaso;

if ($form["persona_asistida"] == 1) {
  return view("agregarPersona");
} else {
  return view("agregarProfesional");
}

// idCaso y su data
// return view("agregarPersona")


// foreach ($form["delitos"] as $delito) {
//   $caso->delitos()->attach($delito);

  // $caratula = new Caratula();
  // $caratula->idDelito = $delito;
  // $caratula->idCaso = $caso->id;

  //$caratula->save();
// }

// foreach ($form["cavaj"] as $cavaj) {
//   $caso->cavajs()->attach($cavaj);

  // $caratula = new Caratula();
  // $caratula->idDelito = $delito;
  // $caratula->idCaso = $caso->id;


  //$caratula->save();
// }


// foreach ($form["delitos"] as $delito) {
//   $caso->delitos()->attach($delito);
//
//   // $caratula = new Caratula();
//   // $caratula->idDelito = $delito;
//   // $caratula->idCaso = $caso->id;
//
//   //$caratula->save();
// }

/*foreach ($form["cavajs"] as $cavaj) {
  $caso->cavajs()->attach($cavaj);

  // $caratula = new Caratula();
  // $caratula->idDelito = $delito;
  // $caratula->idCaso = $caso->id;

  //$caratula->save();
}

*/

// return redirect ("agregarPersona");
// return redirect ("agregarCaso");



}

}

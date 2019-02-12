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




//$reglas = [
//];


/*$mensajes=["string"=>"El campo :attribute debe ser un texto","integer"=>"El campo :attribute debe ser un número entero",
"date"=>"El campo :attribute debe ser una fecha","unique"=>"El campo :attribute está repetido","required"=>"Complete el campo :attribute "];*/

//$this->validate($form,$reglas,$mensajes);

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
session_start();
$_SESSION["idCaso"] = $idCaso;

/*if ($form["persona_asistida"] == 1) {
  return view("agregarPersona");
} else {
  return view("agregarProfesional");
}

// idCaso y su data
// return view("agregarPersona")


*/
 foreach ($form["delitos"] as $delito) {

  $caso->delitos()->attach($delito);}

  // $caratula = new Caratula();
  // $caratula->idDelito = $delito;
  // $caratula->idCaso = $caso->id;

  //$caratula->save();
// }

 foreach ($form["cavaj"] as $cavaj) {
$caso->cavajs()->attach($cavaj);}



return redirect ("agregarPersona");



}

}

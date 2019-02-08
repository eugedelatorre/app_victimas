<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Caso;
use App\Delito;
//use App\Cavaj;

class CasoController extends Controller
{
public function agregar(Request $form){

/*

$reglas = [
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
  "motivospasivos"=>"",
  "cual_motivospasivos"=>"string"
];

$mensajes=["string"=>"El campo :attribute debe ser un texto","integer"=>"El campo :attribute debe ser un número entero",
"date"=>"El campo :attribute debe ser una fecha","unique"=>"El campo :attribute está repetido"];

$this->validate($form,$reglas,$mensajes);*/

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
$caso->motivospasivos= $form["motivospasivos"];
$caso->cual_otro_motivospasivo= $form["cual_otro_motivospasivos"];



$caso->save( );






foreach ($form["delitos"] as $delito) {
  $caso->delitos()->attach($delito);

  // $caratula = new Caratula();
  // $caratula->idDelito = $delito;
  // $caratula->idCaso = $caso->id;

  //$caratula->save();
}

/*foreach ($form["cavajs"] as $cavaj) {
  $caso->cavajs()->attach($cavaj);

  // $caratula = new Caratula();
  // $caratula->idDelito = $delito;
  // $caratula->idCaso = $caso->id;

  //$caratula->save();
}

*/
return redirect ("agregarCaso");


}
}

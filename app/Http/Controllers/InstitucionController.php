<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Institucion;

class InstitucionController extends Controller
{
public function agregar(Request $form){


$reglas = [
  "nombre_referencia"=>"string|unique:instituciones,nombre_referencia",
  "delitos"=>"",
  "descripcion_caso"=>"string",
  "fecha_ingreso"=>"date",
  "modalidad_ingreso"=>"integer",
  "organismos"=>"",
  "cual_otro_organismo"=>"",
  "cavaj"=>"",
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

$this->validate($form,$reglas,$mensajes);

$institucion= new Institucion();

$institucion->nombre_referencia= $form["nombre_referencia"];
$institucion->delitos = json_encode($form["delitos"]);
$institucion->descripcion_caso= $form["descripcion_caso"];
$institucion->fecha_ingreso= $form["fecha_ingreso"];
$institucion->modalidad_ingreso= $form["modalidad_ingreso"];
$institucion->organismos= $form["organismos"];
$institucion->cual_otro_organismo= $form["cual_otro_organismo"];
$institucion->cavaj= json_encode($form["cavaj"]);
$institucion->fiscalia_juzgado= $form["fiscalia_juzgado"];
$institucion->causa_id_judicial= $form["causa_id_judicial"];
$institucion->comisaria= $form["comisaria"];
$institucion->denuncias_previas= $form["denuncias_previas"];
$institucion->departamento_judicial= $form["departamento_judicial"];
$institucion->estado= $form["estado"];
$institucion->motivospasivos= $form["motivospasivos"];
$institucion->cual_otro_motivospasivo= $form["cual_otro_motivospasivos"];



$institucion->save( );

$guardarCavaj=$institucion->cavaj()->attach($form["cavaj"]);
$vac=compact($guardarCavaj);
return redirect ("agregarinstitucion",$vac);


}
}

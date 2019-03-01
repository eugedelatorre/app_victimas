<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Institucion;
use App\Socioeconomico;
use App\Oprevio;
use App\Oarticula;
class InstitucionController extends Controller
{
 public function agregar(Request $form){


/*$reglas = [
"organismos_intervinieron"=>"required|string",
"asistencia_juridica"=>"required|integer",
"asistencia_psicologica"=>"required",
"asistencia_socioeconomica"=>"required|integer",
"socioeconomica_otro"=>"required|integer",
"organismos_actual_otro"=>"required|integer",
"pratocinio_gratuito"=>"required|integer",
"letrado_designado"=>"required|srting",
"pratocinio_conformidad"=>"required|integer",
"colegio_departamental"=>"required|integer",
"fecha_designacion"=>"required|string",
"abogado_particular"=>"required|integer",
"idCaso"=>"required|integer",





mensajes=["string"=>"El campo :attribute debe ser un texto","integer"=>"El campo :attribute debe ser un número entero",
date=>"El campo :attribute debe ser una fecha","unique"=>"El campo :attribute está repetido","required"=>"Complete el campo :attribute "];

$this->validate($form,$reglas,$mensajes);*/

$institucion= new Institucion();

$institucion->organismos_intervinieron= $form ["organismos_intervinieron"];
$institucion->asistencia_juridica= $form ["asistencia_juridica"];
$institucion->asistencia_psicologica= $form ["asistencia_psicologica"];
$institucion->asistencia_socioeconomica= $form ["asistencia_socioeconomica"];
$institucion->socioeconomica_otro= $form ["socioeconomica_otro"];
$institucion->organismos_actual_otro= $form ["organismos_actual_otro"];
$institucion->pratocinio_gratuito= $form ["pratocinio_gratuito"];
$institucion->fecha_designacion= $form ["fecha_designacion"];
$institucion->colegio_departamental= $form ["colegio_departamental"];
$institucion->abogado_particular= $form ["abogado_particular"];
$institucion->idCaso= session("idCaso");

$institucion->save();

foreach ($form["oprevios"] as $oprevio) {

 $institucion->oprevios()->attach($oprevio);}

 foreach ($form["oarticulas"] as $oarticula) {

  $institucion->oarticulas()->attach($oarticula);}


  foreach ($form["socioeconomicos"] as $socioeconomico) {

   $institucion->socioeconomicos()->attach($socioeconomico);}


return redirect ("agregarOrganismo");

}
public function detalle($id) {
  $socioeconomicos = Socioeconomico::all();
  $oprevios = Oprevio::all();
  $oarticulas = Oarticula::all();
  $institucion = Institucion::find($id);
  $vac = compact("institucion","socioeconomicos","oprevios","oarticulas");
  return view("detalleOrganismo", $vac);
  }

  public function eliminar($id) {
    $institucion = Institucion::find($id);
    $institucion->delete();
      return redirect("paneldecontrol");

  }

  public function editar(Request $form) {

      $institucion = Institucion::find($form["idOrganismo"]);
      $institucion->organismos_intervinieron= $form ["organismos_intervinieron"];
      $institucion->asistencia_juridica= $form ["asistencia_juridica"];
      $institucion->asistencia_psicologica= $form ["asistencia_psicologica"];
      $institucion->asistencia_socioeconomica= $form ["asistencia_socioeconomica"];
      $institucion->socioeconomica_otro= $form ["socioeconomica_otro"];
      $institucion->organismos_actual_otro= $form ["organismos_actual_otro"];
      $institucion->pratocinio_gratuito= $form ["pratocinio_gratuito"];
      $institucion->fecha_designacion= $form ["fecha_designacion"];
      $institucion->colegio_departamental= $form ["colegio_departamental"];
      $institucion->abogado_particular= $form ["abogado_particular"];

      $institucion->idCaso= $form["idCaso"];


     $institucion->save();
      return redirect("home");}


}

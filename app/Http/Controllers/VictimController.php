<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Victim;
use App\Necesidad;
use App\Programa;
use App\Limitacion;
use App\Discapacidad;

class VictimController extends Controller
{



  public function agregar(Request $form){

   $reglas = [
    "victima_nombre_y_apellido"=>"required|string",
    "genero"=>"required|integer",
    "victima_fecha_nacimiento"=>"required",
    "victima_edad"=>"required",
    "franjaetaria"=>"required|integer",
    "tienedoc"=>"required|integer",
    "tipodocumento"=>"required|integer",
    "tipo_documento_otro"=>"required|string",
    "residenciaprecaria"=>"required|integer",
    "victima_numero_documento"=>"required|integer",
    "victima_tipo_documento_otro"=>"required|string",
    "niveleducativo"=>"required|integer",
    "condiciones_de_trabajo"=>"required|integer",
    "necesidades_socioeconomicas_insatisfechas"=>"required|integer",
    "necesidades_socioeconomicas_insatisfechas_otro"=>"required|string",
    "programa_subsidio"=>"required|integer",
    "programa_subsidio_otro"=>"required|string",
    "embarazorelevamiento"=>"required|integer",
    "tienelesion"=>"required|integer",
    "tipo_lesion"=>"required|string",
    "enfermedadcronica"=>"required|integer",
    "tipo_enfermedad_cronica"=>"required|string",
    "limitacion_otro"=>"required|string"];



    $this->validate($form,$reglas);

    $victim= new Victim( );

    $victim->victima_nombre_y_apellido= $form ["victima_nombre_y_apellido"];
    $victim->genero= $form ["genero"];
    $victim->victima_fecha_nacimiento= $form ["victima_fecha_nacimiento"];
    $victim->victima_edad= $form ["victima_edad"];
    $victim->franjaetaria= $form ["franjaetaria"];
    $victim->tienedoc= $form ["tienedoc"];
    $victim->tipodocumento= $form ["tipodocumento"];
    $victim->tipo_documento_otro= $form ["victima_tipo_documento_otro"];
    $victim->residenciaprecaria= $form ["residenciaprecaria"];
    $victim->victima_numero_documento= $form ["victima_numero_documento"];
    $victim->victima_tipo_documento_otro= $form ["victima_tipo_documento_otro"];
    $victim->niveleducativo= $form ["niveleducativo"];
    $victim->condiciones_de_trabajo= $form ["condiciones_de_trabajo"];
    $victim->necesidades_socioeconomicas_insatisfechas= $form ["necesidades_socioeconomicas_insatisfechas"];
    $victim->necesidades_socioeconomicas_insatisfechas_otro= $form ["necesidades_socioeconomicas_insatisfechas_otro"];
    $victim->programa_subsidio= $form ["programa_subsidio"];
    $victim->programa_subsidio_otro= $form ["programa_subsidio_otro"];
    $victim->embarazorelevamiento= $form ["embarazorelevamiento"];
    $victim->tienelesion= $form ["tienelesion"];
    $victim->tipo_lesion= $form ["tipo_lesion"];
    $victim->enfermedadcronica= $form ["enfermedadcronica"];
    $victim->tipo_enfermedad_cronica= $form ["tipo_enfermedad_cronica"];
    $victim->limitacion_otro= $form ["limitacion_otro"];
    $victim->idCaso= $form ["idCaso"];


    $victim->save();



  /*foreach ($form["necesidades"] as $necesidad) {

  $victim->necesidades()->attach($necesidad);}

  foreach ($form["programas"] as $programa) {

  $victim->programas()->attach($programa);}


  foreach ($form["discapacidades"] as $discapacidad) {

  $victim->discapacidades()->attach($discapacidad);}



  foreach ($form["limitaciones"] as $limitacion) {

  $victim->limitaciones()->attach($limitacion);}
    //NO ESTÁ ENVIANDO EL ARRAY PROGRAMS[] POR EL FORM, PORQUE????*/

    foreach ($form["necesidades"] as $necesidad) {
    $victim->necesidades()->attach($necesidad);}

    foreach ($form["programas"] as $programa) {
    $victim->programas()->attach($programa);}

    foreach ($form["discapacidades"] as $discapacidad) {
    $victim->discapacidades()->attach($discapacidad);}

    foreach ($form["limitaciones"] as $limitacion) {
    $victim->limitaciones()->attach($limitacion);}

  return redirect ("agregarVictima");

    }

    public function detalle($id) {

        $victima = Victim::find($id);


        $vac = compact("victima");

        return view("detalleVictima", $vac);
      }

      public function eliminar($id) {
        $victima = Victim::find($id);
        $victima->delete();
          return redirect("agregarVictima");

      }














    }

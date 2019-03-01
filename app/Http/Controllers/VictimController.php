<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Victim;
use App\Necesidad;
use App\Programa;
use App\Limitacion;
use App\Discapacidad;
use App\Victima_necesidad;
use Validator;

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

    "niveleducativo"=>"required|integer",
    "condiciones_de_trabajo"=>"required|integer",
    "necesidades_socioeconomicas_insatisfechas"=>"required",
    "programa_subsidio"=>"required|integer",

    "embarazorelevamiento"=>"required|integer",
    "tiene_discapacidad"=>"required",
    "tienelesion"=>"required|integer",
    "enfermedadcronica"=>"required|integer",
    "tiene_limitacion"=>"required"
  ];


  $validator = Validator::make($form->all(), $reglas);

  $validator->sometimes('tipodocumento', 'required', function ($input) {
    return $input->tipodocumento == 1;
   });

   $validator->sometimes('victima_numero_documento', 'required', function ($input) {
     return $input->tipodocumento == 1;
    });

   $validator->sometimes('tipodocumento', 'required', function ($input) {
     return $input->tipodocumento == 3;
    });

    $validator->sometimes('victima_numero_documento', 'required', function ($input) {
      return $input->tipodocumento == 3;
     });

     $validator->sometimes('tipo_documento_otro', 'required', function ($input) {
       return $input->tipodocumento == 9;
      });

   $validator->sometimes('residenciaprecaria', 'required', function ($input) {
     return $input->tipodocumento == 6;
    });
   $validator->sometimes('necesidades', 'required', function ($input) {
     return $input->necesidades_socioeconomicas_insatisfechas == 1;
   });
  $validator->sometimes('programas', 'required', function ($input) {
      return $input->programa_subsidio == 1;
   });

   $validator->sometimes('discapacidades', 'required', function ($input) {
       return $input->tiene_discapacidad == 1;
    });

    $validator->sometimes('tipo_lesion', 'required|string', function ($input) {
     return $input->tienelesion == 1;
   });
    $validator->sometimes('tipo_enfermedad_cronica', 'required|string', function ($input) {
     return $input->enfermedadcronica == 1;
    });

    $validator->sometimes('limitaciones', 'required', function ($input) {
     return $input->tiene_limitacion == 1;
    });

    $validator->sometimes('necesidades_socioeconomicas_insatisfechas_otro', 'required', function ($input) {
    return is_array($input->necesidades) && in_array(8,$input->necesidades);
    });

    $validator->sometimes('programa_subsidio_otro', 'required', function ($input) {
    return is_array($input->programas) && in_array(5,$input->programas);
    });

    $validator->sometimes('limitacion_otro', 'required', function ($input) {
    return is_array($input->limitaciones) && in_array(4,$input->limitaciones);
    });

   if ($validator->fails()) {
        return back()
                    ->withErrors($validator)
                   ->withInput();
    }

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
    $victim->niveleducativo= $form ["niveleducativo"];
    $victim->condiciones_de_trabajo= $form ["condiciones_de_trabajo"];
    $victim->necesidades_socioeconomicas_insatisfechas= $form ["necesidades_socioeconomicas_insatisfechas"];
    $victim->necesidades_socioeconomicas_insatisfechas_otro= $form ["necesidades_socioeconomicas_insatisfechas_otro"];
    $victim->programa_subsidio= $form ["programa_subsidio"];
    $victim->programa_subsidio_otro= $form ["programa_subsidio_otro"];
    $victim->embarazorelevamiento= $form ["embarazorelevamiento"];
    $victim->tiene_discapacidad= $form ["tiene_discapacidad"];
    $victim->tienelesion= $form ["tienelesion"];
    $victim->tipo_lesion= $form ["tipo_lesion"];
    $victim->enfermedadcronica= $form ["enfermedadcronica"];
    $victim->tipo_enfermedad_cronica= $form ["tipo_enfermedad_cronica"];
    $victim->tiene_limitacion= $form ["tiene_limitacion"];
    $victim->limitacion_otro= $form ["limitacion_otro"];
    $victim->idCaso= session("idCaso");


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
      $necesidades = Necesidad::all();
      $programas = Programa::all();
      $discapacidades = Discapacidad::all();
      $limitaciones = Limitacion::all();
      $victima = Victim::find($id);
      $victimas = Victim::All();


        $vac = compact("victimas","victima","necesidades","programas","discapacidades","limitaciones");

        return view("detallevictima", $vac);
      }
      public function eliminar($id) {
        $victima = Victim::find($id);

        $victima->delete();
        $idCaso = session("idCaso");

return redirect("/paneldecontrol/$idCaso");
      }


    public function editar(Request $form) {

        $victim = Victim::find($form["idVictima"]);

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
        return redirect("paneldecontrol/{$victim->idCaso}");


             /*$victim->save();
             foreach ($form["necesidades"] as $necesidad) {
             $victim->necesidades()->attach($necesidad);}

             foreach ($form["programas"] as $programa) {
             $victim->programas()->attach($programa);}

             foreach ($form["discapacidades"] as $discapacidad) {
             $victim->discapacidades()->attach($discapacidad);}

             foreach ($form["limitaciones"] as $limitacion) {
             $victim->limitaciones()->attach($limitacion);}
           return redirect("casovictima");*/}



    }

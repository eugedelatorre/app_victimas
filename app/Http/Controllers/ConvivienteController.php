<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conviviente;

class ConvivienteController extends Controller
{

  public function agregar(request $form) {

    $conviviente = new Conviviente();

    $conviviente->nombre_y_apellido= $form["victima_nombre_y_apellido"];
    $conviviente->edad= $form["victima_edad"];
    $conviviente->vinculo_victima= $form["vinculo_victima"];
    $conviviente->niveleducativo_id= $form["niveleducativo_id"];
    $conviviente->condiciones_de_trabajo= $form["condiciones_de_trabajo"];
    $conviviente->caso_id= 99999;


    $conviviente->save();

    return redirect("agregarConvivienteC");



  }
}

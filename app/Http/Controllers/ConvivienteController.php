<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conviviente;

class ConvivienteController extends Controller
{

  public function agregar(request $form) {

    $conviviente = new Conviviente();

<<<<<<< HEAD
    $conviviente->nombre_y_apellido= $form["nombre_y_apellido"];
    $conviviente->edad= $form["edad"];
    $conviviente->vinculo_victima= $form["vinculo_victima"];
    $conviviente->niveleducativo_id= $form["niveleducativo_id"];
    $conviviente->condiciones_de_trabajo= $form["condiciones_de_trabajo"];
    $conviviente->idCaso= $form ["idCaso"];
=======
    $conviviente->nombre_y_apellido= $form["victima_nombre_y_apellido"];
    $conviviente->edad= $form["victima_edad"];
    $conviviente->vinculo_victima= $form["vinculo_victima"];
    $conviviente->niveleducativo_id= $form["niveleducativo_id"];
    $conviviente->condiciones_de_trabajo= $form["condiciones_de_trabajo"];
    $conviviente->caso_id= 99999;
>>>>>>> 72b5794bfa33317bc08a6812e37ef0e34d22931b


    $conviviente->save();

<<<<<<< HEAD
    return redirect("agregarconviviente");
=======
    return redirect("agregarConvivienteC");
>>>>>>> 72b5794bfa33317bc08a6812e37ef0e34d22931b



  }
<<<<<<< HEAD
  public function detalle($id) {

      $conviviente = Conviviente::find($id);


      $vac = compact("conviviente");

      return view("detalleconviviente", $vac);
    }

    public function eliminar($id) {
      $conviviente = Conviviente::find($id);
      $conviviente->delete();
        return redirect("agregarconviviente");

    }













=======
>>>>>>> 72b5794bfa33317bc08a6812e37ef0e34d22931b
}

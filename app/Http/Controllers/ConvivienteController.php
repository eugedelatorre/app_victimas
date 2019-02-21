<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conviviente;

class ConvivienteController extends Controller
{

  public function agregar(request $form) {

    $conviviente = new Conviviente();

    $conviviente->nombre_y_apellido= $form["nombre_y_apellido"];
    $conviviente->edad_conviviente= $form["edad_conviviente"];
    $conviviente->vinculo_victima= $form["vinculo_victima"];
    $conviviente->niveleducativo_id= $form["niveleducativo_id"];
    $conviviente->condiciones_de_trabajo= $form["condiciones_de_trabajo"];

    $conviviente->idCaso= session("idCaso");



    $conviviente->save();

    return redirect("agregarconviviente");




  }

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
    public function editar(Request $form) {

        $conviviente = Conviviente::find($form["idConviviente"]);

        $conviviente->nombre_y_apellido= $form["nombre_y_apellido"];
        $conviviente->edad_conviviente= $form["edad_conviviente"];
        $conviviente->vinculo_victima= $form["vinculo_victima"];
        $conviviente->niveleducativo_id= $form["niveleducativo_id"];
        $conviviente->condiciones_de_trabajo= $form["condiciones_de_trabajo"];

        $conviviente->idCaso= $form ["idCaso"];

             $conviviente->save();
              return redirect("home");}




    }

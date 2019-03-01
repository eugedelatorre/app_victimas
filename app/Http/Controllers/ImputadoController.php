<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imputado;

class ImputadoController extends Controller
{
  public function agregar(request $form) {

    $imputado = new Imputado();

    $imputado->nombre_y_apellido= $form["imputado_nombre_y_apellido"];
    $imputado->tipo_documento_id= $form["tipodocumento_id"];
    $imputado->tipo_documento_otro= $form["imputado_tipo_documento_otro"];
    $imputado->documento_nro= $form["imputado_documento"];
    $imputado->vinculo_id= $form["vinculo_id"];
    $imputado->vinculo_otro= $form["vinculo_otro"];
    $imputado->antecedentes_id= $form["antecedentes_id"];
    $imputado->defensoria_nro= $form["defensoria_numero"];
    $imputado->idCaso= session("idCaso");


    $imputado->save();

    return redirect("agregarimputado");
}
public function detalle($id) {
    $imputados=Imputado::all();
    $imputado = Imputado::find($id);
    $vac = compact("imputado","imputados");
    return view("detalleimputado", $vac);
  }

  public function eliminar($id) {
    $imputado = Imputado::find($id);
    $imputado->delete();
      return redirect("paneldecontrol");

  }

  public function editar(Request $form) {
      $imputado = Imputado::find($form["idImputado"]);
      $imputado->nombre_y_apellido= $form["nombre_y_apellido"];
      $imputado->tipo_documento_id= $form["tipodo_documento_id"];
      $imputado->tipo_documento_otro= $form["tipo_documento_otro"];
      $imputado->documento_nro= $form["documento_nro"];
      $imputado->vinculo_id= $form["vinculo_id"];
      $imputado->vinculo_otro= $form["vinculo_otro"];
      $imputado->antecedentes_id= $form["antecedentes_id"];
      $imputado->defensoria_nro= $form["defensoria_nro"];
      $imputado->idCaso= $form ["idCaso"];
      $imputado->save();
       return redirect("casoconviviente");


}
}

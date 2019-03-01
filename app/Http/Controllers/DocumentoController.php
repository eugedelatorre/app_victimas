<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Documento;

use Validator;

class DocumentoController extends Controller
{
public function agregar(Request $form){

  /*$reglas = [
    "nombre_profesional_interviniente"=>"required|string",
    "desde_profesional_interviniente"=>"required",
    "actual_profesional_interviniente"=>"required"
  ];

  $validator = Validator::make($form->all(), $reglas);

  $validator->sometimes('hasta_profesional_interviniente', 'required|after:desde_profesional_interviniente', function ($input) {
    return $input->actual_profesional_interviniente == 2;
  });

  if ($validator->fails()) {
      return back()
                  ->withErrors($validator)
                  ->withInput();
  }
*/

$archivo = $form->file("archivo");
$rutaDondeSeGuardaElArchivo = $archivo->store("public");
$nombreDelArchivo = basename($rutaDondeSeGuardaElArchivo);

$documento= new Documento( );

  $documento->tipo_documento= $form [ "tipo_documento"];
  $documento->nombre_documento= $form [ "nombre_documento"];
  $documento->archivo = $nombreDelArchivo;
  $documento->idCaso= session("idCaso");

  $documento->save( );
  return redirect ("agregarDocumento");
}


public function detalle($id) {

    $documento = Documento::find($id);


    $vac = compact("documento");

    return view("detalleDocumento", $vac);
  }

  public function eliminar($id) {
    $documento = Documento::find($id);
    $documento->delete();
      return redirect("paneldecontrol");

  }
  public function editar(Request $form) {
      $documento = Documento::find($form["idDocumento"]);
      $documento->tipo_documento= $form ["tipo_documento"];
      $documento->nombre_documento= $form ["nombre_documento"];
      $documento->idCaso= $form ["idCaso"];

           $documento->save();
            return redirect("home");}




}

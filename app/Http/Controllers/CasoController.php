<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Caso;
use App\Delito;
use App\Cavaj;
use App\Usuario;

class CasoController extends Controller
{



  public function agregar(Request $form){




//$reglas = [
//];


/*$mensajes=["string"=>"El campo :attribute debe ser un texto","integer"=>"El campo :attribute debe ser un número entero",
"date"=>"El campo :attribute debe ser una fecha","unique"=>"El campo :attribute está repetido","required"=>"Complete el campo :attribute "];*/

//$this->validate($form,$reglas,$mensajes);

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
$caso->nombre_y_apellido_de_la_victima=$form["nombre_y_apellido_de_la_victima"];
$caso->motivospasivos= $form["motivospasivos"];
$caso->cual_otro_motivospasivo= $form["cual_otro_motivospasivos"];
$caso->usuarios= $form["usuarios"];

$caso->save();













 foreach ($form["delito"] as $delito) {

  $caso->delitos()->attach($delito);}



 foreach ($form["cavaj"] as $cavaj) {
$caso->cavajs()->attach($cavaj);}




return redirect ("agregarPersona");



}

    public function search(Request $req) {
        $search = $req["search"];

        $casos = Caso::where("nombre_referencia", "like", "%$search%")->get();

        return view("home", compact("casos"));
    }

    public function detalle($id) {
        $caso = Caso::find($id);
        $vac = compact("caso","delitos","cavajs","usuarios");

        return view("detalleCaso", $vac);
      }

      public function eliminar($id) {
        $caso = Caso::find($id);
        $caso->delete();
          return redirect("home");

      }

}

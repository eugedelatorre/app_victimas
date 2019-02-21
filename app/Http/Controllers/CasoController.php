<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Caso;
use App\Delito;

use App\Cavaj;
use App\Usuario;

//use App\Cavaj;
//use App\Cavaj;


class CasoController extends Controller
{



  public function agregar(Request $form){




//$reglas = [
//];

//$reglas = [
//];

/*$mensajes=["string"=>"El campo :attribute debe ser un texto","integer"=>"El campo :attribute debe ser un número entero",
"date"=>"El campo :attribute debe ser una fecha","unique"=>"El campo :attribute está repetido","required"=>"Complete el campo :attribute "];*/

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

$idCaso = $caso->id;

session(["idCaso" => $idCaso]);


//session()->forget('idCaso');
// dd($idCaso, $_SESSION["idCaso"]);


/*if ($form["persona_asistida"] == 1) {
  return view("agregarPersona");
} else {
  return view("agregarProfesional");
}

// idCaso y su data
// return view("agregarPersona")


*/
 foreach ($form["delitos"] as $delito) {

  $caso->delitos()->attach($delito);}






 foreach ($form["cavaj"] as $cavaj) {
$caso->cavajs()->attach($cavaj);}






return redirect ("agregarPersona");



}

    public function search(Request $req) {
        $search = $req["search"];
        switch ($search) {
          case "presentacion":
          $search= 1;
            break;

            case "intervencion":
            $search= 2;
              break;

              case "derivacion":
              $search= 3;
                break;

        }

        $casos = Caso::where("nombre_referencia", "like", "%$search%")
          ->orWhere("nombre_y_apellido_de_la_victima", "like", "%$search%")
          ->orWhere("modalidad_ingreso", "like", "%$search%")



          ->get();

        return view("home", compact("casos"));
    }

    public function detalle($id) {
        $caso = Caso::find($id);
        $delitos = Delito::all();
        $cavajs = Cavaj::all();
        $usuarios = Usuario::all();
        return view("detalleCaso", compact("delitos", "cavajs","usuarios", "caso"));

      }

      public function eliminar($id) {
        $caso = Caso::find($id);
        $caso->delete();
          return redirect("home");

      }
      public function editar(Request $form) {
          $caso = Caso::find($form["idCaso"]);

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
          return redirect("home");

}
}

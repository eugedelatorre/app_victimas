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

    $reglas = [
          "usuarios" => "required",
          "nombre_referencia" =>"required|max:255",
          "delitos" => "required",
          "descripcion_caso" => "required",
          "fecha_ingreso" => "required",
          "modalidad_ingreso" => "required",
          "cavaj" => "required",
          "fiscalia_juzgado" => "required",
          "causa_id_judicial" => "required",
          "comisaria" => "required",
          "denuncias_previas" => "required",
          "departamento_judicial" => "required",
          "estado" => "required",
          "nombre_y_apellido_de_la_victima" => "required",
          "persona_asistida" => "required"
        ];

        $this->validate($form, $reglas);


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

        $casos = Caso::where("nombre_referencia", "like", "%$search%")
          ->orWhere("nombre_y_apellido_de_la_victima", "like", "%$search%")
          ->get();

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
      /*public function editar(Request $form) {
          $persona = Persona::find($form["idCaso"]);}
          $persona->nombre_persona_asistida= $form ["nombre_persona_asistida"];
          $persona->vinculo_persona_asistida= $form ["vinculo_persona_asistida"];
          $persona->otro_vinculo_persona_asistida_cual= $form ["otro_vinculo_persona_asistida_cual"];
          $persona->telefono_persona_asistida= $form ["telefono_persona_asistida"];
          $persona->domicilio_persona_asistida= $form ["domicilio_persona_asistida"];
          $persona->localidad_persona_asistida= $form ["localidad_persona_asistida"];
          $persona->idCaso= $form ["idCaso"];
          $caso-> ??? = $form["???"];

         $caso->save();
          return redirect("detallePersona/" . $form["idCaso"]);





*/

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Delito;

class DelitoController extends Controller
{
public function agregar(Request $form){


//$reglas = [];

//$mensajes=[];

$this->validate($form,$reglas,$mensajes);

$delito= new Delito( );
$delito->Abandono_persona= $form ["Abandono_persona"];
$delito->Abuso_sexual= $form ["Abuso_sexual"];
$delito->Abuso_sexual_ muerte= $form ["Abuso_sexual_ muerte"];
$delito->Acoso_sexual= $form ["Acoso_sexual"];
$delito->Amenazas= $form ["Amenazas"];
$delito->Averiguacion_causales_muerte= $form ["Averiguacion_causales_muerte"];
$delito->Bullying= $form ["Bullying"];
$delito->Catastrofes_naturales= $form ["Catastrofes_naturales"];
$delito->Desaparicion_personas= $form ["Desaparicion_personas"];
$delito->Femicidio= $form ["Femicidio"];
$delito->Femicidio_indirecto= $form ["Femicidio_indirecto"];
$delito->Grooming= $form ["Grooming"];
$delito->Homicidio = $form ["Homicidio "];
$delito->Instigacion_ayuda_suicidio= $form ["Instigacion_ayuda_suicidio"];
$delito->Lesiones = $form ["Lesiones "];
$delito->Pornografia_menores= $form ["Pornografia_menores"];
$delito->Privacion_ilegal_libertad = $form ["Privacion_ilegal_libertad "];
$delito->Promocion_corrupcion_menores= $form ["Promocion_corrupcion_menores"];
$delito->Promocion_prostitucion_mayores= $form ["Promocion_prostitucion_mayores"];
$delito->Promocion_prostitucion_menores= $form ["Promocion_prostitucion_menores"];
$delito->Reduccion_servidumbre= $form ["Reduccion_servidumbre"];
$delito->Robo_agravado= $form ["Robo_agravado"];
$delito->Robo_seguido_muerte= $form ["Robo_seguido_muerte"];
$delito->Secuestro= $form ["Secuestro"];
$delito->Secuestro_seguido_muerte= $form ["Secuestro_seguido_muerte"];
$delito->Siniestro_vial= $form ["Siniestro_vial"];
$delito->Suicidio = $form ["Suicidio "];
$delito->Tentativa_homicidio= $form ["Tentativa_homicidio"];
$delito->Tentativa_suicidio= $form ["Tentativa_suicidio"];
$delito->Tortura= $form ["Tortura"];
$delito->Usurpacion= $form ["Usurpacion"];
$delito->Violencia_genero= $form ["Violencia_genero"];
$delito->Violencia_espectaculos_deportivos = $form ["Violencia_espectaculos_deportivos "];
$delito->Violencia_institucional= $form ["Violencia_institucional"];
$delito->Violencia_familiar= $form ["Violencia_familiar"];
$delito->Otro_delito= $form ["Otro_delito"];
$delito->Otro_delito_cual= $form ["Otro_delito_cual"];

//REVISAR QUE COINCIDAN NAME EN VIEW CON $form [""]; Y LOS ATRIBUTOS DE LA CLASE CON LAS COLUMNAS DE LA BD
$delito->save( );

//$guardarCavaj=$delitos->cavaj()->attach($form["cavaj"]);
//$vac=compact($guardarCavaj);
return redirect ("agregarDelito");


}
}

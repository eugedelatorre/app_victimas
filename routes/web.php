<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//---------Rutas FORMULARIO A (AGREGAR CASOS)-------------//
Route::get("/agregarCaso",function(){
  $delitos = App\Delito::all();
  //dd($delitos);
  $cavajs = App\Cavaj::all();

  $usuarios = App\Usuario::all();
  $organismos = App\Organismo::all();
  $departamentos = App\Departamento::all();
  return view("agregarCaso", compact("delitos", "cavajs","usuarios","organismos","departamentos"));

  //dd($cavajs);

  return view("agregarCaso", compact("delitos", "cavajs"));

});

Route::post("/agregarCaso","CasoController@agregar");

//---------Rutas FORMULARIO A (EDITAR CASOS AGREGADOS)-------------//
Route::get("/detalleCaso/{id}", "CasoController@detalle");
Route::get("/detalleCaso/deleteCaso/{id}", "CasoController@eliminar");
Route::get("/detalleCaso/{id}",function(){
  $delitos = App\Delito::all();
  $cavajs = App\Cavaj::all();
  $usuarios = App\Usuario::all();
  return view("detalleCaso", compact("delitos", "cavajs","usuarios"));
});

//---------Rutas FORMULARIO A (AGREGAR  PROFESIONAL)-------------//

Route::get("/agregarProfesional",function(){
    $profesionales = App\Profesional::all();
    $ultimoid=App\Caso::where("usuarios","=","2")->max('id');
    $usuarios = App\Usuario::all();
    // al Model Caso le pido de la columna usuarios todas las filas que coinciden con el usuario autenticado y cuyo id sea el máxima (o sea el último),
    //cuando va por Get a agregarConviviente le pasa a la vista ese valor $ultimoid
    //2=AUTH, USUARIO AUTENTICADO
  return view("agregarProfesional",compact("profesionales","ultimoid","usuarios"));
});

//---------Rutas FORMULARIO A (EDITAR PROFESIONALES AGREGADOS)-------------//

Route::post("/agregarProfesional","ProfesionalController@agregar");
Route::get("/detalleProfesional/{id}", "ProfesionalController@detalle");
Route::get("/detalleProfesional/deleteProfesional/{id}", "ProfesionalController@eliminar");

//---------Rutas FORMULARIO A (AGREGAR PERSONAS ASISTIDAS)-------------//
Route::get("/agregarPersona",function(){
    $personas = App\Persona::all();
  $ultimoid=App\Caso::where("usuarios","=","2")->max('id');
  // al Model Caso le pido de la columna usuarios todas las filas que coinciden con el usuario autenticado y cuyo id sea el máxima (o sea el último),
  //cuando va por Get a agregarPersona le pasa a la vista ese valor $ultimoid
  //2=AUTH, USUARIO AUTENTICADO
  return view("agregarPersona",compact("personas","ultimoid"));
});
//---------Rutas FORMULARIO A (EDITAR PERSONAS ASISTIDAS AGREGADAS)-------------//
Route::post("/agregarPersona","PersonaController@agregar");
Route::get("/detallePersona/{id}", "PersonaController@detalle");
Route::get("/detallePersona/deletePersona/{id}", "PersonaController@eliminar");

//---------Rutas FORMULARIO A (AGREGAR CONVIVIENTES)-------------//

Route::get("/agregarconviviente",function(){
    $convivientes = App\Conviviente::all();
    $ultimoid=App\Caso::where("usuarios","=","2")->max('id');
    // al Model Caso le pido de la columna usuarios todas las filas que coinciden con el usuario autenticado y cuyo id sea el máxima (o sea el último),
    //cuando va por Get a agregarConviviente le pasa a la vista ese valor $ultimoid
    //2=AUTH, USUARIO AUTENTICADO
  return view("agregarconviviente",compact("convivientes","ultimoid"));
});
//---------Rutas FORMULARIO A (EDITAR CONVIVIENTES AGREGADOS )-------------//
Route::post("/agregarconviviente","ConvivienteController@agregar");
Route::get("/detalleconviviente/{id}", "ConvivienteController@detalle");
Route::get("/detalleconviviente/deleteconviviente/{id}", "ConvivienteController@eliminar");



//---------FIN FORMULARIO A (AGREGAR CASOS)-------------//





//---------Rutas FORMULARIO B (AGREGAR VICTIMAS)-------------//

Route::get("/agregarVictima",function(){
  $necesidades = App\Necesidad::all();
  $programas = App\Programa::all();
  $discapacidades = App\Discapacidad::all();
  $limitaciones = App\Limitacion::all();
  $victims= App\Victim::all();
  $ultimoid=App\Caso::where("usuarios","=","2")->max('id');
  // al Model Caso le pido de la columna usuarios todas las filas que coinciden con el usuario autenticado y cuyo id sea el máxima (o sea el último),
  //cuando va por Get a agregarConviviente le pasa a la vista ese valor $ultimoid
  //2=AUTH, USUARIO AUTENTICADO

  return view("agregarVictima", compact("necesidades","programas","discapacidades","limitaciones","victims","ultimoid"));
});

//---------Rutas FORMULARIO B (EDITAR VICTIMAS AGREGADAS)-------------//
Route::post("/agregarVictima","VictimController@agregar");
Route::get("/detallevictima/{id}", "VictimController@detalle");
Route::get("/detallevictima/deletevictima/{id}", "VictimController@eliminar");

Route::get("/detallevictima/{id}",function(){
  $necesidades = App\Necesidad::all();
  $programas = App\Programa::all();
  $discapacidades = App\Discapacidad::all();
  $limitaciones = App\Limitacion::all();
  $victims= App\Victim::all();
  $ultimoid=App\Caso::where("usuarios","=","2")->max('id');
  // al Model Caso le pido de la columna usuarios todas las filas que coinciden con el usuario autenticado y cuyo id sea el máxima (o sea el último),
  //cuando va por Get a agregarConviviente le pasa a la vista ese valor $ultimoid
  //2=AUTH, USUARIO AUTENTICADO

  return view("detallevictima", compact("necesidades","programas","discapacidades","limitaciones","victims","ultimoid"));
});

//---------HOME VISTA DEL BUSCADOR)-------------//
Route::get("/home",function(){

    $casos = App\Caso::all();

    return view("home");
});

Route::get("/search", "CasoController@search");

//---------FIN BUSCADOR-------------//


//---------Rutas FORMULARIO E (AGREGAR IMPUTADOS)-------------//

Route::get("/agregarimputado",function(){
    $imputados = App\Imputado::all();

  $ultimoid=App\Caso::where("usuarios","=","2")->max('id');
  // al Model Caso le pido de la columna usuarios todas las filas que coinciden con el usuario autenticado y cuyo id sea el máxima (o sea el último),
  //cuando va por Get a agregarPersona le pasa a la vista ese valor $ultimoid
  //2=AUTH, USUARIO AUTENTICADO
  return view("agregarimputado",compact("imputados","ultimoid"));
});
//---------Rutas FORMULARIO E (EDITAR IMPUTADOS AGREGADOS)-------------//
Route::post("/agregarimputado","ImputadoController@agregar");
Route::get("/detalleimputado/{id}", "ImputadoController@detalle");
Route::get("/detalleimputado/deleteimputado/{id}", "ImputadoController@eliminar");



//---------Rutas FORMULARIO F (AGREGAR ORGANISMOS)-------------//

Route::get("/agregarOrganismo",function(){


    return view("agregarOrganismo");
});

Route::post("/agregarOrganismo","OrganismoController@agregar");
//---------FIN FORMULARIO F-------------//

//---------API GEOLOCALIZACION https://mapa2.electoral.gov.ar/descargas/-------------//

Route::get("/apitest", function () {
  $apiCall = curl_init("https://mapa2.electoral.gov.ar/geoserver/wfs?service=WFS&version=1.0.0&request=GetFeature&authkey=15b64d47627507e46599f51f4cff5a13&typeName=descargas:circuito_02&maxFeatures=2000&outputFormat=application%2Fjson");
	curl_setopt($apiCall, CURLOPT_RETURNTRANSFER, 1);
	$apiOutput = curl_exec($apiCall);
	curl_close($apiCall);
  $result = json_decode($apiOutput, true);
  //dd($result["features"][0]["geometry"]["coordinates"][0][0]);
  $arrayParaLaVista = [];
  //dd($result["features"][1]);

  foreach ($result["features"] as $dato) {
    $arrayParaLaVista[] = [
      $dato["properties"]["departamen"],

      $dato["geometry"]["coordinates"][0][0][0][1],
      $dato["geometry"]["coordinates"][0][0][0][0],



    ];
  }

  return view("testApi", compact("arrayParaLaVista"));
});


//-------------FIN API GEOLOCALIZACION------------//

Route::post("/agregarOrganismoF","OrganismoController@agregar");

Route::get("/apitest", function () {
  $apiCall = curl_init("https://mapa2.electoral.gov.ar/geoserver/wfs?service=WFS&version=1.0.0&request=GetFeature&authkey=32fb9979f9574eccbda848ae56183e0d&typeName=descargas:circuito_02&maxFeatures=2000&outputFormat=application%2Fjson");
	curl_setopt($apiCall, CURLOPT_RETURNTRANSFER, 1);
	$apiOutput = curl_exec($apiCall);
	curl_close($apiCall);
  $result = json_decode($apiOutput, true);
  $arrayParaLaVista = [];
  //dd($result["features"][1]);

  foreach ($result["features"] as $dato) {
    $arrayParaLaVista[] = [
      $dato["properties"]["departamen"],
      $dato["geometry"]["coordinates"][0][0][0][0],
      $dato["geometry"]["coordinates"][0][0][0][1],
    ];
  }

  return view("testApi", compact("arrayParaLaVista"));
})



?>

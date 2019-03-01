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



});

Route::post("/agregarCaso","CasoController@agregar");

//---------Rutas FORMULARIO A (EDITAR CASOS AGREGADOS)-------------//
Route::get("/detalleCaso/{id}", "CasoController@detalle");
Route::post("/detalleCaso/{id}", "CasoController@detalle");
Route::post("/detalleCaso", "CasoController@editar");
//Route::get("/detalleCaso/deleteCaso/{id}", "CasoController@eliminar");

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
Route::post("/detalleProfesional", "ProfesionalController@editar");
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
Route::post("/detallePersona", "PersonaController@editar");
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
Route::post("/detalleconviviente", "ConvivienteController@editar");
Route::get("/detalleconviviente/deleteconviviente/{id}", "ConvivienteController@eliminar");



Route::get("/detalleagregarconviviente",function(){
    $convivientes = App\Conviviente::all();

  return view("detalleagregarconviviente",compact("convivientes"));
});

Route::get("/detalleagregarCaso",function(){
  $delitos = App\Delito::all();
  //dd($delitos);
  $cavajs = App\Cavaj::all();
   $usuarios = App\Usuario::all();
  $organismos = App\Organismo::all();
  $departamentos = App\Departamento::all();
  return view("detalleagregarCaso", compact("delitos", "cavajs","usuarios","organismos","departamentos"));


});

Route::post("/detalleagregarCaso","CasoController@agregar");
//---------Rutas FORMULARIO A (EDITAR CONVIVIENTES AGREGADOS )-------------//
Route::post("/agregarconviviente","ConvivienteController@agregar");

Route::get("/detalleagregarPersona",function(){
    $personas = App\Persona::all();

  return view("detalleagregarPersona",compact("personas"));
});
//---------Rutas FORMULARIO A (EDITAR CONVIVIENTES AGREGADOS )-------------//
Route::post("/agregarPersona","PersonaController@agregar");

Route::get("/detalleagregarDocumento",function(){
    $documentos = App\Documento::all();

  return view("detalleagregarDocumento",compact("documentos"));
});
//---------Rutas FORMULARIO A (EDITAR CONVIVIENTES AGREGADOS )-------------//
Route::post("/agregarDocumento","DocumentoController@agregar");

Route::get("/index",function(){


  return view("index");
});












Route::get("/detalleagregarProfesional",function(){
    $profesionales = App\Profesional::all();
      $usuarios = App\Usuario::all();

  return view("detalleagregarProfesional",compact("profesionales","usuarios"));
});
//---------Rutas FORMULARIO A (EDITAR CONVIVIENTES AGREGADOS )-------------//
Route::post("/detalleagregarProfesional","ProfesionalController@agregar");










Route::get("/detalleagregarimputado",function(){
    $imputados = App\Imputado::all();

  return view("agregarimputado",compact("imputados"));
});
//---------Rutas FORMULARIO A (EDITAR CONVIVIENTES AGREGADOS )-------------//
Route::post("/detalleagregarimputado","ImputadoController@agregar");

Route::get("/detalleagregarVictima",function(){
    $victimas = App\Victim::all();
    $victims = App\Victim::all();
    $necesidades = App\Necesidad::all();
    $programas = App\Programa::all();
    $discapacidades = App\Discapacidad::all();
    $limitaciones = App\Limitacion::all();


  return view("detalleagregarVictima",compact("victimas","victims","necesidades", "programas","discapacidades","limitaciones"));
});
//---------Rutas FORMULARIO A (EDITAR CONVIVIENTES AGREGADOS )-------------//
Route::post("/agregarVictima","VictimController@agregar");

















Route::get("/casoconviviente",function(){
$convivientes = App\Conviviente::all();

  return view("casoconviviente",compact("convivientes"));
});

Route::get("/casovictima",function(){
$victimas = App\Victim::all();

  return view("casovictima",compact("victimas"));
});

Route::get("/casopersona",function(){
$personas = App\Persona::all();

  return view("casopersona",compact("personas"));
});

Route::get("/casoprofesional",function(){
$profesionales = App\Profesional::all();

  return view("casoprofesional",compact("profesionales"));
});




Route::get("/paneldecontrol/{id}",function($id){
  $delitos = App\Delito::all();
  $cavajs = App\Cavaj::all();
  $usuarios = App\Usuario::all();
  $caso = App\Caso::find($id);
  session(["idCaso" => $id]);
  //$vac = compact("caso","delitos","cavajs","usuarios");

$imputados = App\Imputado::all();
$convivientes = App\Conviviente::all();
$victimas=App\Victim::all();
$personas=App\Persona::all();
$profesionales=App\Profesional::all();

  return view("paneldecontrol",compact("imputados","convivientes","victimas","personas","profesionales", "caso","delitos","cavajs","usuarios"));
});

//---------FIN FORMULARIO A (AGREGAR CASOS)-------------//





//---------Rutas FORMULARIO B (AGREGAR VICTIMAS)-------------//

Route::get("/agregarVictima",function(){
  $necesidades = App\Necesidad::all();
  $programas = App\Programa::all();
  $discapacidades = App\Discapacidad::all();
  $limitaciones = App\Limitacion::all();
  $victims= App\Victim::all();


  return view("agregarVictima", compact("necesidades","programas","discapacidades","limitaciones","victims"));
});

//---------Rutas FORMULARIO B (EDITAR VICTIMAS AGREGADAS)-------------//
Route::post("/agregarVictima","VictimController@agregar");
Route::get("/detallevictima/{id}", "VictimController@detalle");
Route::post("/detallevictima/{id}", "VictimController@editar");
Route::get("/detallevictima/deletevictima/{id}", "VictimController@eliminar");




//---------HOME VISTA DEL BUSCADOR)-------------//
Route::get("/inicio",function(){

    $casos = App\Caso::all();

    return view("inicio",compact("casos"));
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
Route::post("/detalleimputado", "ImputadoController@editar");
Route::get("/detalleimputado/deleteimputado/{id}", "ImputadoController@eliminar");



//---------Rutas FORMULARIO F (AGREGAR ORGANISMOS)-------------//
Route::get("/agregarOrganismo",function(){
  $oprevios = App\Oprevio::all();
  $oarticulas = App\Oarticula::all();
  $socioeconomicos = App\Socioeconomico::all();

  $victimas= App\Victim::all();


  return view("agregarOrganismo", compact("oprevios","oarticulas","socioeconomicos","victimas"));
});
//---------Rutas FORMULARIO F (EDITAR ORGANISMO AGREGADO)-------------//
Route::post("/agregarOrganismo","InstitucionController@agregar");
Route::get("/detalleOrganismo/{id}", "InstitucionController@detalle");
Route::post("/detalleOrganismo", "InstitucionController@editar");
Route::get("/detalleOrganismo/deleteOrganismo/{id}", "InstitucionController@eliminar");

//---------FIN FORMULARIO F-------------//


Route::get("/detalleagregarOrganismo",function(){
  $oprevios = App\Oprevio::all();
  $oarticulas = App\Oarticula::all();
  $socioeconomicos = App\Socioeconomico::all();

  $victimas= App\Victim::all();


  return view("detalleagregarOrganismo", compact("oprevios","oarticulas","socioeconomicos","victimas"));
});
//-----AGREGAR DELITO D----------------//
Route::get("/agregarDelito",function(){


  $ultimoid=App\Caso::where("usuarios","=","2")->max('id');
  // al Model Caso le pido de la columna usuarios todas las filas que coinciden con el usuario autenticado y cuyo id sea el máxima (o sea el último),
  //cuando va por Get a agregarPersona le pasa a la vista ese valor $ultimoid
  //2=AUTH, USUARIO AUTENTICADO
  return view("agregarDelito",compact("imputados","ultimoid"));
});
Route::get("/agregarDocumento",function(){
    $documentos = App\Documento::all();


  return view("agregarDocumento",compact("documentos"));
});
//---------Rutas FORMULARIO E (EDITAR IMPUTADOS AGREGADOS)-------------//
Route::post("/agregarDocumento","DocumentoController@agregar");
Route::get("/detalleDocumento/deleteDocumento/{id}", "DocumentoController@eliminar");








Auth::routes();

//------------FIN DELITO D----------------//

//---------API GEOLOCALIZACION https://mapa2.electoral.gov.ar/descargas/-------------//





//-------------FIN API GEOLOCALIZACION------------//

Route::post("/agregarOrganismoF","OrganismoController@agregar");

/*Route::get("/apitest", function () {
agreg	curl_setopt($apiCall, CURLOPT_RETURNTRANSFER, 1);
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
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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


Route::get("/agregarCaso",function(){
  $delitos = App\Delito::all();
  //dd($delitos);
  //$cavajs = App\Cavaj::all();
  //dd($cavajs);

  return view("agregarCaso", compact("delitos"));
});
Route::post("/agregarCaso","CasoController@agregar");

Route::get("/agregarPersona",function(){

    $personas = App\Persona::all();

  return view("agregarPersona",compact("personas"));
});


Route::post("/agregarPersona","PersonaController@agregar");

Route::get("/agregarProfesional",function(){

    $profesionales = App\Profesional::all();

  return view("agregarProfesional",compact("profesionales"));
});
Route::post("/agregarProfesional","ProfesionalController@agregar");

Route::get("/detallePersona/{id}", "PersonaController@detalle");


Route::get("/agregarVictimaB",function(){
    return view("agregarVictimaB");
});

Route::post("/agregarVictimaB","VictimaController@agregar");

//---------Rutas C-------------//

Route::get("/agregarConvivienteC",function(){
    return view("agregarConvivienteC");
});

Route::post("/agregarConvivienteC","ConvivienteController@agregar");

//---------Rutas D-------------//

Route::get("/agregarDelitoD",function(){
    return view("agregarDelitoD");
});

Route::post("/agregarDelitoD","DelitoController@agregar");

//---------Rutas E-------------//

Route::get("/agregarImputadoE",function(){
    return view("agregarImputadoE");
});

Route::post("/agregarImputadoE","ImputadoController@agregar");

//---------Rutas F-------------//

Route::get("/agregarOrganismoF",function(){
    return view("agregarOrganismoF");
});

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

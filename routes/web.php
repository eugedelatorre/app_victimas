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

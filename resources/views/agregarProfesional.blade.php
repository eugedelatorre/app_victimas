<?php
session_start();
/*
ARMO ARRAY ASOCIATIVO PARA RECORRERLO BUSCANDO EL VALOR DEL SELECT A-5, ESTE VALOR LO GUARDO EN UN SESSION PARA LUEGO MOSTRARLO EN F-1
$derivaciones=;
$derivaciones=["1"=>"Unidad de Ministro (Ministerio de Justicia)",
                 "2"=>"Organismo Provincial de Niñez y Adolescencia",
                 "3"=>" Portal Mi Provincia",
                 "4"=>"Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)",
                 "5"=>"Fiscalía",
                 "6"=>"Comisaría",
                 "7"=>"Municipio",
                 "8"=>"Centro de Acceso a Justicia (CAJ)",
                 "9"=>"Defensoría del Pueblo",
                 "10"=>"Estado en Tu Barrio",
                 "11"=>"DDI",
                 "12"=>"Cerca de Noche",
                 "13"=>"Equipo territorial de barrios",
                 "14"=>"Otro"];

	if ( $_POST ) {
    // VARIABLES SESSION UTILIZADAS EN F-1
$_SESSION["derivacion"] = $_POST["derivacion_otro_organismo"];
if($_SESSION["derivacion"]==2){
$_SESSION["derivacion"]=NULL;
$_SESSION["derivacionbis"]=2;}

if($_SESSION["derivacion"]==4){
$_SESSION["derivacion"]=NULL;
$_SESSION["derivacionbis"]=4;}

if($_SESSION["derivacion"]==5){
$_SESSION["derivacion"]=NULL;
$_SESSION["derivacionbis"]=5;}

if($_SESSION["derivacion"]==8){
$_SESSION["derivacion"]=NULL;
$_SESSION["derivacionbis"]=8;}

if($_SESSION["derivacion"]==10){
$_SESSION["derivacion"]=NULL;
$_SESSION["derivacionbis"]=10;}

if($_SESSION["derivacion"]==12){
$_SESSION["derivacion"]=NULL;
$_SESSION["derivacionbis"]=12;}

foreach ($derivaciones as $numero=>$nombre){
if($_SESSION["derivacion"]==$numero){
   $_SESSION["derivacion"]=$nombre;}
   if($_SESSION["derivacion"]=="Otro"){
   $_SESSION["derivacion"]=$_POST["derivacion_otro_organismo_cual"]; }
   if($_SESSION["derivacion"]==" "){
   $_SESSION["derivacion"]=NULL; }

}}else{$_SESSION["derivacionbis"]=NULL;}*/

 ?>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/app.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <title>Eje A: Datos institucionales</title>
      <style>
         .Auno,.Ados{float: left;
         width: 40%
         }
         .AunoDos{overflow: hidden;margin-left: 1%}
      </style>
   </head>
   <header>
      <ul class="nav nav-tabs">
         <li class="nav-item"> <a class="nav-link " href="#">Eje A: Datos institucionales</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioB4victimas.php">Eje B: Caracterización de la victima y su contexto</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioC4victimas.php">Eje C: Grupo Conviviente</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioD4victimas.php">Eje D: Caracterización de delito</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioE4victimas.php">Eje E: Datos del imputado</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioF4victimas.php">Eje F: Atención del caso</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioG4victimas.php">Eje G: Documentación</a> </li>
      </ul>
   </header>
   <body>
      <h1 class="text-center" style="padding: 15px;">Eje A: Datos institucionales</h1>
      <h2 class="text-center" style="padding: -30px;">Profesional interviniente</h2>
      <div class="form-group" style="margin-top:-15%;margin-left:45%">
        @foreach ($profesionales as $profesional)
          <label class="form-check-inline form-check-label">
            @if($profesional->idCaso==$_SESSION["idCaso"])
        {{ $profesional->nombre_profesional_interviniente }}{{$profesional->id}}@endif

          </label><br>
        @endforeach
      </div>
      <section class="container">

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

         <form class="" action="/agregarProfesional" method="post">
                {{csrf_field()}}

<input type="hidden" name="idCaso" value="{{ $_SESSION["idCaso"]}}">


                  <div class="form-group"{{ $errors->has('nombre_profesional_interviniente') ? 'has-error' : ''}}>
                    <h3>A 15. Profesional Interviniente:</h3>
                    <div class="form-group ">
                       <label for="profesional_id">Profesional que interviene</label>
                       <select class="form-control" name="nombre_profesional_interviniente">
                          <option value="">Seleccioná profesional</option>
                          <option value="1">Jessica Nerina Seimandi - Dirección</option>
                          <option value="2">Mercedes Ratti - Dirección</option>
                          <option value="3">Elina Contreras - Dirección</option>
                          <option value="4">Emiliano Lurbet - Equipo Barrios</option>
                          <option value="5">Correa, Anabella - Equipo Barrios</option>
                          <option value="6">Jose Maria Retamasso - Equipo Barrios</option>
                          <option value="7">Carolina Cabral - Equipo Barrios</option>
                          <option value="8">Horacio Renone - Equipo Barrios</option>
                          <option value="9">Jorge samuel Chocobar - Equipo Barrios</option>
                          <option value="10">Candela Chuliver - Equipo de rescate</option>
                          <option value="11">Licia Cipollone - Equipo de rescate</option>
                          <option value="12">Romina Camperchiolli - Equipo de rescate</option>
                          <option value="13">Florencia Daireaux - Equipo de rescate</option>
                          <option value="14">María Victoria García - Equipo de rescate</option>
                          <option value="15">Pamela Gisela Ledesma - Equipo de rescate</option>
                          <option value="16">Mauro Javier Salgueira - Equipo de rescate</option>
                          <option value="17">María Eugenia Sánchez - Equipo de rescate</option>
                          <option value="18">María Pilar Sanz - Equipo de rescate</option>
                          <option value="19">Adrian Sein - Equipo de rescate</option>
                          <option value="20">Martin Urtasun - Equipo de rescate</option>
                          <option value="21">Paola Vazquez - Equipo de rescate</option>
                          <option value="22">Angela Gonzalez Touzett - Equipo de rescate</option>
                          <option value="23">Paola Vega De Nazar - Equipo de rescate</option>
                          <option value="24">Belén Della Croce - Equipo de rescate</option>
                          <option value="25">Diego Campero - Equipo de planificación</option>
                          <option value="26">Maria Alejandro Cardoso - Equipo de planificación</option>
                          <option value="27">Luciano Ramis - Equipo de planificación</option>
                          <option value="28">Cecilia Svanossi - Equipo de planificación</option>
                          <option value="29">Paula Labombarda - Equipo de planificación</option>
                          <option value="30">Camila Ledesma - Equipo de planificación</option>
                          <option value="31">Luciana Salgueira - Equipo de planificación</option>
                          <option value="32">María Garro - Administrativo</option>
                          <option value="33">Soledad Iglesias - Administrativo</option>
                          <option value="34">Denisse Noguera - Administrativo</option>
                          <option value="35">Florencia Sánchez Turi - Administrativo</option>
                          <option value="36">Rosario Sánchez - Subsecretaría</option>
                          <option value="37">Lorena Signore - Subsecretaría</option>
                          <option value="38">Lucía Moreno - Subsecretaría</option>
                       </select>
                       {!! $errors->first('nombre_profesional_interviniente', '<p class="help-block" style="color:red";>:message</p>') !!}
                    </div>
                    <div class="form-group"{{ $errors->has('desde_profesional_interviniente') ? 'has-error' : ''}}>
                       <label for="">A 15.3 Interviene desde:</label>
                       <input type="date" class="form-control" name="desde_profesional_interviniente" id="datos_profesional_interviene_desde" value="{{old("desde_profesional_interviniente")}}">
                  {!! $errors->first('desde_profesional_interviniente', '<p class="help-block" style="color:red";>:message</p>') !!}
                    </div>
                    <div class="form-group"{{ $errors->has('actual_profesional_interviniente') ? 'has-error' : ''}}>
                       <label for="profesionalactualmente_id">A 15.4 Actualmente Interviene:</label>
                       <select class="form-control" name="actual_profesional_interviniente" onChange="selectOnChangeA15(this)" value="{{old("actual_profesional_interviniente")}}">
                          <option value="">Actualmente interviene?</option>
                          <option value="1">Si</option>
                          <option value="2">No</option>
                       </select>
                       {!! $errors->first('actual_profesional_interviniente', '<p class="help-block" style="color:red";>:message</p>') !!}
                    </div>
                    <div id="no" style="display: none;">
                       <div class="form-group"{{ $errors->has('hasta_profesional_interviniente') ? 'has-error' : ''}}>
                          <label for="hasta_profesional_interviniente">A 15.5 Interviene hasta:</label>
                          <input type="date" class="form-control" name="hasta_profesional_interviniente" id="datos_profesional_interviene_desde" value="{{old("hasta_profesional_interviniente")}}">
                  {!! $errors->first('hasta_profesional_interviniente', '<p class="help-block" style="color:red";>:message</p>') !!}
                       </div>
                    </div>
            </div>
            <div class="botones" style="overflow:hidden;width:100%;margin-left:40%">
          <div class="btn-1" style="width:10%;float:left"> <button class="btn btn-primary col-xs" name="button" style="width:108%" >Agregar</button><br><br></div>

            </div>
          </form>
<div class="btn-4" style="width:11%;float:left;margin-left:40%">   <button style="width:100%" class="btn btn-primary col-xs" name="button" onclick="window.open('agregarVictimaB', 'width=800,height=600')"; >Fin Formulario A </button><br><br></div>
      </section>

      <script>

         function selectOnChange1(sel) {
             if (sel.value=="2"){
                 divC = document.getElementById("no");
                 divC.style.display = "";
             }else{
                 divC = document.getElementById("no");
                 $('#datos_profesional_interviene_hasta').val('');
                 divC.style.display="none";
             }
         }
      </script>

      <script>
         function muestroCualA2() {
             var checkBox = document.getElementById("checkeado");
             var text = document.getElementById("cualA2");
             if (checkBox.checked == true){
                 text.style.display = "block";
             } else {
               $('#tipos_delitos_otro_cual').val('');
                text.style.display = "none";
             }
         }
      </script>
      <script>
         function selectOnChangeA5bis(sel) {
         if (sel.value=="14"){
         divC = document.getElementById("cualA5");
         divC.style.display = "";}
         else{
         divC = document.getElementById("cualA5");
         $('#derivacion_otro_organismo_cual').val('');

         divC.style.display = "none";}
         }
      </script>
      <script>
         function selectOnChangeA5(sel) {
           if (sel.value=="1"||sel.value=="2"){
                divC = document.getElementById("derivacion_otro_organismo_id");
                $('#otro_organismo').val(' ');
                divC.style.display = "none";}


           if (sel.value=="3"){
                divC = document.getElementById("derivacion_otro_organismo_id");
                divC.style.display = "";

         }}
      </script>
      <script>
         function selectOnChangeA12(sel) {

                                 if (sel.value=="2"){
                divC = document.getElementById("pase_pasivo");
                divC.style.display = "";

         }
         else{
               divC = document.getElementById("pase_pasivo");
               $('#motivo_pase_pasivo').val(' ');
               divC.style.display = "none";
               divC = document.getElementById("cualA12");
               $('#motivo_pase_pasivo_cual').val('');
             divC.style.display = "none";}}
      </script>
      <script>
         function selectOnChangeA12bis(sel) {
           if (sel.value=="4"){
             divC = document.getElementById("cualA12");
             divC.style.display = "";}
             else{
                divC = document.getElementById("cualA12");
                $('#motivo_pase_pasivo_cual').val('');

                divC.style.display = "none";}
         }
      </script>
      <script>
         function selectOnChangeA14(sel) {
           if (sel.value=="2"){
             divC = document.getElementById("personas_asistidas");
             divC.style.display = "";}
             else{
                divC = document.getElementById("personas_asistidas");
                $('#Nombre_apellido_persona_asistida').val('');
                $('#vinculo_victima').val('');
                $('#vinculo_victima_cual_otro').val('');
                $('#telefono_contacto').val('');
                $('#domicilio_contacto').val('');
                $('#localidad_residencia').val('');
                divC.style.display = "none";}
         }
      </script>
      <script>
         function selectOnChangeA14II(sel) {
           if (sel.value=="4"){
             divC = document.getElementById("vinculo_victima_cual");
             divC.style.display = "";}
             else{
                divC = document.getElementById("vinculo_victima_cual");
                $('#vinculo_victima_cual_otro').val('');

                divC.style.display = "none";}
         }
      </script>
      <script>
         function selectOnChangeA15(sel) {
           if (sel.value=="2"){
             divC = document.getElementById("no");
             divC.style.display = "";}
             else{
                divC = document.getElementById("no");
                $('#no').val('');

                divC.style.display = "none";}
         }
      </script>

   </body>
</html>
